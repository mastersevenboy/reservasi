<?php
class Model_reservasi extends CI_Model
{
	function DataReservasi(){		
		$query= $this->db->query("SELECT * from tb_reservasi order by id ASC");
		return $query;
	}
	function getData($id){
		$query= $this->db->query("SELECT * from tb_reservasi where id='$id'");
		return $query;
	}
	function SimpanReservasi($data)
	{
		$this->db->insert('tb_reservasi', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE; 
		}
	}
	function UpdateReservasi($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('tb_reservasi', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE; 
		}
	}
	function deleteReservasi($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tb_reservasi');
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE; 
		}
	}
}
?>