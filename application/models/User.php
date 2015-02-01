<?php
	class User extends CI_Model {

		public function adduser($user){
			
			$query = "INSERT INTO assignment6.users (first_name,last_name,email,password,created_at) VALUES (?,?,?,?,?)"; 
			$values= array($user['first_name'],$user['last_name'],$user['email'],$user['password'],date("Y-m-d,H:i:s"));
			return $this->db->query($query,$values);
		}

		public function login($email){
			return $this->db->query("SELECT * FROM users WHERE email =?", array($email))->row_array();
		}

	}	
?>