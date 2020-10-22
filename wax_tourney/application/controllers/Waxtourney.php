<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Waxtourney extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('waxtourney_model');
//		$this->load->model('litform_model');
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













	//OLD BUSINESS FROM THE LIT JAMS

	public function litlist(){
		$data["page_title"] = "LIT FANTASY SITE";
		$data["this_page"] = "litlist";
		$data["records"] = $this->litlist_model->get_litlist_items();
		$this->load->view('templates/head', $data);
		$this->load->view('litlist', $data);
	}

	public function detail($id){
		$detail = $this->litlist_model->get_litlist_detail($id);
		$data["page_title"] = "LIT FANTASY | ".$detail["name"];
		$data["this_page"] = "litlist";
		$data["row"] = $detail;
		$this->load->view('templates/head', $data);
		$this->load->view('detail', $data);
	}

	public function litform() {
		$data["page_title"] = "LIT FANTASY | FORM";
		$data["this_page"] = "contact";
		$this->load->view('templates/head', $data);
		$this->load->view('litform', $data);
	}

	public function contact_post() {
		$contact = $this->input->post();
		$messages = $this->litform_model->contact_post($contact);
		echo json_encode($messages);
	}

	public function messages(){
		$data["page_title"] = "LIT FANTASY | MESSAGES";
		$data["this_page"] = "messages";
		$data["messages"] = $this->litform_model->get_messages();
		$this->load->view('templates/head', $data);
		$this->load->view('messages', $data);
	}

}

