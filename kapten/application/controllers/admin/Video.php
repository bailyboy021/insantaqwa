<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->model('video_model');
	}
	
	// Index
	public function index() {
		$video = $this->video_model->listing();
		
		$data = array( 	'title' => 'Manajemen Video',
						'video'	=> 	$video,
						'isi'  	=> 'admin/video/list');
		$this->load->view('admin/layout/wrapper',$data);
	}
	
	// Tambah Video
	public function tambah() {
		
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('judul','Judul','required',
		array( 'required' => 'Judul harus diisi'));
		
		$valid->set_rules('video','Video','required',
		array( 'required' => 'Video harus diisi'));
		
		if($valid->run()===FALSE) {
		// End validasi
		
		$data = array( 'title' => 'Tambah Video',
						'isi'  => 'admin/video/tambah');
		$this->load->view('admin/layout/wrapper',$data);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 	'judul'			=> $i->post('judul'),
							'keterangan'	=> $i->post('keterangan'),
							'url'			=> $i->post('video'),
							'tanggal'		=> date('Y-m-d H:i:s'));
			$this->video_model->tambah($data);
			$this->session->set_flashdata('sukses','Video telah ditambah');
			redirect(base_url('admin/video'));
		}
		// End masuk database
	}
	
	// Edit Video
	public function edit($id) {
		$video = $this->video_model->detail($id);
		
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('judul','Judul','required',
			array( 'required' => 'Judul harus diisi'));
		
		$valid->set_rules('video','Video','required',
		array( 'required' => 'Video harus diisi'));
		
		if($valid->run()===FALSE) {
		// End validasi
		
		$data = array( 'title' 	=> 'Edit Video',
						'video'	=> $video,
						'isi' 	=> 'admin/video/edit');
		$this->load->view('admin/layout/wrapper',$data);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 	'judul'			=> $i->post('judul'),							
							'keterangan'	=> $i->post('keterangan'),
							'url'			=> $i->post('video'),
							'tanggal'		=> date('Y-m-d H:i:s'));

			$this->video_model->edit($data,$id);
			$this->session->set_flashdata('sukses','video telah diedit');
			redirect(base_url('admin/video'));
		}
		// End masuk database
	}
	
	// Delete Video
	public function delete($id) {
		$this->simple_login->cek_login();
		$data = array('id'=> $id);
		$this->video_model->delete($data);
		$this->session->set_flashdata('sukses','video telah dihapus');
		redirect (base_url('admin/video'));
	}
}