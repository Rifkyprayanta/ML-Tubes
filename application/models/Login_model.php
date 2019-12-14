<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function cek_login($table,$field1, $field2){	
	 	$this->db->select('user.*');
        $this->db->from('user');
        $this->db->where($field1);
        $this->db->where($field2);
        //$this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
		//return $this->db->get_where($table,$where);
	}

	

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */