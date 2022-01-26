<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_transaksi');
		$this->load->model('Model_pelanggan');
		$this->load->model('Model_kendaraan');
		if ($this->session->userdata('login')!=TRUE) {
			# code...
			redirect('auth');
		}

	}
	public function reservasi()
	{
		$data['title'] = 'SIR | Tambah Reservasi';
		$data['pelanggan'] = $this->Model_pelanggan->DataPelanggan()->result();
		$data['kendaraan'] = $this->Model_kendaraan->DataKendaraan()->result();

		$this->template->display('transaksi/reservasi',$data);
	}
	public function simpan()
	{
		//sesuai dg kolom di tb_reservasi	// sesuai dengan var inputan dr view rerservasi
		$data['pelanggan_id'] 		= $this->input->post('pelanggan');
		$data['kendaraan_id']		= $this->input->post('kendaraan');
		$data['tgl_reservasi'] 		= $this->input->post('tanggalreservasi');
		$data['lama_reservasi'] 	= $this->input->post('lamareservasi');
		$data['biaya_reservasi'] 	= $this->input->post('biayareservasi');
		$data['catatan'] 			= $this->input->post('catatan');
		$data['karyawan_id'] 		= $this->session->userdata('id');

		$simpan= $this->Model_transaksi->SimpanTransaksi($data);
		if ($simpan) {
		  redirect('transaksi/reservasi');
		}else{
		  redirect('transaksi/reservasi');
		}
	}
}
