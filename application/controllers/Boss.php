<?php

class Boss extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('Bosss');
        
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function ingresar()
	{
		$this->load->view('Dueño/ingresart');
	}

	public function catalogo()
	{
		$this->load->view('Dueño/catalogo');
	}

	public function perfilD()
	{

		$this->load->view('Dueño/perfild');
	}

	public function perfilT()
	{
		$this->load->view('Dueño/perfilt');
	}

	public function savedata()
	{
		/*load registration view form*/
		$this->load->view('Login/registrar');
	
		/*Check submit button */
		if($this->input->post('save'))
		{
		    $data['nombre']=$this->input->post('fname');
			$data['apellido']=$this->input->post('lname');
			$data['usuario']=$this->input->post('username');
			$data['contraseña']=$this->input->post('pwd');
			$user=$this->Bosss->saverecords($data);
			if($user>0){
			        echo "Records Saved Successfully";
			}
			else{
					echo "Insert error !";
			}
		}
	}

}
?>



