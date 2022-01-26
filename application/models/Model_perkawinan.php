<?php
class Model_perkawinan extends CI_Model
{
	function DataPerkawinan(){		
		$query= $this->db->query("SELECT * from tb_sts_kawin order by kd_sts_kawin ASC");
		return $query;
	}
	function getData($kd_sts_kawin){
		$query= $this->db->query("SELECT * from tb_sts_kawin where kd_sts_kawin='$kd_sts_kawin'");
		return $query;
	}
	function SimpanPerkawinan($data)
	{
		$this->db->insert('tb_sts_kawin', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE; 
		}
	}
	function UpdatePerkawinan($kd_sts_kawin,$data)
	{
		$this->db->where('kd_sts_kawin',$kd_sts_kawin);
		$this->db->update('tb_sts_kawin', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE; 
		}
	}
	function deletePerkawinan($kd_sts_kawin)
	{
		$this->db->where('kd_sts_kawin', $kd_sts_kawin);
		$this->db->delete('tb_sts_kawin');
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE; 
		}
	}
}
?>