<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
	
	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('galeri_model');
	}
	
	// Index
	public function index() {
		$galeri = $this->galeri_model->listing();
		
		$data = array(	'title'		=> 'Galeri Foto',
						'galeri'	=> $galeri,
						'isi'		=> 'admin/galeri/list');
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	// Tambah
	public function tambah() {
		$site 				= $this->konfigurasi_model->listing();
		
		$foto				= $this->galeri_model->getRows();
		
		$data = array(	'title'				=> 'Tambah Foto',
						
						'foto'				=> $foto,
						'isi'				=> 'admin/galeri/tambah');
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
					$uploadData[$i]['keterangan'] = $this->input->post('keterangan');
                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                }
            }
            
            if(!empty($uploadData)){
                //Insert file information into the database
                $insert = $this->galeri_model->insert($uploadData);
                $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
                $this->session->set_flashdata('statusMsg',$statusMsg);
            }
        }
       
        //Pass the files data to view
        $this->load->view('admin/layout/wrapper',$data);
	}
	
	// Edit Galeri Foto
	public function edit($id) {
		$galeri = $this->galeri_model->detail($id);
		
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('album','Nama Album','required',
		array( 'required' => 'Nama Album harus diisi'));
		
		if($valid->run()===FALSE) {
		// End validasi
		
		$data = array( 'title' 	=> 'Edit Galeri Foto',
						'galeri'	=> $galeri,
						'isi' 	=> 'admin/galeri/edit');
		$this->load->view('admin/layout/wrapper',$data);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 	'kategori'			=> 	$i->post('album'),
							'keterangan'		=>	$i->post('keterangan'),
							'modified'		=>	date('Y-m-d H:i:s'));
			$this->galeri_model->edit($data,$id);
			$this->session->set_flashdata('sukses','Galeri Foto telah diedit');
			redirect(base_url('admin/galeri'));
		}
		// End masuk database
	}

	// Delete
	public function delete($id) {
		$this->simple_login->cek_login();
		$data = array('id'	=> $id);
		$this->galeri_model->delete($data);
		$this->session->set_flashdata('sukses','Foto telah didelete');
		redirect(base_url('admin/galeri'));		
	}
}