<?php
class Model_karyawan extends CI_Model
{
	function DataKaryawan(){		
		$query= $this->db->query("SELECT * from tb_karyawan order by id DESC");
		return $query;
	}
	function getData($id){
		$query= $this->db->query("SELECT * from tb_karyawan where id='$id'");
		return $query;
	}
	function SimpanKaryawan($data)
	{
		$this->db->insert('tb_karyawan', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE; 
		}
	}
	function UpdateKaryawan($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('tb_karyawan', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE; 
		}
	}
	function deleteKaryawan($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tb_karyawan');
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE; 
		}
	}
}
?>