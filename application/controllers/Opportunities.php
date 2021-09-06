<?php
	class Opportunities extends CI_Controller{
		public function index(){
			$data['title'] = 'Existing Opportunities';

			$data['opportunities'] = $this->opportunity_model->get_opportunities();

			$this->load->view('templates/header');
			$this->load->view('opportunities/index', $data);
			$this->load->view('templates/footer');
		}

		public function view($id = NULL){
			$data['opportunity'] = $this->opportunity_model->get_opportunities($id);

			if (empty($data['opportunity'])) {
				show_404();
			}

			$data['title'] = $data['opportunity']['title'];

			$this->load->view('templates/header');
			$this->load->view('opportunities/view', $data);
			$this->load->view('templates/footer');
		}

		public function create(){
			// Check Log In
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['title'] = 'Create Opportunity';
			$data['accounts'] = $this->account_model->get_accounts();

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('stage', 'Stage', 'required');
			$this->form_validation->set_rules('amount', 'Amount', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('opportunities/create', $data);
				$this->load->view('templates/footer');	
			}else{
				$this->opportunity_model->create_opportunity();

				// Set message
				$this->session->set_flashdata('opportunity_created', 'You have created an opportunity');
				redirect('opportunities');
			}	
		}

		public function delete($OpportunityID){
			// Check Log In
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$this->opportunity_model->delete_opportunity($OpportunityID);

			// Set message
				$this->session->set_flashdata('opportunity_deleted', 'You have updated opportunity deleted');
			redirect('opportunities');
		}

		public function edit($id){
			// Check Log In
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['opportunity'] = $this->opportunity_model->get_opportunities($id);

			if (empty($data['opportunity'])) {
				show_404();
			}

			$data['title'] = 'Edit Opportunity';

			$this->load->view('templates/header');
			$this->load->view('opportunities/edit', $data);
			$this->load->view('templates/footer');
		}

		public function update(){
			// Check Log In
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			
			$this->opportunity_model->update_opportunity();

			// Set message
				$this->session->set_flashdata('opportunity_updated', 'You have updated opportunity details');
			redirect('opportunities');
		}
	}