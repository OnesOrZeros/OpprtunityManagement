<?php
	class Users extends CI_Controller{
		// Register user
		public function register(){
			$data['title'] = 'Sign Up';

			$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer');
			} else{
				//Encrypt password
				$enc_password = md5($this->input->post('password'));

				$this->user_model->register($enc_password);

				// Set registration message
				$this->session->set_flashdata('user_registered', 'You are now registered and can log in');
				redirect('users/login');
			}
		}

		// Log in user
		public function login(){
			$data['title'] = 'Sign In';

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');
			} else{
				// Get Username
				$username = $this->input->post('username');
				//Get and encrypt the password
				$password = md5($this->input->post('password'));

				// Log In user
				$user_id = $this->user_model->login($username, $password);

				print_r($user_id);

				if($user_id){
					// Create session
					$user_data = array(
						'userid' => $userid,
						'username' => $username,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);

					// Set registration message
				$this->session->set_flashdata('user_loggedin', 'You are now logged in');

				redirect('accounts');
				} else{
					// Set registration message
				$this->session->set_flashdata('login_failed', 'Log In not successful');

				redirect('accounts');
				}
			}
		}

		//Log use out
		public function logout(){
			// Unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');

			// Set registration message
				$this->session->set_flashdata('user_loggedout', 'You are now logged out');

				redirect('users/login');
		}

		// Check if username exists
		public function check_username_exists($username){
			$this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');
			if ($this->user_model->check_username_exists($username)) {
				return true;
			}else{
				return false;
			}
		}
	}