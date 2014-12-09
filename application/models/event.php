<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event extends DataMapper 
{

	var $has_one = array("person");

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Europe/Madrid");

		// $this->load->model("person_model");
	}

	// /**
	// * @desc - añade un nuevo evento
	// * @access public
	// * @author Iparra
	// * @return bool
	// */
	// public function add()
	// {
	// 	$this->db->set("start", $this->_formatDate($this->input->post("from")));
	// 	$this->db->set("end", $this->_formatDate($this->input->post("to")));
	// 	$this->db->set("url", $this->input->post("url"));
	// 	$this->db->set("title", $this->input->post("title"));
	// 	$this->db->set("body", $this->input->post("event"));
	// 	$this->db->set("class", $this->input->post("class"));

	// 	if($this->db->insert("events"))
	// 	{
	// 		return TRUE;
	// 	}
	// 	return FALSE;
	// }

	/**
	* @desc - añade un nuevo evento
	* @access public
	* @author Iparra
	* @return bool
	*/
	public function add()
	{
		// var_dump($this->class);die;

		// $e = new Event();
		// $e->start= $this->_formatDate($this->input->post("from"));
		// $e->end= $this->_formatDate($this->input->post("to"));
		// $e->url= $this->input->post("url");
		// $e->title= $this->input->post("title");
		// $e->body= $this->input->post("event");
		// $e->class= $this->input->post("class");

		$this->save();

		// if($this->db->insert("events"))
		// {
		// 	return TRUE;
		// }
		// return FALSE;
	}

	/**
	* @desc - obtiene todos los registros de events
	* @access public
	* @author Iparra
	* @return object
	*/
	public function getAll()
	{
		$query = $this->db->get('events');
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		return object();
	}

	/**
	* @desc - formatea una fecha a microtime para añadir al evento tipo 1401517498985
	* @access private
	* @author Iparra
	* @return strtotime
	*/
	private function _formatDate($date)
	{
		return strtotime(substr($date, 6, 4)."-".substr($date, 3, 2)."-".substr($date, 0, 2)." " .substr($date, 10, 6)) * 1000;
	}
}
/* End of file events_model.php */
/* Location: ./application/models/events_model.php */