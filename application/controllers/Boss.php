<?php

class Boss extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->model('Bosss');
		$this->load->helper('form');
        
    }

	public function ingresar()
	{
		$this->load->view('Dueño/ingresart');
		if($this->input->post('savetaller'))
		{
		    $data['nombret']=$this->input->post('name');
			$data['direccion']=$this->input->post('direction');
			$data['telefono']=$this->input->post('tphone');
			$data['celular']=$this->input->post('phone');
			$data['servicios']=$this->input->post('services');
			$user = $this->Bosss->savetaller($data);
			if($user){
				echo'<script type="text/javascript">
				alert("Taller registrado correctamente!");
				</script>';
			}
			else{
				echo'<script type="text/javascript">
				alert("Error en el registro del taller!");
				</script>';
			}
		}
	}

	public function catalogo()
	{
		$x = $this->Bosss->get_talleres();
		$data['data']=$x;
		$this->load->view('Dueño/catalogo',$data);
	}

	public function perfilD()
	{

		if(!$this->session->has_userdata('username')){
			$usr = $this->input->post('username');
			$this->session->set_userdata('username', $usr);
		}
		
		$user = $this->session->userdata('username');
		
		$found = $this->Bosss->get_usuario($user);
		$data['user']=$found;
		//print_r($data);
		$this->load->view('Dueño/perfild',$data);/**/
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
			if($user){
				echo'<script type="text/javascript">
				alert("Dueño registrado correctamente!");
				</script>';
			}
			else{
				echo'<script type="text/javascript">
				alert("Error en el registro de dueño!");
				</script>';
			}
		}
	}

	public function update(){    
        
		if($this->Bosss->update($_POST)){
			header("location: ".base_url()."index.php/Boss/perfilD");
		}else{
			/* manda algun mensaje de error o algo */
		}
   
	}  
	
	/** en el boton solo manda Boss/delete/<?=$user->id?> para eliminarlo*/
	public function delete($id){
		$this->Bosss->delete_user($id);

		header("location: ".base_url());
	}


}
?>



