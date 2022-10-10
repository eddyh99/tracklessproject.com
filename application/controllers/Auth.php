<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
	   parent::__construct();

    }

	public function index()
	{
        $data = array(
            'title'     => 'Trackless Project',
            'content'   => 'home/index',
		);
		$this->load->view('layout/wrapper', $data);
	}
}
