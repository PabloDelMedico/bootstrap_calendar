<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends CI_Controller 
{
    function __construct(){
        parent::__construct();
        $this->check_isvalidated();
    }

	public function index()
	{
		$this->load->view('calendar');
	}

    private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }

    public function do_logout(){
        $this->session->sess_destroy();
        redirect('login');
    }

}

/* End of file calendar.php */
/* Location: ./application/controllers/calendar.php */