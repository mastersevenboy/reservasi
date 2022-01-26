<?php 
class Template {
	protected $theme="layout";
	protected $_ci;
	
	function __construct() 
	{
		$this->_ci=&get_instance();	
	}
	function safe_encode($string) {
	
        $data = str_replace(array('+','/','='),array('-','_',''),$string);
        return $data;
    }
	function display($template, $data=null)
	{			
		$data['header']=$this->_ci->load->view($this->theme.'/_header', $data, TRUE);
		$data['menu']=$this->_ci->load->view($this->theme.'/_menu', $data, TRUE);
		$data['konten']=$this->_ci->load->view($template, $data, TRUE);
		$data['footer']=$this->_ci->load->view($this->theme.'/_footer', $data, TRUE);
		$this->_ci->load->view($this->theme.'/_index', $data);
	}
}
?>