<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi extends CI_Controller {
	public $status = Array('1'=>'Aktif', '0'=>'Tidak Aktif');
	public function __construct()
    {
		parent::__construct();
		$this->load->model('Model_reservasi');
		if($this->session->userdata('login')!=TRUE){
			redirect('auth'); 
		} 
	}
	public function index()
	{
		$data['title'] 	 ='SIR | Data Reservasi';
		$data['reservasi']=$this->Model_reservasi->DataReservasi()->result();
		$this->template->display('reservasi/data', $data);
	}
	
	public function edit($id)
	{
		if ($id) {
			$data['reservasi'] = $this->Model_reservasi->getData($id)->row();
			$data['title'] 	  ='SIR | Edit Reservasi';
			
			$this->template->display('reservasi/edit', $data);
		}
	}
	public function simpan()
	{
		
		$data['id'] 	= $this->input->post('id');
		$data['reservasi'] 	= $this->input->post('reservasi');
	
		$simpan= $this->Model_reservasi->SimpanReservasi($data);
		if ($simpan) {
		  redirect('reservasi');
		}else{
		  redirect('reservasi/tambah');
		}
	}
	public function update($id)
	{
		$data['id'] 	= $this->input->post('id');
		$data['tgl_reservasi'] 	= $this->input->post('tgl_reservasi');
		$data['tgl_kembali'] 	= $this->input->post('tgl_kembali');
		$data['lama_reservasi'] 	= $this->input->post('lama_reservasi');
		$data['biaya_reservasi'] 	= $this->input->post('biaya_reservasi');
		$data['denda'] 	= $this->input->post('denda');
		$data['total_biaya_reservasi'] 	= $this->input->post('total_biaya_reservasi');
		$data['catatan'] 	= $this->input->post('catatan');
		$data['karyawan_id'] 	= $this->input->post('karyawan_id');

		$update= $this->Model_reservasi->UpdateReservasi($id,$data);
		if ($update) {
		  redirect('reservasi');
		}else{
		  redirect('reservasi/edit');
		}
	}
	public function hapus($id)
	{
		$hapus= $this->Model_reservasi->deleteReservasi($id);
		if ($hapus) {
		  redirect('reservasi');
		}
	}
}
