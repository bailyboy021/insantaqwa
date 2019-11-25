<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Murid extends CI_Controller {
	
	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('murid_model');
		$this->load->model('kategori_berita_model');
	}
	
	// Index
	public function index() {
		$murids = $this->murid_model->listing();
		
		$data = array(	'title'		=> 'Data Murid',
						'murid'	=> $murids,
						'isi'		=> 'admin/murid/list');
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	// Tambah
	
	public function tambah() {
		
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('nama_murid','Nama','required',
		array( 'required' => 'Nama harus diisi'));
		
		$valid->set_rules('nis','NIS','required|is_unique[murid.NIS]',
		array( 	'required' 	=> 'NIS harus diisi',
				'is_unique'	=> 'NIS: <strong>'.$this->input->post('nis').
							   '</strong> sudah digunakan. Buat NIS baru!'));
		
		if($valid->run()===FALSE) {
		// End validasi
		
		$data = array( 'title' => 'Tambah Data Murid',
						'isi'  => 'admin/murid/tambah');
		$this->load->view('admin/layout/wrapper',$data);
		// masuk database
		}else{
			// Proses ke database
			$i = $this->input;
			$data = array(	
							'nis'				=> $i->post('nis'),
							'nama_murid'		=> $i->post('nama_murid'),
							'tmp_lahir'			=> $i->post('tmplahir'),
							'tgl_lahir'			=> $i->post('tgllahir'),
							'jenis_kelamin'		=> $i->post('jenis_kelamin'),
							'agama'				=> $i->post('agama'),
							'alamat'			=> $i->post('alamat'),
							'tgl_masuk'			=> $i->post('tgl_masuk'),
							'kelas'				=> $i->post('kelas'),
							'nama_ayah'			=> $i->post('ayah'),
							'nama_ibu'			=> $i->post('ibu'),
							'pekerjaan_ayah'	=> $i->post('pekerjaan_ayah'),
							'pekerjaan_ibu'		=> $i->post('pekerjaan_ibu'),
							'alamat_ortu'		=> $i->post('alamat_ortu'),
							'nama_wali'			=> $i->post('wali'),
							'pekerjaan_wali'	=> $i->post('pekerjaan_wali'),
							'alamat_wali'		=> $i->post('alamat_wali'),
							'telp'				=> $i->post('telp')
							);
			$this->murid_model->tambah($data);
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
			redirect(base_url('admin/murid'));
		}
		// End masuk database
	}
	
	
	
	
	// Edit
	public function edit($nis) {
		$murids		= $this->murid_model->detail($nis);
		
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('nama_murid','Nama','required',
		array( 'required' => 'Nama harus diisi'));
		
		$valid->set_rules('nis','NIS','required',
		array( 	'required' 	=> 'NIS harus diisi'));
		
		if($valid->run()===FALSE) {
		// End validasi
		
		$data = array( 'title' => 'Edit Data Murid',
						'murid'	=> $murids,
						'isi'  => 'admin/murid/edit');
		$this->load->view('admin/layout/wrapper',$data);
		// masuk database
		}else{
			// Proses ke database
			$i = $this->input;
			$data = array(	
							'nis'				=> $i->post('nis'),
							'nama_murid'		=> $i->post('nama_murid'),
							'tmp_lahir'			=> $i->post('tmplahir'),
							'tgl_lahir'			=> $i->post('tgllahir'),
							'jenis_kelamin'		=> $i->post('jenis_kelamin'),
							'agama'				=> $i->post('agama'),
							'alamat'			=> $i->post('alamat'),
							'tgl_masuk'			=> $i->post('tgl_masuk'),
							'kelas'				=> $i->post('kelas'),
							'nama_ayah'			=> $i->post('ayah'),
							'nama_ibu'			=> $i->post('ibu'),
							'pekerjaan_ayah'	=> $i->post('pekerjaan_ayah'),
							'pekerjaan_ibu'		=> $i->post('pekerjaan_ibu'),
							'alamat_ortu'		=> $i->post('alamat_ortu'),
							'nama_wali'			=> $i->post('wali'),
							'pekerjaan_wali'	=> $i->post('pekerjaan_wali'),
							'alamat_wali'		=> $i->post('alamat_wali'),
							'telp'				=> $i->post('telp')
							);
			$this->murid_model->edit($data,$nis);
			$this->session->set_flashdata('sukses','Data telah diedit');
			redirect(base_url('admin/murid'));
		}
		// End masuk database
	}

	// Delete
	public function delete($id) {
		$this->simple_login->cek_login();
		$data = array('NIS'	=> $id);
		$this->murid_model->delete($data);
		$this->session->set_flashdata('sukses','Data telah dihapus');
		redirect(base_url('admin/murid'));		
	}
	
	// Detail
	public function detail($nis) {
		$murids		= $this->murid_model->detail($nis);
		
		
		
		$data = array( 'title' => 'Data Murid',
						'murid'	=> $murids,
						'isi'  => 'admin/murid/detail');
		$this->load->view('admin/layout/wrapper',$data);
		
	}
}