<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

	public function index()
	{
		$this->load->view("add_event");
	}

	public function save()
	{
		// $this->form_validation->set_rules('from', 'Desde', 'trim|required|xss_clean');
  //       $this->form_validation->set_rules('to', 'Hasta', 'trim|required|xss_clean');
		// $this->form_validation->set_rules('url', 'Url', 'trim|required|xss_clean');
  //       $this->form_validation->set_rules('title', 'Título', 'trim|required|xss_clean');
  //       $this->form_validation->set_rules('event', 'Evento', 'trim|required|xss_clean');
  //       $this->form_validation->set_rules('class', 'Tipo de evento', 'trim|required|xss_clean');

  //       $this->form_validation->set_message('required', 'El  %s es requerido');

  //       if($this->form_validation->run() == FALSE)
  //       {
  //       	// echo validation_errors();
  //           $this->index();
  //       }
  //       else
  //       {
  //       	$this->load->model("events_model");
  //       	$this->events_model->add();
  //       	redirect("calendar");
  //       }

		// -------------------------------------

        // $this->load->model("event");
        // $this->event->add();
        // redirect("calendar");
// ---------------------------------------------------


        $e = new Event();

        $e->start= $this->input->post("from");
		$e->end= $this->input->post("to");
		$e->url= $this->input->post("url");
		$e->title= $this->input->post("title");
		$e->body= $this->input->post("event");
		$e->class= $this->input->post("class");

        $e->add();

        // redirect("calendar");
	}

	public function getAll()
	{
		if($this->input->is_ajax_request())
		{
			$this->load->model('event');
			$events = $this->events->getAll();
			echo json_encode(
				array(
					"success" => 1,
					"result" => $events
				)
			);
		}
	}

	public function render($id = 0)
	{
		if($id != 0)
		{
			echo $id;
		}
	}
}


/* End of file events.php */
/* Location: ./application/controllers/events.php */
