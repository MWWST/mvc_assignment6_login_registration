<?php

class Login extends CI_Controller {

	public function register(){
		
		$pw=($this->input->post('password_'));
		// echo md5($pw);

		$config = array(
					array(
							'field' =>'email',
							'label' =>'Email',
							'rules' =>'required|valid_email|is_unique[users.email]'
						),
					array(
							'field' =>'password_',
							'label' =>'password',
							'rules' =>'min_length[8]'
						),
					array( 
							'field' =>'pw_confirm',
							'label' =>'PW Confirmation',
							'rules' =>'matches[password_]'
						)
			);
		$this->load->library('form_validation');
		$this->form_validation->set_rules($config);

			if($this->form_validation->run() === FALSE){
				echo validation_errors();
			}

			else {
			$this->load->model('User');
			$user= array('first_name'=>$this->input->post('first_name'),'last_name'=>$this->input->post('last_name'),'email'=>$this->input->post('email'),'password'=>md5($pw));
			$add_user=$this->User->adduser($user);
				if($add_user === TRUE){
				echo "you got it in";
				}
				(die);
			}
		}
	public function sign_in(){ 
		var_dump($this->input->post());
		$this->output->enable_profiler(TRUE);
		$loginemail = $this->input->post('loginemail');
		$password = md5($this->input->post('loginpassword'));
		$this->load->model('User');
		$user= $this->User->login($loginemail);
		if ($user && $user['password']== $password) {
			$current_user = array(
				'user_id' => $user['id'],
				'user_email'=> $user['email'],
				'user_name'=> $user['first_name']." ".$user['last_name'],
				'is_logged_in' => true
				);
			$this->session->set_userdata($current_user);
			var_dump($this->session->all_userdata());
		}
		else {
			echo "wrong email";
		}
			



	}
}

?>