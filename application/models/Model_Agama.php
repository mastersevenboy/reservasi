<?php
class Model_Agama extends CI_Model
{
	function DataAgama(){		
		$query= $this->db->query("SELECT * from tb_agama order by kd_agama ASC");
		return $query;
	}
	function getData($kd_agama){
		$query= $this->db->query("SELECT * from tb_agama where kd_agama='$kd_agama'");
		return $query;
	}
	function SimpanAgama($data)
	{
		$this->db->insert('tb_agama', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE; 
		}
	}
	function UpdateAgama($kd_agama,$data)
	{
		$this->db->where('kd_agama',$kd_agama);
		$this->db->update('tb_agama', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE; 
		}
	}
	function deleteAgama($kd_agama)
	{
		$this->db->where('kd_agama', $kd_agama);
		$this->db->delete('tb_agama');
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE; 
		}
	}
}
?>