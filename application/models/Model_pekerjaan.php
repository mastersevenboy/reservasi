<?php
class Model_pekerjaan extends CI_Model
{
	function DataPekerjaan(){		
		$query= $this->db->query("SELECT * from tb_pekerjaan order by pekerjaan_id ASC");
		return $query;
	}
	function getData($pekerjaan_id){
		$query= $this->db->query("SELECT * from tb_pekerjaan where pekerjaan_id='$pekerjaan_id'");
		return $query;
	}
	function SimpanPekerjaan($data)
	{
		$this->db->insert('tb_pekerjaan', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE; 
		}
	}
	function UpdatePekerjaan($pekerjaan_id,$data)
	{
		$this->db->where('pekerjaan_id',$pekerjaan_id);
		$this->db->update('tb_pekerjaan', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE; 
		}
	}
	function deletePekerjaan($pekerjaan_id)
	{
		$this->db->where('pekerjaan_id', $pekerjaan_id);
		$this->db->delete('tb_pekerjaan');
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE; 
		}
	}
}
?>