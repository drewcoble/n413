<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Waxtourney extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('waxtourney_model');
	}

	public function index(){
		$data["page_title"] = "WAX TOURNEY";
		$data["this_page"] = "home";
		$data["teams"] = $this->waxtourney_model->get_scoring_list();
		$this->load->view('templates/head', $data);
		$this->load->view('index', $data);
		$this->load->view('templates/footer', $data);
	}

	public function champ() {
		$this_week = $this->input->get('week', TRUE);
		$data["page_title"] = "WAX | CHAMPIONSHIP BRACKET";
		$data["this_page"] = "champ";
		$data["this_week"] = $this_week;
		$data["teams"] = $this->waxtourney_model->get_teams();
		$data["matchups"] = $this->waxtourney_model->get_winners_bracket($this_week);
		$this->load->view('templates/head', $data);
		$this->load->view('champ', $data);
//		$this->load->view('templates/week-select', $data);
		$this->load->view('templates/footer', $data);
	}

	public function consolation() {
		$this_week = $this->input->get('week', TRUE);
		$data["page_title"] = "WAX | CONSOLATION BRACKET";
		$data["this_page"] = "consolation";
		$data["this_week"] = $this_week;
		$data["teams"] = $this->waxtourney_model->get_teams();
		$data["matchups"] = $this->waxtourney_model->get_consolation_bracket($this_week);
		$this->load->view('templates/head', $data);
		$this->load->view('consolation', $data);
//		$this->load->view('templates/week-select', $data);
		$this->load->view('templates/footer', $data);
	}

	public function feces() {
		$this_week = $this->input->get('week', TRUE);
		$data["page_title"] = "WAX | FECES CUP";
		$data["this_page"] = "feces";
		$data["this_week"] = $this_week;
		$data["teams"] = $this->waxtourney_model->get_teams();
		$data["matchups"] = $this->waxtourney_model->get_feces_cup($this_week);
		$this->load->view('templates/head', $data);
		$this->load->view('feces', $data);
//		$this->load->view('templates/week-select', $data);
		$this->load->view('templates/footer', $data);
	}


}

