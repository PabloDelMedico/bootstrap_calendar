<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event extends DataMapper 
{

	var $has_one = array("person");

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("America/Argentina/Buenos_Aires");

	}

    /**
     * @desc -
     * @access public
     * @author Iparra
     * @return bool
     */
    public function index($id=0)
    {
//        return $this->get($id);
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


		$this->start= $this->_formatDate($this->start);
		$this->end= $this->_formatDate($this->end);

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
	// public function getAll()
	// {
	// 	$query = $this->db->get('events');
	// 	if($query->num_rows() > 0)
	// 	{
	// 		return $query->result();
	// 	}
	// 	return object();
	// }

	public function getAll()
	{
		// $query = $this->db->get('events');
		// if($query->num_rows() > 0)
		// {
		// 	return $query->result();
		// }
		// return object();

		return $this->get();
	}

    public function getEvent($id)
    {
        // $query = $this->db->get('events');
        // if($query->num_rows() > 0)
        // {
        // 	return $query->result();
        // }
        // return object();

        return $this->where('id', $id)->get();

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