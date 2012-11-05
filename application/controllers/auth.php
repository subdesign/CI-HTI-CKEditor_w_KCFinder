<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
	parent::__construct();
    }

    // Example method initializing KCFinder to enable uploads.
    public function login()
    {
	// if the user successfully logged in..
	if($this->yourauth->check() == TRUE)
	{
	    session_start();
	    $_SESSION['KCFINDER'] = array();
	    $_SESSION['KCFINDER']['disabled'] = false;

	    redirect('editor/index');
	}

    }

    // Example method ending KCFinder session.
    public function logout()
    {    
	$this->yourauth->logout();
    
	session_start();
	$_SESSION['KCFINDER']['disabled'] = true;
	session_unset();
	session_destroy();	
    }

}