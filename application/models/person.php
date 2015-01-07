<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Person extends DataMapper 
{

//	var $has_one = array("event");

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
	public function add()
	{
		$this->save();
		return $this->db->insert_id();

	}

    public function getPerson($id)
    {
        return $this->where('id', $id)->get();

    }

    public function update()
    {
        $this->save();

    }
}