<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {
	
	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('guru_model');
	}
	
	// Index
	public function index() {
		$guru = $this->guru_model->listing();
		
		$data = array(	'title'		=> 'Data Guru',
						'guru'	=> $guru,
						'isi'		=> 'admin/guru/list');
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	// Tambah
	public function tambah() {
	
		$guru = $this->guru_model->listing();
		// Validasi
		$v = $this->form_validation;
		
		$v->set_rules('nip','NIP','required|is_unique[guru.nip]',
			array(	'required'		=> 'NIP harus diisi',
					'is_unique'		=> 'NIP: <strong>'.$this->input->post('nip').
									   '</strong> sudah ada. Daftarkan NIP yang berbeda'));
									   			
		
		
		if($v->run()) {
			if(!empty($_FILES['gambar']['name'])) {
			$config['upload_path'] 		= '.././assets/images/guru/';
			$config['allowed_types'] 	= 'gif|jpg|png|svg';
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('gambar')) {
		// End validasi
		
		$data = array(	'title'		=> 'Tambah Data Guru',
						'error'		=> $this->upload->display_errors(),
						'isi'		=> 'admin/guru/tambah');
		$this->load->view('admin/layout/wrapper', $data);
		// Masuk database
		}else{
			$upload_data				= array('uploads' =>$this->upload->data());
			// Image Editor
			$config['image_library']	= 'gd2';
			$config['source_image'] 	= '.././assets/images/guru/'.$upload_data['uploads']['file_name']; 
			$config['new_image'] 		= '.././assets/images/thumbs/';
			$config['create_thumb'] 	= TRUE;
			$config['quality'] 			= "100%";
			$config['maintain_ratio'] 	= TRUE;
			$config['width'] 			= 256; // Pixel
			$config['height'] 			= 330; // Pixel
			$config['x_axis'] 			= 0;
			$config['y_axis'] 			= 0;
			$config['thumb_marker'] 	= '';
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			
			// Proses ke database
			$i = $this->input;
			$data = array(	
							'nip'				=> $i->post('nip'),
							'nama_lengkap'		=> $i->post('nama_guru'),
							'alamat'			=> $i->post('alamat'),
							'email'				=> $i->post('email'),
							'telp'				=> $i->post('telp'),
							'foto'				=> $upload_data['uploads']['file_name'],
							'fb'				=> $i->post('fb'),
							'twitter'			=> $i->post('twitter'),
							'ig'				=> $i->post('ig')
							);
			$this->guru_model->tambah($data);
			$this->session->set_flashdata("sukses","<div class='alert alert-block alert-success'>
										<button type='button' class='close' data-dismiss='alert'>
											<i class='icon-remove'><b>x</b></i>
										</button>

										<p>
											<strong>
												<i class='icon-ok'></i>
												Selamat!
											</strong>
											Data berhasil ditambah...!
										</p>
									</div>");
			redirect(base_url('admin/guru'));
		}}
		else{
			// Proses ke database
			$i = $this->input;
			$data = array(	'nip'				=> $i->post('nip'),
							'nama_lengkap'		=> $i->post('nama_guru'),
							'alamat'			=> $i->post('alamat'),
							'email'				=> $i->post('email'),
							'telp'				=> $i->post('telp'),
							'fb'				=> $i->post('fb'),
							'twitter'			=> $i->post('twitter'),
							'ig'				=> $i->post('ig')
							);
			$this->guru_model->tambah($data);
			$this->session->set_flashdata('sukses','Data Guru berhasil ditambah');
			redirect(base_url('admin/guru'));
		}}
		// End masuk database
		$data = array(	'title'		=> 'Tambah Data Guru',
						'guru'	=> $guru,
						'isi'		=> 'admin/guru/tambah');
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	// Edit
	public function edit($id) {
		$guru		= $this->guru_model->detail($id);
		
		// Validasi
		$v = $this->form_validation;
		
		$v->set_rules('nama_guru','Nama','required',
			array(	'required'		=> 'Nama harus diisi'));
		
		
		if($v->run()) {
			if(!empty($_FILES['gambar']['name'])) {
			$config['upload_path'] 		= '.././assets/images/guru/';
			$config['allowed_types'] 	= 'gif|jpg|png|svg';
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('gambar')) {
		// End validasi
		
		$data = array(	'title'		=> 'Edit Data Guru',
						'guru'	=> $guru,
						'error'		=> $this->upload->display_errors(),
						'isi'		=> 'admin/guru/edit');
		$this->load->view('admin/layout/wrapper', $data);
		// Masuk database
		}else{
			$upload_data				= array('uploads' =>$this->upload->data());
			// Image Editor
			$config['image_library']	= 'gd2';
			$config['source_image'] 	= '.././assets/images/guru/'.$upload_data['uploads']['file_name']; 
			$config['new_image'] 		= '.././assets/images/thumbs/';
			$config['create_thumb'] 	= TRUE;
			$config['quality'] 			= "100%";
			$config['maintain_ratio'] 	= TRUE;
			$config['width'] 			= 360; // Pixel
			$config['height'] 			= 200; // Pixel
			$config['x_axis'] 			= 0;
			$config['y_axis'] 			= 0;
			$config['thumb_marker'] 	= '';
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			
			// Proses ke database
			$i = $this->input;
			$data = array(	'id'				=> $id,
							'nip'				=> $i->post('nip'),
							'nama_lengkap'		=> $i->post('nama_guru'),
							'alamat'			=> $i->post('alamat'),
							'email'				=> $i->post('email'),
							'telp'				=> $i->post('telp'),
							'foto'				=> $upload_data['uploads']['file_name'],
							'fb'				=> $i->post('fb'),
							'twitter'			=> $i->post('twitter'),
							'ig'				=> $i->post('ig')
							);
			$this->guru_model->edit($data);
			$this->session->set_flashdata("sukses","Data Guru telah diedit  <button type='button' class='close' data-dismiss='alert'>
											<i class='icon-remove'><b>x</b></i>
										</button>");
			redirect(base_url('admin/guru'));
		}}else{
			// Proses ke database
			$i = $this->input;
			$data = array(	'id'				=> $id,
							'nip'				=> $i->post('nip'),
							'nama_lengkap'		=> $i->post('nama_guru'),
							'alamat'			=> $i->post('alamat'),
							'email'				=> $i->post('email'),
							'telp'				=> $i->post('telp'),
							'fb'				=> $i->post('fb'),
							'twitter'			=> $i->post('twitter'),
							'ig'				=> $i->post('ig')
							);
			$this->guru_model->edit($data);
			$this->session->set_flashdata('sukses','Data Guru berhasil diedit');
			redirect(base_url('admin/guru'));
		}}
		// End masuk database
		$data = array(	'title'		=> 'Edit Data Guru',
						'guru'	=> $guru,
						'isi'		=> 'admin/guru/edit'); 
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Delete
	public function delete($id) {
		$this->simple_login->cek_login();
		$data = array('id'	=> $id);
		$this->guru_model->delete($data);
		$this->session->set_flashdata('sukses','Data telah dihapus');
		redirect(base_url('admin/guru'));		
	}
}