<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editor extends CI_Controller
{

    public function __construct()
    {
	parent::__construct();

	// check if user is logged in
	if( ! $this->yourauth->logged_in())
	{
	    show_404();
	}
    }

    // load the example "editor" view
    public function index()
    {
	$this->load->view('editor');
    }

}