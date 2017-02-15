<?php

Class User extends CI_Model
{
	function login($user, $pass)
	{
		//$this -> db -> where('contrasena', MD5($contrasena));
 
		$sql = "SELECT use_name, use_typid FROM users WHERE use_name=? AND use_pass=? LIMIT 1";
		$query = $this->db->query($sql, array($user, $pass));
  
		if($query->num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}
	}
}
?>
