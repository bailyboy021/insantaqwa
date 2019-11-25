<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Psb extends CI_Controller {
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->model('psb_model');
	}
	
	// Index
	public function index() {
		$psb = $this->psb_model->listing();
		
		$data = array( 	'title' => 'Biaya Penerimaan Siswa Baru',
						'psb'	=> 	$psb,
						'isi'  	=> 'admin/psb/list');
		$this->load->view('admin/layout/wrapper',$data);
	}
	
		
	// Edit PSB
	public function edit($id) {
		$psb = $this->psb_model->detail($id);
		
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('adm_daftar','Administrasi Pendaftaran','required',
		array( 'required' => 'Administrasi Pendaftaran harus diisi'));
		
		if($valid->run()===FALSE) {
		// End validasi
		
		$data = array( 'title' 	=> 'Edit Biaya Pendaftaran Siswa Baru',
						'psb'	=> $psb,
						'isi' 	=> 'admin/psb/edit');
		$this->load->view('admin/layout/wrapper',$data);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 	'tahun_ajaran'				=> 	$i->post('thn_ajar'),
							'administrasi_pendaftaran'	=> 	$i->post('adm_daftar'),
							'jariah_gedung'				=>	$i->post('uang_gd'),
							'seragam_pa'				=>	$i->post('seragam_pa'),
							'seragam_pi'				=>	$i->post('seragam_pi'),
							'buku_paket'				=> $i->post('buku'),
							'kegiatan_setahun'			=> $i->post('kegiatan'),
							'spp'						=> $i->post('spp'));
			$this->psb_model->edit($data,$id);
			$this->session->set_flashdata('sukses','biaya pendaftaran siswa baru telah diedit');
			redirect(base_url('admin/psb'));
		}
		// End masuk database
	}
	
}