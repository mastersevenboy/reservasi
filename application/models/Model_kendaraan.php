<?php
class Model_kendaraan extends CI_Model
{
	function DataKendaraan(){		
		$query= $this->db->query("SELECT * from tb_kendaraan order by id ASC");
		return $query;
	}
	function getData($id){
		$query= $this->db->query("SELECT * from tb_kendaraan where id='$id'");
		return $query;
	}
	function SimpanKendaraan($data)
	{
		$this->db->insert('tb_kendaraan', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE; 
		}
	}
	function UpdateKendaraan($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('tb_kendaraan', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE; 
		}
	}
	function deleteKendaraan($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tb_kendaraan');
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE; 
		}
	}
}
?>