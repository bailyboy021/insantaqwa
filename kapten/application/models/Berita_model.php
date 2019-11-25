<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {
	
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	//Listing
	public function listing() {
		$this->db->select('*');
		$this->db->from('berita');
		
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	
	
	
	//Home
	public function home() {
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->order_by('id','DESC');
		$this->db->limit(6);
		$query = $this->db->get();
		return $query->result();
	}
	
	// detail perberita
	public function detail($id_berita){
		$query = $this->db->get_where('berita',array('id'  => $id_berita));
		return $query->row();
	}
	
	// Tambah
	public function tambah ($data) {
		$this->db->insert('berita',$data);
	}
	
	// Edit 
	public function edit ($data) {
		$this->db->where('id',$data['id']);
		$this->db->update('berita',$data);
	}
	
	// Delete
	public function delete ($data){
		$this->db->where('id',$data['id']);
		$this->db->delete('berita',$data);
	}
}