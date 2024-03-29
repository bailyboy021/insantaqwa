<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	//Listing
	public function listing() {
		$this->db->select('*');
		$this->db->from('user');
		$this->db->order_by('id_user','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	
	// detail peruser
	public function detail($id_user){
		$query = $this->db->get_where('user',array('id_user'  => $id_user));
		return $query->row();
	}
	
	// Tambah
	public function tambah ($data) {
		$this->db->insert('user',$data);
	}
	
	// Edit 
	public function edit ($data,$id_user) {
		$this->db->where('id_user',$id_user);
		$this->db->update('user',$data);
	}
	
	// Delete
	public function delete ($data){
		$this->db->where('id_user',$data['id_user']);
		$this->db->delete('user',$data);
	}
}