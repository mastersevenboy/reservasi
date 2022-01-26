<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	function __construct() 
	{
		parent::__construct();
		$this->load->library('template'); 		// application/libraries/template.php		
	}
	public function index()
	{
		$data['asdasd']='asdasd';
		$this->template->display('karyawan/datakaryawan', $data);
	}
	public function test()
	{
		echo 'testing';
	}
}
