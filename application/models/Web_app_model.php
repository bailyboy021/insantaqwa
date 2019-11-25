<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web_App_Model extends CI_Model {

	function insertData($table,$data)
	{
		$this->db->insert($table,$data);
	}
	
	
	var $tabel = 'guru';

    function __construct() {
        parent::__construct();
    }
    
    //fungsi untuk menampilkan semua data dari tabel database
	function get_allguru() {
        $this->db->from($this->tabel);
		$query = $this->db->get();
        return $query->result();

	}
	
	
	var $tabelberita = 'berita';
    
    //fungsi untuk menampilkan semua data dari tabel database
	function get_berita($id) {
        $query = $this->db->query("SELECT * from berita where head_berita='".$id."' order by id desc limit 1");
		return $query->result();
	}
	
	function get_news() {
        $query = $this->db->query("SELECT * from berita where id='1'");
		return $query->result();
	}
	
	function get_beritaterkini() {
        $query = $this->db->query("SELECT * from berita order by id desc");
		return $query->result();
	}
	
	function get_psb() {
        $query = $this->db->query("SELECT * from psb");
		return $query->result();
	}
	
	function get_video() {
        $query = $this->db->query("SELECT * from video where id='1'");
		return $query->result();
	}
		
	function get_foto($number,$offset){
		return $query = $this->db->get('galeri_foto',$number,$offset)->result();		
	}
	
	function get_allfoto() {
		return $this->db->get('galeri_foto')->num_rows();
	}
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */