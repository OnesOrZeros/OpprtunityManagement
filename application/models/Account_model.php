<?php
class Account_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function get_accounts($Name = FALSE){
		if($Name === FALSE){
			$this->db->order_by('AccountID');
			$query = $this->db->get('accounts');
			return $query->result_array();
		}

		$query = $this->db->get_where('accounts', array('Name' => $Name));
		return $query->row_array();
	}

	public function create_account(){
		$name = url_title($this->input->post('name'));

		$data = array(
			'name' => $this->input->post('name'),
			'address' => $this->input->post('address'),
			'mobile' => $this->input->post('mobile'),
			'email' => $this->input->post('email'),
			'userid' => $this->input->post('userid')
		);

		return $this->db->insert('accounts', $data);
	}

	public function delete_account($AccountID){
		$this->db->where('AccountID', $AccountID);
		$this->db->delete('accounts');
		return true;
	}

	public function update_account(){
		
		$data = array(
			'name' => $this->input->post('name'),
			'address' => $this->input->post('address'),
			'mobile' => $this->input->post('mobile'),
			'email' => $this->input->post('email')
		);

		print_r($data );

		$this->db->where('AccountID', $this->input->post('id'));
		return $this->db->update('accounts', $data);
	}
}