<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	function tampil_data(){
		return $this->db->get('autis');
	}

	

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */