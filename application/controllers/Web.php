<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {

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
	public function index()
	{
		$bc['atas'] 	=  $this->load->view('atas','',true);
		$bc['header'] 	=  $this->load->view('header','',true);
		$bc['bawah'] 	=  $this->load->view('bawah',$bc,true);
		
			$this->load->model('web_app_model');
            $bc['query'] = $this->web_app_model->get_news();
			$bc['video'] = $this->web_app_model->get_video();
            $this->load->vars($bc);
		
		$this->load->view('tampilan_awal',$bc);
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */