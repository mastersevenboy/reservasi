<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class main extends CI_Controller
{
	
	public function index()
	{
		# code...
		$this->load->view('data');
	}
	public function tambah()
	{
		$this->load->view('tambah');
	}
}
