<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Person extends DataMapper 
{

	var $has_many = array("event");

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }

	/**
	* @desc - añade un nueva persona
	* @access public
	* @author Iparra
	* @return bool
	*/
	public function add($name)
	{
		// $this->db->set("nombre", $this->input->post("name"));
		// $this->db->set("cel", $this->input->post("cel"));
		// $this->db->set("tel", $this->input->post("tel"));
		// $this->db->set("mail", $this->input->post("mail"));
		// $this->db->set("edad", $this->input->post("edad"));
		// $this->db->set("sexo", $this->input->post("sexo"));
		// if($this->db->insert("persona"))
		// {
		// 	return TRUE;
		// }
		// return FALSE;

		$this->db->set("nombre", $name);
		$this->db->insert("persona");
	}
}