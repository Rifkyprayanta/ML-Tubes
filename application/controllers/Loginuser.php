<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginuser extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');


	
		//if($this->session->userdata('status') != "login" || $this->session->userdata('akses')!='2'){
		//	redirect(base_url("login"));
		//}
	}

	public function index()
	{
		$data['judul'] = 'Halaman Login Pengguna';
		$this->load->view('login/index', $data);
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */