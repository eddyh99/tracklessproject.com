<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	// public function __construct() {
	//    parent::__construct();

    // }

	public function index()
	{
        $data = array(
            'title'     => 'Trackless Project',
            'content'   => 'home/index',
		);
		$this->load->view('layout/wrapper', $data);
	}
	
	public function guideline()
	{
        $data = array(
            'title'     => 'Trackless Project - Guide Lane',
            'content'   => 'home/guide-line',
		);
		$this->load->view('layout/wrapper', $data);
	}
	public function translate()
	{
        $data = array(
            'title'     => 'Trackless Project - Translate',
            'content'   => 'home/translate',
		);
		$this->load->view('layout/wrapper', $data);
	}
}