<?php

use Phpml\Classification\NaiveBayes;

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('User_model');


		//if($this->session->userdata('status') != "login" || $this->session->userdata('akses')!='2'){
		//	redirect(base_url("login"));
		//}
	}

	public function index()
	{
		$data['judul'] = 'Dashboard User';
		$data['content'] = $this->load->view('User', $data, TRUE); 
		$this->load->view('template/mainuser', $data);
	}

	public function konsultasi()
	{
		$data['judul'] = 'Diagnosa Mandiri';
		$data['content'] = $this->load->view('User', $data, TRUE); 
		$this->load->view('template/mainquestion', $data);
	}

	public function Pertanyaan1()
	{
		if(isset($_POST['submit'])){

			$A1 = $this->input->post('A1');
			$A2 = $this->input->post('A2');
			$A3 = $this->input->post('A3');
			$A4 = $this->input->post('A4');
			$A5 = $this->input->post('A5');
			$A6 = $this->input->post('A6');
			$A7 = $this->input->post('A7');
			$A8 = $this->input->post('A8');
			$A9 = $this->input->post('A9');
			$A10 = $this->input->post('A10');

			$simpan = ($A1 + $A2 + $A3 + $A4 + $A5 + $A6 + $A7 + $A8 + $A9 + $A10);

			//perhitungan algoritma naive bayes untuk menentukan kelas.
			//Menghitung probabilitas kelas atau label. 

			if($simpan >= '3')
			{
				$ASD = "yes";
			}

			elseif ($simpan <= '3')
			{
				$ASD = "no";
			}


			$data = array(
				'A1'=>  $this->input->post('A1'),
				'A2'=>  $this->input->post('A2'),
				'A3'=>  $this->input->post('A3'),
				'A4'=>  $this->input->post('A4'),
				'A5'=>  $this->input->post('A5'),
				'A6'=>  $this->input->post('A6'),
				'A7'=>  $this->input->post('A7'),
				'A8'=>  $this->input->post('A8'),
				'A9'=>  $this->input->post('A9'),
				'A10'=>  $this->input->post('A10'),
				'Age_Mons'=>  $this->input->post('A11'),
				'Qchat-10-Score' => $simpan,
				'Sex'=>  $this->input->post('A12'),
				'Jaundice'=>  $this->input->post('A13'),
				'Family_mem_with_ASD'=>  $this->input->post('A14'),
				'Who' =>  $this->input->post('A15'),
				'class'=> $ASD);

			$this->User_model->input_data($data,'autis');
			redirect('user/result');

		}
		else
		{
			$data['judul1'] = '1. Apakah anda menoleh ketika dipanggil ? ';
			$data['judul2'] = '2. Apakah anda dengan mudah melakukan kontak mata dengan anak ?';
			$data['judul3'] = '3. Apakah anak menunjukkan indikasi bahwa ia menginginkan sesuatu  ?';
			$data['judul4'] = '4. Apakah anak anda berbagi minat dan bakat terhadap anda  ?  ';
			$data['judul5'] = '5. Apakah anak anda pura-pura peduli  ?  ';
			$data['judul6'] = '6. Apakah anak anda mengikuti kemana anda melihat  ?  ';
			$data['judul7'] = '7. Jika anda atau orang lain dalam keluarga anda kesal, apakah anak anda memperlihatkan kurang nyaman dengan mereka  ?  ';
			$data['judul8'] = '8. Bagaimana anda mendeksripsikan anak anda pertama kali  ? ';
			$data['judul9'] = '9. Apakah anak anda menggunakan gestur tangan sederhana  ? ';
			$data['judul10'] = '10. Apakah anak anda menatap sesuatu tanpa ada tujuan jelas  ? ';
			$data['judul11'] = '11. Berapa usia anak dalam bulan? ';
			$data['judul12'] = '12. Apa gender anak anda? ';
			$data['judul13'] = '13. Apakah anak anda memiliki penyakit kulit? ';
			$data['judul14'] = '14. Apakah keluarga ada yang memiliki penyakit kulit? ';
			$data['judul15'] = '15. Siapa yang mengisi tes anda ? ';

			$data['content'] = $this->load->view('User', $data, TRUE); 
			$this->load->view('template/mainquestion1', $data);
		}
		
	}

	public function Result()
	{
		$data['judul'] = 'Hasil Analisa Prediksi';
		$data['content'] = $this->load->view('User', $data, TRUE); 
		$data['data'] = $this->User_model->tampil_data()->result();
		$this->load->view('template/result', $data);
	}



	public function lihat_data()
	{

	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */