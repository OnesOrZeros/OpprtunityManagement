<?php
	class Accounts extends CI_Controller{
		public function index(){
			$data['title'] = 'Existing Accounts';

			$data['accounts'] = $this->account_model->get_accounts();

			$this->load->view('templates/header');
			$this->load->view('accounts/index', $data);
			$this->load->view('templates/footer');
		}

		public function view($Name = NULL){
			$data['account'] = $this->Account_model->get_accounts($Name);

			if (empty($data['account'])) {
				show_404();
			}

			$data['title'] = $data['account']['title'];

			$this->load->view('templates/header');
			$this->load->view('accounts/view', $data);
			$this->load->view('templates/footer');
		}

		public function create(){
			// Check Log In
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['title'] = 'Create Account';

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('mobile', 'Mobile', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('accounts/create', $data);
				$this->load->view('templates/footer');	
			}else{
				$this->account_model->create_account();

				// Set  message
				$this->session->set_flashdata('account_created', 'You have created an account successfully');
				redirect('accounts');
			}	
		}

		public function delete($AccountID){
			// Check Log In
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$this->account_model->delete_account($AccountID);

			// Set message
				$this->session->set_flashdata('account_deleted', 'Your account details have been deleted');
			redirect('accounts');
		}

		public function edit($name){
			// Check Log In
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['account'] = $this->account_model->get_accounts($name);

			if (empty($data['account'])) {
				show_404();
			}

			$data['title'] = 'Edit Post';

			$this->load->view('templates/header');
			$this->load->view('accounts/edit', $data);
			$this->load->view('templates/footer');
		}

		public function update(){
			// Check Log In
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			
			$this->account_model->update_account();

			// Set message
				$this->session->set_flashdata('account_updated', 'Your account details have been updated');
			redirect('accounts');
		}
	}