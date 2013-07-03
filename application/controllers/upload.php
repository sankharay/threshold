<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

	 
	 function __construct(){
          parent::__construct();
		   if($this->session->userdata('logged_in') != TRUE)
		   redirect(BASE_URL.'/logout');
    }
	 
	 function index()
	{
		$config['upload_path'] = './uploads';
		$config['allowed_types'] = 'xls|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('home/upload', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('home/upload', $data);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */