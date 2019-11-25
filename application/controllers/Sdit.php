<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sdit extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function __construct() {
        parent::__construct();
        $this->load->model('web_app_model'); //load model web_app_model yang berada di folder model
        $this->load->helper(array('url')); //load helper url 

    } 
	 
	public function index()
	{
		$bc['atas'] 	=  $this->load->view('atas');
		$bc['bawah'] 	=  $this->load->view('bawah');
		
		
		$this->load->view('welcome_message');
	}
	
	public function about()
	{
		$bc['atas'] 	=  $this->load->view('atas','',true);
		$bc['header'] 	=  $this->load->view('header','',true);
		$bc['bawah'] 	=  $this->load->view('bawah',$bc,true);
		
		
		$bc['query'] = $this->web_app_model->get_allguru(); //query dari model


		
		$this->load->view('about',$bc);
	}
	
	
	public function psb()
	{
		$bc['atas'] 	=  $this->load->view('atas','',true);
		$bc['header'] 	=  $this->load->view('header','',true);
		$bc['bawah'] 	=  $this->load->view('bawah',$bc,true);
		$bc['query'] = $this->web_app_model->get_psb(); //query dari model
		
		$this->load->view('psb',$bc);
	}
	
	
	public function gallery()
	{
		$jumlah_data = $this->web_app_model->get_allfoto();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'sdit/gallery/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		
		
		$config['uri_segment'] = 3;        
        $config['full_tag_open'] = '<ul class="pagination">';        
        $config['full_tag_close'] = '</ul>';        
        $config['first_link'] = 'First';        
        $config['last_link'] = 'Last';        
        $config['first_tag_open'] = '<li>';        
        $config['first_tag_close'] = '</li>';        
        $config['prev_link'] = '&laquo';        
        $config['prev_tag_open'] = '<li class="prev">';        
        $config['prev_tag_close'] = '</li>';        
        $config['next_link'] = '&raquo';        
        $config['next_tag_open'] = '<li>';        
        $config['next_tag_close'] = '</li>';        
        $config['last_tag_open'] = '<li>';        
        $config['last_tag_close'] = '</li>';        
        $config['cur_tag_open'] = '<li class="active"><a href="#">';        
        $config['cur_tag_close'] = '</a></li>';        
        $config['num_tag_open'] = '<li>';        
        $config['num_tag_close'] = '</li>';
        
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->pagination->initialize($config);        
        
		$bc['foto'] = $this->web_app_model->get_foto($config['per_page'],$page);
		$bc['halaman'] = $this->pagination->create_links();
		
		$bc['atas'] 	=  $this->load->view('atas','',true);
		$bc['header'] 	=  $this->load->view('header','',true);
		$bc['bawah'] 	=  $this->load->view('bawah',$bc,true);
		
		
		
		$this->load->view('gallery',$bc);
		
	}
	
	public function kontak()
	{
		$bc['atas'] 	=  $this->load->view('atas','',true);
		$bc['header'] 	=  $this->load->view('header','',true);
		$bc['bawah'] 	=  $this->load->view('bawah',$bc,true);
		$this->load->view('kontak',$bc);
	}
	
	public function berita()
	{
		$bc['atas'] 	=  $this->load->view('atas','',true);
		$bc['header'] 	=  $this->load->view('header','',true);
		$bc['bawah'] 	=  $this->load->view('bawah',$bc,true);
		
		$bc['kueri'] = $this->web_app_model->get_beritaterkini(); //query dari model
		$bc['query'] = $this->web_app_model->get_berita($this->uri->segment(3)); //query dari model
		
		
		$this->load->view('berita',$bc);
	}
	
	public function kirim_pesan()
	{
		$simpan["nama"] 					= $this->input->post("nama");
		$simpan["email"] 					= $this->input->post("email");
		$simpan["telp"] 					= $this->input->post("telp");
		$simpan["subject"] 					= $this->input->post("subject");
		$simpan["pesan"] 					= $this->input->post("pesan");
		
		$from_email =  $this->input->post('email');
		$nama =  $this->input->post('nama');
		$telp =  $this->input->post('telp');
		$subject=  $this->input->post('subject');
		$isi=  $this->input->post('pesan');

		$message = "Nama : $nama\r\n";
		$message .= "Telp : $telp\r\n";
		$message .= "\r\n";
		$message .= "$isi";

         $to_email =  "intaq.bekasi@gmail.com";
   
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, $nama); 
         $this->email->to($to_email);
         $this->email->subject($subject); 
         $this->email->message($message); 	
		$this->email->send();

		$this->web_app_model->insertData('tbl_pesan',$simpan);
		$this->session->set_flashdata("save_pesan","<div class='alert alert-block alert-success'>
										<button type='button' class='close' data-dismiss='alert'>
											<i class='icon-remove'>x</i>
										</button>

										<p>
											<strong>
												<i class='icon-ok'></i>
												Selamat!
											</strong>
											Pesan Berhasil Terkirim...!
										</p>
									</div>");
									
		header('location:'.base_url().'sdit/kontak');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */