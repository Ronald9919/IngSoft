<?php
class Bosss extends CI_Model 
{
	/*Insert*/
	/*Insert*/
	function saverecords($data)
	{
          $this->db->insert('dueño',$data);
          return $this->db->insert_id();
	}
	
}
?>