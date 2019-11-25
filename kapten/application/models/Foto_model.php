<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foto_model extends CI_Model {
	
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
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
}