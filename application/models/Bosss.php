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
          $this->db->insert('dueño',$data);
          return $this->db->insert_id();
	}

	/*Display*/
	function display_records()
	{
	$query=$this->db->query("select * from dueño");
	return $query->result();
	}

	public function update($data,$id){

		$this->db->where('id',$id);
		$this->db->update('dueño',$data);

	  }
   

	
}
?>