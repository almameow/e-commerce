<?php
class Admin extends CI_Model{
	
	function get_admin_by_id($email)
	{
		return $this->db->query("SELECT * FROM admins WHERE email = ?", array($email))->row_array();
	}
	function get_all()
	{
		//run query and assign it into result array
		return $this->db->query("SELECT * from admins")->result_array();   
	}
}

?>