<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function tampil_data(){
		$this->db->select('Class');
      	$this->db->from('autis');
      	$this->db->order_by('Case_No', 'desc');
      	$this->db->limit(1);
      	$result = $this->db->get('');
      	return $result;
	}

	
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */