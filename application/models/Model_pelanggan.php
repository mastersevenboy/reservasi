<?php
class Model_pelanggan extends CI_Model
{
	function DataPelanggan(){		
		$query= $this->db->query("SELECT * from tb_pelanggan order by id ASC");
		return $query;
	}
	function getData($id){
		$query= $this->db->query("SELECT * from tb_pelanggan where id='$id'");
		return $query;
	}
	function SimpanPelanggan($data)
	{
		$this->db->insert('tb_pelanggan', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE; 
		}
	}
	function UpdatePelanggan($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('tb_pelanggan', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE; 
		}
	}
	function deletePelanggan($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tb_pelanggan');
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE; 
		}
	}
}
?>