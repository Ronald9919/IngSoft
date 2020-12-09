<?php
class Bosss extends CI_Model 
{

	/*Display*/
	function get_id($id)
	{
	$query=$this->db->get_where('dueño',array("id"=>$id))->row();
	return $query;
	}

	/*Insert*/
	/*Insert*/
	function saverecords($data)
	{
		$comprobar = $this->get_usuario($data['usuario']);
		 if($comprobar == null){
			$this->db->insert('dueño',$data);
			return $this->db->insert_id();
		 }else{
			return false;
		 } 
	}

	function savetaller($data){
		
		return $this->db->insert('taller',$data);
		
	}

	/*Display*/
	function display_records()
	{
		$query=$this->db->get('dueño');
		return $query->result();
	}

	public function update($data){
		$id = $data['id'];
		$data2 = array('id'=>$data['id'],'nombre'=>$data['nombre'],'apellido'=>$data['apellido'],
		'usuario'=>$data['usuario'],'contraseña'=>$data['contraseña']);
		
		$comprobar = $this->get_usuario($data['usuario']);

		/** Aqui comprobamos que el usuario que nos hemos traido tenga el 
		 * mismo id del que actualizaremos para evitar usuarios repetidos */

		if($comprobar->id == $data['id']){
			$this->db->where('id',$id);
			$this->db->update('dueño',$data2);
			return true;
		}else{
			return false;
		}
	}
 
	/** Con esta funcion nos traemos el dueño que exista con ese usuario
	 * 
	 */
	public function get_usuario($user){
		$this->db->where('usuario',$user);
		return $this->db->get("dueño")->row();
	}
   
	public function delete_user($id){
		
		$this->db->where('id',$id);
		return $this->db->delete("dueño");
	}

	/** Catalogo */

	public function get_talleres(){
		return $this->db->get('taller')->result();
	} 
}	
?>