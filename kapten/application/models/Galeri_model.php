<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri_model extends CI_Model {
	
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	//Listing
	public function listing() {
		$this->db->select('*');
		$this->db->from('galeri_foto');
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getRows($id = ''){
        $this->db->select('id,file_name,created');
        $this->db->from('galeri_foto');
        if($id){
            $this->db->where('id',$id);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            $this->db->order_by('created','desc');
            $query = $this->db->get();
            $result = $query->result_array();
        }
        return !empty($result)?$result:false;
    }
    
    public function insert($data = array()){
        $insert = $this->db->insert_batch('galeri_foto',$data);
        return $insert?true:false;
    }
	
	// detail
	public function detail($id){
		$query = $this->db->get_where('galeri_foto',array('id'  => $id));
		return $query->row();
	}
	
	// Edit 
	public function edit ($data,$id) {
		$this->db->where('id',$id);
		$this->db->update('galeri_foto',$data);
	}
	
	// Delete
	public function delete ($data){
		$this->db->where('id',$data['id']);
		$this->db->delete('galeri_foto',$data);
	}
}