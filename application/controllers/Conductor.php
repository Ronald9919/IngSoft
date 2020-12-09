<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conductor extends CI_Controller {
	
	public function catalogo()
	{
		$this->load->view('Conductor/catalogo');
	}

}
