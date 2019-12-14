<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Admin_model');


	
		//if($this->session->userdata('status') != "login" || $this->session->userdata('akses')!='2'){
		//	redirect(base_url("login"));
		//}
	}

	public function index()
	{
		$data['judul'] = 'Dashboard Admin';
		$data['data'] = $this->Admin_model->tampil_data()->result();
		//$data['content'] = $this->load->view('User', $data, TRUE); 
		$this->load->view('template/main', $data);
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */