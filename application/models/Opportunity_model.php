<?php
class Opportunity_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function get_opportunities($id = FALSE){
		if($id === FALSE){
			$query = $this->db->get('opportunities');
			return $query->result_array();
		}

		$query = $this->db->get_where('opportunities', array('OpportunityID' => $id));
		return $query->row_array();
	}

	public function create_opportunity(){
		$name = url_title($this->input->post('name'));

		$data = array(
			'name' => $this->input->post('name'),
			'stage' => $this->input->post('stage'),
			'amount' => $this->input->post('amount'),
			'userid' => $this->input->post('userid'),
			'accountid' => $this->input->post('accountid')
		);

		return $this->db->insert('opportunities', $data);
	}

	public function delete_opportunity($OpportunityID){
		$this->db->where('OpportunityID', $OpportunityID);
		$this->db->delete('opportunities');
		return true;
	}

	public function update_opportunity(){
		
		$data = array(
			'name' => $this->input->post('name'),
			'stage' => $this->input->post('stage'),
			'amount' => $this->input->post('amount'),
		);


		print_r($data );
		
		$this->db->where('OpportunityID', $this->input->post('id'));
		return $this->db->update('opportunities', $data);
	}
}