<?php
	class User_model extends CI_Model{
		public function register($enc_pasword){
			// User data array
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $enc_pasword
			);

			// Insert User
			return $this->db->insert('users', $data);
		}

		// Log user in
		public function login($username, $password){
			// Validate
			$this ->db->where('Username', $username);
			$this ->db->where('Password', $password);

			$result = $this->db->get('users');

			if($result->num_rows() == 1){
				return $result->row(0)->UserID;
			} else {
				return false;
			}
		}

		// Check username exists
		public function check_username_exists($username){
			$query = $this->db->get_where('users', array('username' => $username));
			if (empty($query->row_array())) {
				return true;
			} else {
				return false;
			}
		}
	}