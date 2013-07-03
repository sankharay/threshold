<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	 function __construct(){
           parent::__construct(); 
		   if($this->session->userdata('logged_in') == TRUE)
		   redirect(BASE_URL.'/home');
    }
	 
	public function index()
	{
		$error[] = array();
		$error_value = FALSE;
		if($this->input->post("username"))
		{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		if($username == "")
		{
		$error['errors'] = $this->lang->line('error_email_missing');
		$error_value = TRUE;
		}
		if($password == "")
		{
		$error['errors'] = $this->lang->line('error_password_missing');
		$error_value = TRUE;
		}
		if($error_value == TRUE)
		{
		$error['errorval']=$error;
		$this->load->view('loginv',$error);
		}
		else
		{
		$this->load->model("chklogin");
		$result = $this->chklogin->chklogin($username,$password);
				if($result == TRUE)
				{
				redirect('home');
				exit;
				}
				else
				{
				$this->session->set_userdata('error','Username Or Password Wrong');
				$this->load->view('loginv');
				}
		}
		}
		else
		{
		$this->load->view('loginv');
		}
	}
	
}

?>