<?php
class Model_transaksi extends CI_Model
{
	function SimpanTransaksi($data)
	{
		$this->db->insert('tb_reservasi', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE; 
		}
	}
}
?>