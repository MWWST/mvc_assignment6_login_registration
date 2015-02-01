<?php

class Login extends CI_Controller {
	public function register(){
		$pw=($this->input->post('password_'));
															// create an array of configuration for validation check out ellislab.com/codeigniter/user-guide/libraries/form_validation.html#rulereference for more options, you can pipe, etc.
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
		$this->load->library('form_validation'); 			// load form validation library
		$this->form_validation->set_rules($config); 		// pass the associative array of 														config items above into the set_rules 													  function
			if($this->form_validation->run() === FALSE){    // if we have errors 
				echo validation_errors();
			}
			else {  										 // if no errors let's run the add 													user function in the User model
			$this->load->model('User');
			$user= array('first_name'=>$this->input->post('first_name'),'last_name'=>$this->input->post('last_name'),'email'=>$this->input->post('email'),'password'=>md5($pw));
			$add_user=$this->User->adduser($user);
				if($add_user === TRUE){
			$loginemail = $this->input->post('email');
			// echo $loginemail;
			$password = md5($this->input->post('password_')); // setting password to md5
			$this->load->model('User');
			$user= $this->User->login($loginemail);
				if ($user && $user['password']== $password) {
					$current_user = array(  				// setting array to pass into session
						'user_id' => $user['id'],
						'user_email'=> $user['email'],
						'user_name'=> $user['first_name']." ".$user['last_name'],
						'user_first_name'=> $user['first_name'],
						'user_last_name' =>$user['last_name'],
						'is_logged_in' => true
						);
					$this->session->set_userdata($current_user);
					redirect('/login/welcome'); 					// redirect to welcome method 												which checks for user logged in.
					}
				}
			}
		}
	public function welcome(){ 
																
		if ($this->session->userdata('is_logged_in')==true){ 	// if the user is logged in 															already (which means they just 															registered)
			$this->load->view('welcome'); 						//load welcome view
		}
		else {
		$loginemail = $this->input->post('loginemail'); 		// otherwise go through user 														 		login process
		$password = md5($this->input->post('loginpassword')); 	//md5 the password
		$this->load->model('User'); 							//load user model
		$user= $this->User->login($loginemail);					//remind myself why I am doing this
		if ($user && $user['password']== $password) {			//if user passwor matches
			$current_user = array(								//create an array that we'll stoe 														in session
				'user_id' => $user['id'],
				'user_email'=> $user['email'],
				'user_name'=> $user['first_name']." ".$user['last_name'],
				'user_first_name'=> $user['first_name'],
				'user_last_name' =>$user['last_name'],
				'is_logged_in' => true
				);
			$this->session->set_userdata($current_user);		// store the array in session
			$this->load->view('welcome');
		}	
	}
}
	public function logout(){									//when user clicks 'logout', 																destroy session and go to homepage.
			$this->session->sess_destroy();
			redirect('http://host-2:8888/');
		}
	}
?>