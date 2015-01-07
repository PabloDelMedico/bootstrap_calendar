<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

    }

    public function process()
    {

        //
        $this->load->helper('security');

        $user = $this->security->xss_clean($this->input->post('username'));
        $pwd = $this->security->xss_clean($this->input->post('password'));


        // Load the model
        $u = new User();
        // Validate the user can login
        $result = $u->validate($user, $pwd);

        // Now we verify the result
        if (!$result) {
            // If user did not validate, then show them login page again
            $msg = '<font color=red>Invalid username and/or password.</font><br />';
            $this->index($msg);
        } else {

            $data = array(
                'userid' => $u->id,
                'username' => $u->username,
                'validated' => true
            );

            $this->session->set_userdata($data);

            // If user did validate,
            // Send them to members area
            redirect('calendar');
        }

    }

    public function index($msg = NULL)
    {
        // Load our view to be displayed
        // to the user
        $data['msg'] = $msg;
        $this->load->view('login', $data);
    }

}