<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foto extends CI_Controller {
	
	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('foto_model');
		$this->load->model('user_model');
		$this->load->model('video_model');
		$this->load->model('berita_model');
		$this->load->model('produk_model');
		$this->load->model('kategori_produk_model');
		$this->load->model('kategori_berita_model');
	}
	
	// Index
	public function index() {
		$site 				= $this->konfigurasi_model->listing();
		
		$foto				= $this->foto_model->getRows();
		
		$data = array(	'title'				=> 'Dashboard Page - '.$site['namaweb'],
						
						'foto'				=> $foto,
						'isi'				=> 'admin/foto/list');
		
		
		
		
        if($this->input->post('fileSubmit') && !empty($_FILES['userFiles']['name'])){
            $filesCount = count($_FILES['userFiles']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];

                $uploadPath = '.././assets/images/galeri/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
					$uploadData[$i]['kategori'] = $this->input->post('album');
                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                }
            }
            
            if(!empty($uploadData)){
                //Insert file information into the database
                $insert = $this->foto_model->insert($uploadData);
                $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
                $this->session->set_flashdata('statusMsg',$statusMsg);
            }
        }
        //Get files data from database
        $data['galeri_foto'] = $this->foto_model->getRows();
        //Pass the files data to view
        $this->load->view('admin/layout/wrapper',$data);
    
		
		
		
	}
	
	// Profil
	public function profil() {
		$site = $this->konfigurasi_model->listing();
		$id_user= $this->session->userdata('id');
		$user	= $this->user_model->detail($id_user);
		
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('nama','Website name','required');
		$valid->set_rules('email','Email','required|valid_email');
		
		if($valid->run() === FALSE) {
			
		$data = array(	'title'	=> 'Update Profil - '.$site['namaweb'],
						'user'	=> $user,
						'isi'	=> 'admin/dasbor/profil');
		$this->load->view('admin/layout/wrapper',$data);	
		}else{
			$i = $this->input;
			$password = $i->post('password');
			if(strlen($password) < 6 || strlen($password) > 32 ) {
				$data = array(	'id_user'	=> $i->post('id_user'),
								'nama'		=> $i->post('nama'),
								'email'		=> $i->post('email'),
								'level'		=> $i->post('level'));
				$this->user_model->edit($data);		
				$this->session->set_flashdata('sukses','User updated and password changed');				
			}else{
				$data = array(	'id_user'	=> $i->post('id_user'),
								'nama'		=> $i->post('nama'),
								'email'		=> $i->post('email'),
								'password'	=> sha1($i->post('password')),
								'level'		=> $i->post('level'));
				$this->user_model->edit($data);		
				$this->session->set_flashdata('sukses','User updated successfully');
			}
			redirect(base_url('admin/dasbor/profil'));
		}	
	}
	
	// General Configuration
	public function konfigurasi() {
		$site = $this->konfigurasi_model->listing();
		
		// Validasi 
		$this->form_validation->set_rules('namaweb','Website name website','required');
		$this->form_validation->set_rules('email','Email','valid_email');
		
		if($this->form_validation->run() === FALSE) {
			
		$data = array(	'title'	=> 'General Configuration',
						'site'	=> $site,
						'isi'	=> 'admin/dasbor/umum');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
			$i = $this->input;
			$data = array(	'id_konfigurasi'	=> $i->post('id_konfigurasi'),
							'home_setting'		=> $i->post('home_setting'),
							'namaweb'			=> $i->post('namaweb'),
							'tagline'			=> $i->post('tagline'),
							'tentang'			=> $i->post('tentang'),
							'website'			=> $i->post('website'),
							'email'				=> $i->post('email'),
							'alamat'			=> $i->post('alamat'),
							'telepon'			=> $i->post('telepon'),
							'hp'				=> $i->post('hp'),
							'fax'				=> $i->post('fax'),
							'keywords'			=> $i->post('keywords'),
							'metatext'			=> $i->post('metatext'),
							'facebook'			=> $i->post('facebook'),
							'twitter'			=> $i->post('twitter'),
							'instagram'			=> $i->post('instagram'),
							'google_map'		=> $i->post('google_map'),
							'id_user'			=> $this->session->userdata('id'));
			$this->konfigurasi_model->edit($data);
			$this->session->set_flashdata('sukses','Site configuration updated successfully');
			redirect(base_url('admin/dasbor/konfigurasi'));
		}
	}
	
	// New logo
	public function logo() {
		$site = $this->konfigurasi_model->listing();
		
		$v = $this->form_validation;
		$v->set_rules('id_konfigurasi','ID Konfigurasi','required');
		
		if($v->run()) {
			
			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['max_size']			= '12000'; // KB	
$this->load->library('upload', $config);
			if(! $this->upload->do_upload('logo')) {
				
		$data = array(	'title'	=> 'New logo',
						'site'	=> $site,
						'error'	=> $this->upload->display_errors(),
						'isi'	=> 'admin/dasbor/logo');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
				$upload_data				= array('uploads' =>$this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/image/'.$upload_data['uploads']['file_name']; 
				$config['new_image'] 		= './assets/upload/image/thumbs/';
				$config['create_thumb'] 	= TRUE;
				$config['maintain_ratio'] 	= TRUE;
				$config['width'] 			= 150; // Pixel
				$config['height'] 			= 150; // Pixel
				$config['thumb_marker'] 	= '';
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				// Hapus gambar lama
				unlink('./assets/upload/image/'.$site['logo']);
				unlink('./assets/upload/image/thumbs/'.$site['logo']);
				// End hapus gambar lama
				// Masuk ke database
				$i = $this->input;
				$data = array(	'id_konfigurasi'=> $i->post('id_konfigurasi'),
								'logo'			=> $upload_data['uploads']['file_name'],
								'id_user'			=> $this->session->userdata('id'));
				$this->konfigurasi_model->edit($data);
				$this->session->set_flashdata('sukses','Logo changed');
				redirect(base_url('admin/dasbor/logo'));
		}}
		// Default page
		$data = array(	'title'	=> 'New logo',
						'site'	=> $site,
						'isi'	=> 'admin/dasbor/logo');
		$this->load->view('admin/layout/wrapper',$data);
	}
	
	// Konfigurasi Icon
	public function icon() {
		$site = $this->konfigurasi_model->listing();
		
		$v = $this->form_validation;
		$v->set_rules('id_konfigurasi','ID Konfigurasi','required');
		
		if($v->run()) {
			
			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['max_size']			= '12000'; // KB	
$this->load->library('upload', $config);
			if(! $this->upload->do_upload('icon')) {
				
		$data = array(	'title'	=> 'New Icon',
						'site'	=> $site,
						'error'	=> $this->upload->display_errors(),
						'isi'	=> 'admin/dasbor/icon');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
				$upload_data				= array('uploads' =>$this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/image/'.$upload_data['uploads']['file_name']; 
				$config['new_image'] 		= './assets/upload/image/thumbs/';
				$config['create_thumb'] 	= TRUE;
				$config['maintain_ratio'] 	= TRUE;
				$config['width'] 			= 150; // Pixel
				$config['height'] 			= 150; // Pixel
				$config['thumb_marker'] 	= '';
				$this->load->library('image_lib', $config);
				// Hapus gambar lama
				unlink('./assets/upload/image/'.$site['icon']);
				unlink('./assets/upload/image/thumbs/'.$site['icon']);
				// End hapus gambar lama
				$this->image_lib->resize();
				// Masuk ke database
				$i = $this->input;
				$data = array(	'id_konfigurasi'=> $i->post('id_konfigurasi'),
								'icon'			=> $upload_data['uploads']['file_name'],
								'id_user'			=> $this->session->userdata('id'));
				$this->konfigurasi_model->edit($data);
				$this->session->set_flashdata('sukses','Icon changed');
				redirect(base_url('admin/dasbor/icon'));
		}}
		// Default page
		$data = array(	'title'	=> 'New Icon',
						'site'	=> $site,
						'isi'	=> 'admin/dasbor/icon');
		$this->load->view('admin/layout/wrapper',$data);
	}
	
	// Quote
	public function quote() {
		$site = $this->konfigurasi_model->listing();
		
		// Validasi 
		$this->form_validation->set_rules('judul_1','Judul Quote 1','required');
		$this->form_validation->set_rules('pesan_1','Pesan Quote 1','required');
		$this->form_validation->set_rules('judul_2','Judul Quote 2','required');
		$this->form_validation->set_rules('pesan_2','Pesan Quote 2','required');
		$this->form_validation->set_rules('judul_3','Judul Quote 3','required');
		$this->form_validation->set_rules('pesan_3','Pesan Quote 3','required');
		$this->form_validation->set_rules('judul_4','Judul Quote 4','required');
		$this->form_validation->set_rules('pesan_4','Pesan Quote 4','required');
		
		if($this->form_validation->run() === FALSE) {
			
		$data = array(	'title'	=> 'General Configuration - Quote Front End',
						'site'	=> $site,
						'isi'	=> 'admin/dasbor/quote');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
			$i = $this->input;
			$data = array(	'id_konfigurasi'	=> $i->post('id_konfigurasi'),
							'judul_1'			=> $i->post('judul_1'),
							'pesan_1'			=> $i->post('pesan_1'),
							'judul_2'			=> $i->post('judul_2'),
							'pesan_2'			=> $i->post('pesan_2'),
							'judul_3'			=> $i->post('judul_3'),
							'pesan_3'			=> $i->post('pesan_3'),
							'judul_4'			=> $i->post('judul_4'),
							'pesan_4'			=> $i->post('pesan_4'),
							'judul_5'			=> $i->post('judul_5'),
							'pesan_5'			=> $i->post('pesan_5'),
							'judul_6'			=> $i->post('judul_6'),
							'pesan_6'			=> $i->post('pesan_6'),
							'id_user'			=> $this->session->userdata('id'));
			$this->konfigurasi_model->edit($data);
			$this->session->set_flashdata('sukses','Site configuration updated successfully');
			redirect(base_url('admin/dasbor/quote'));
		}
	}
	
	// New yacht
	public function yacht() {
		$site = $this->konfigurasi_model->listing();
		
		$v = $this->form_validation;
		$v->set_rules('id_konfigurasi','ID Konfigurasi','required');
		
		if($v->run()) {
			if(!empty($_FILES['gambar']['name'])) {
			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['max_size']			= '12000'; // KB	
$this->load->library('upload', $config);
			if(! $this->upload->do_upload('gambar')) {
				
		$data = array(	'title'	=> 'Yacht Information',
						'site'	=> $site,
						'error'	=> $this->upload->display_errors(),
						'isi'	=> 'admin/dasbor/yacth');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
				$upload_data				= array('uploads' =>$this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/image/'.$upload_data['uploads']['file_name']; 
				$config['new_image'] 		= './assets/upload/image/thumbs/';
				$config['create_thumb'] 	= TRUE;
				$config['maintain_ratio'] 	= TRUE;
				$config['width'] 			= 150; // Pixel
				$config['height'] 			= 150; // Pixel
				$config['thumb_marker'] 	= '';
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				// Hapus gambar lama
				unlink('./assets/upload/image/'.$site['gambar']);
				unlink('./assets/upload/image/thumbs/'.$site['gambar']);
				// End hapus gambar lama
				// Masuk ke database
				$i = $this->input;
				$data = array(	'id_konfigurasi'=> $i->post('id_konfigurasi'),
								'gambar'		=> $upload_data['uploads']['file_name'],
								'video'			=> $i->post('video'),
								'yacht'			=> $i->post('yacht'),
								'id_user'		=> $this->session->userdata('id'));
				$this->konfigurasi_model->edit($data);
				$this->session->set_flashdata('sukses','Yacht information changed');
				redirect(base_url('admin/dasbor/yacht'));
		}}else{
				$i = $this->input;
				$data = array(	'id_konfigurasi'=> $i->post('id_konfigurasi'),
								'video'			=> $i->post('video'),
								'yacht'			=> $i->post('yacht'),
								'id_user'		=> $this->session->userdata('id'));
				$this->konfigurasi_model->edit($data);
				$this->session->set_flashdata('sukses','Yacht information changed');
				redirect(base_url('admin/dasbor/yacht'));
		}}
		// Default page
		$data = array(	'title'	=> 'Yacht Information',
						'site'	=> $site,
						'isi'	=> 'admin/dasbor/yacht');
		$this->load->view('admin/layout/wrapper',$data);
	}
	
}