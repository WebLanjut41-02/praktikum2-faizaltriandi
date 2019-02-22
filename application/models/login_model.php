<?php 

/**
 * 
 */
class login_model extends CI_Model{
	
	function ambil_data($nama,$nip){
		return $this->db->get('karyawan');
	}
}

 ?>