<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Psb_model extends CI_Model {
	
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	//Listing
	public function listing() {
		$this->db->select('*');
		$this->db->from('psb');
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	
	// detail peruser
	public function detail($id){
		$query = $this->db->get_where('psb',array('id'  => $id));
		return $query->row();
	}
	
	// Tambah
	public function tambah ($data) {
		$this->db->insert('psb',$data);
	}
	
	// Edit 
	public function edit ($data,$id) {
		$this->db->where('id',$id);
		$this->db->update('psb',$data);
	}
	
	// Delete
	public function delete ($data){
		$this->db->where('id',$data['id']);
		$this->db->delete('psb',$data);
	}
}