<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_model extends CI_Model {
	
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	//Listing
	public function listing() {
		$this->db->select('*');
		$this->db->from('guru');
		
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	
	
	
	//Home
	public function home() {
		$this->db->select('*');
		$this->db->from('guru');
		$this->db->order_by('id','DESC');
		$this->db->limit(6);
		$query = $this->db->get();
		return $query->result();
	}
	
	// detail perberita
	public function detail($id){
		$query = $this->db->get_where('guru',array('id'  => $id));
		return $query->row();
	}
	
	// Tambah
	public function tambah ($data) {
		$this->db->insert('guru',$data);
	}
	
	// Edit 
	public function edit ($data) {
		$this->db->where('id',$data['id']);
		$this->db->update('guru',$data);
	}
	
	// Delete
	public function delete ($data){
		$this->db->where('id',$data['id']);
		$this->db->delete('guru',$data);
	}
}