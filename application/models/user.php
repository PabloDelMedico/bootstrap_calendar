<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends DataMapper
{

//	var $has_one = array("event");

    function __construct()
    {
        parent::__construct();

    }

    public function validate($user, $pwd)
    {
        $hash_pwd = hash("sha256",$pwd);

        $this->where('username', $user);
        $this->where('pwd', $hash_pwd);

        $this->get(1);

        // Let's check if there are any results
        if($this->id != '')
        {

            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }
}