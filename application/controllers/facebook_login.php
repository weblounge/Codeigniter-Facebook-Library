<?php
class facebook_login extends CI_Controller
{
	public function __construct(){
		parent::__construct();
	  	$this->load->library('facebook/fb','fb');
    }
	
	function index()
	{
		$data = array();
	
		$data['login_url'] = $this->fb->createLoginLink();
		$data['user_profile'] = $this->fb->initialize();
		
		$this->load->template("upload",$data);
	}
	
	function facebook_logout()
	{
		$this->fb->facebookLogout();
		redirect('upload');
	}
}
?>