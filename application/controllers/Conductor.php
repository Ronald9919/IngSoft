<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conductor extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('Bosss');
		$this->load->helper('form');
        
    }
	
	public function catalogo()
	{
		$x = $this->Bosss->get_talleres();
		$data['data']=$x;
		$this->load->view('Conductor/catalogo',$data);
	}

}
