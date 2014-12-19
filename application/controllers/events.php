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
		$e->class= $this->input->post("class");
		$e->cant_adultos= $this->input->post("cant_adultos");
		$e->cant_chicos= $this->input->post("cant_chicos");
		$e->description= $this->input->post("description_event");
        $e->title= $this->input->post("title");
        $e->menu= $this->input->post("menu");

		$p = new Person();
		$p->nombre_padre= $this->input->post("name_parent");
		$p->cel= $this->input->post("cel");
		$p->tel= $this->input->post("tel");
		$p->mail= $this->input->post("mail");
		$p->nombre= $this->input->post("name");
		$p->edad= $this->input->post("edad");
		$p->sexo= $this->input->post("sexo");

		// Adding foreign key
		$e->persona_id= $p->add();

        $e->add();

        redirect("calendar");
	}

	// public function getAll()
	// {
	// 	if($this->input->is_ajax_request())
	// 	{
	// 		$this->load->model('event');
	// 		$events = $this->events->getAll();
	// 		echo json_encode(
	// 			array(
	// 				"success" => 1,
	// 				"result" => $events
	// 			)
	// 		);
	// 	}


	// }

	public function getAll()
	{
		if($this->input->is_ajax_request())
		{
			$e = new Event();
			$e->getAll();

			$events = array();
			$i=0;
			foreach ($e as $obj) 
			{
				$events[$i]['id']= $obj->id;
				$events[$i]['title']= $obj->title;
				$events[$i]['class']= $obj->class;
				$events[$i]['start']= $obj->start;
				$events[$i]['end']= $obj->end;
                $events[$i]['url']= $obj->url;
				$i++;
			}

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
            $e = new Event();
            $e->getEvent($id);

            $data['event']=$e;
            $data['pablo']='pablo';

            $this->load->view("add_event", $data);
		}
	}
}


/* End of file events.php */
/* Location: ./application/controllers/events.php */
