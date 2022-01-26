<?php
class Model_login extends CI_Model
{
	function cek_login($email,$password){		
		$query= $this->db->query("SELECT * from tb_karyawan where email='$email' and password='$password' and status='1'");
		return $query->row();
	}
}
?>