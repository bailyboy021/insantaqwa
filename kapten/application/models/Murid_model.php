<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Murid_model extends CI_Model {
	
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	//Listing
	public function listing() {
		$this->db->select('*');
		$this->db->from('murid');
		
		$this->db->order_by('NIS','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	
	
	
	//Home
	public function home() {
		$this->db->select('*');
		$this->db->from('murid');
		$this->db->order_by('NIS','DESC');
		$this->db->limit(6);
		$query = $this->db->get();
		return $query->result();
	}
	
	// detail perberita
	public function detail($nis){
		$query = $this->db->get_where('murid',array('nis'  => $nis));
		return $query->row();
	}
	
	// Tambah
	public function tambah ($data) {
		$this->db->insert('murid',$data);
	}
	
	// Edit 
	public function edit ($data) {
		$this->db->where('nis',$data['nis']);
		$this->db->update('murid',$data);
	}
	
	// Delete
	public function delete ($data){
		$this->db->where('NIS',$data['NIS']);
		$this->db->delete('murid',$data);
	}
}