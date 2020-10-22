<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct() {
		parent::__construct();
		$this->load->model('auth_model');
	}

	public function index() {
		$data["page_title"] = "WAX | LOGIN";
		$data["this_page"] = "login";
		$this->load->view('templates/head', $data);
		$this->load->view('auth/login', $data);
		$this->load->view('templates/footer', $data);
	}

}
