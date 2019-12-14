<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginadmin extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('Login_model');
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
		$this->load->library('session');

	}

	public function index()
	{
		$data['judul'] = 'Halaman Login';
		$this->load->view('login/index', $data);
	}

	public function cekLogin()
	{

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->Login_model->cek_login("user", array('username' => $username), array('password' => $password));
		//$data=$cek->row_array();
		if($cek > 0)
		{
			foreach ($cek as $id) 
			{
				if($id->level=='0')
				{
					$data_session = array('nama' => $id->nama, 'level' => $id->level, 'status' => "login");
					$this->session->set_userdata('akses','admin');
					$this->session->set_userdata($data_session);
					redirect(base_url("admin"));
				}
				elseif ($id->level=='1') {
					$data_session = array('nama' => $id->nama, 'level' => $id->level, 'status' => "login");
					$this->session->set_userdata('akses','user');
					$this->session->set_userdata($data_session);
					redirect(base_url("user"));
				}
				
				else
				{
					$this->session->set_flashdata('message', '<div class="alert alert-danger">
                    <p>Anda Tidak Terdaftar</p>
                </div>');
				}
			}
		}
		else
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger">
                    <p>Anda Salah Username atau Password, Silahkan Coba Kembali</p>
                </div>');
			redirect(base_url("loginuser"));

		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('loginadmin'));
	}

}

/* End of file Loginadmin.php */
/* Location: ./application/controllers/Loginadmin.php */