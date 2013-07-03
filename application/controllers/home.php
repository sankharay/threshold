<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 
	 function __construct(){
        // Note that there are (2) underscores (_)
           parent::__construct();  // Should always be the first thing you call.
		   $this->load->helper('form');
		   if($this->session->userdata('logged_in') != TRUE)
		   redirect(BASE_URL.'/logout');
    }
	
	function index()
	{
	$this->load->model('homem');
	$data['content'] = $this->homem->listdata();
	$data['duplicates'] = $dup = $this->homem->listduplicatedata();
	if($dup != FALSE)
	$data['duplicates_data'] = $dup = $this->homem->listduplicate_data();
	$this->load->view("header");
	$this->load->view("homev",$data);
	$this->load->view("footer");	
	}
	
	function edit()
	{
	$this->load->model('homem');
	$id = $this->uri->segment(3);
	if($this->input->post('thrashold') != "")
	{
	$thrashold = $this->input->post('thrashold');
	$data = array(
               'thrashold' => $thrashold
            );
	$this->db->where('dept', $id);
	$this->db->update('thrashold16', $data); 
	$this->db->last_query();
	redirect(BASE_URL."/home");
	}
	$data['content'] = $this->homem->editdata($id);
	$this->load->view("header");
	$this->load->view("editv",$data);
	$this->load->view("footer");	
	}
	
	function delete()
	{
	$this->load->model('homem');
	$id = $this->uri->segment(3);
	if($this->input->post() != "")
	{
	$this->db->where('dept', $id);
	$this->db->delete('thrashold16');
	redirect(BASE_URL."/home");
	}
	$data['content'] = $this->homem->editdata($id);
	$this->load->view("header");
	$this->load->view("deletev",$data);
	$this->load->view("footer");	
	}
	
	
	function add()
	{
	$this->load->model('homem');
	if($this->input->post('dept') != "")
	{
	$dept = $this->input->post('dept');
	$thrashold = $this->input->post('thrashold');
	$duplicates = $this->homem->checkduprecord($dept);
	if($duplicates)
	{
		$this->session->set_userdata('dup',"Duplicate department. please click update to update");
		redirect(BASE_URL."/home/edit/".$dept);
		exit;
	}
	else
	{
	$data = array(
		   'dept' => $dept ,
		   'thrashold' => $thrashold
				);
	$this->db->insert('thrashold16', $data); 
	redirect(BASE_URL."/home");
	}
	}
	$this->load->view("header");
	$this->load->view("addv");
	$this->load->view("footer");	
	}
	
	function upload()
	{
	$data['error'] = "";
	$this->load->model('homem');
	if($this->input->post('userfiles') != "")
	{
		 $config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'xls';
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload())
		{
			$error = $this->upload->display_errors();
			$data['error'] = $this->session->set_userdata('update','Error : '.$error);
		}
		else
		{
			$data['error'] = $this->session->set_userdata('update','File Upload Successfully');
		}	
	}
	$this->load->view("header");
	$this->load->view("uploadfilev",$data);
	$this->load->view("footer");	
	}
	 
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */