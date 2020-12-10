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

	public function heatcheck(){
		$data["page_title"] = "WAX TOURNEY";
		$data["this_page"] = "heatcheck";
		$data["teams"] = $this->waxtourney_model->get_scoring_list();
		$this->load->view('templates/head', $data);
		$this->load->view('heatcheck', $data);
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

	public function team_details() {
		$data["page_title"] = "WAX TOURNEY";
		$data["this_page"] = "team_details";
		$team_id = $this->input->get('id', TRUE);
		$data["team"] = $this->waxtourney_model->get_team_by_id($team_id);
		$data["qb"] = $this->waxtourney_model->get_player_by_id($data["team"]["qb"]);
		$data["rb1"] = $this->waxtourney_model->get_player_by_id($data["team"]["rb1"]);
		$data["rb2"] = $this->waxtourney_model->get_player_by_id($data["team"]["rb2"]);
		$data["wr1"] = $this->waxtourney_model->get_player_by_id($data["team"]["wr1"]);
		$data["wr2"] = $this->waxtourney_model->get_player_by_id($data["team"]["wr2"]);
		$data["te"] = $this->waxtourney_model->get_player_by_id($data["team"]["te"]);
		$this->load->view('templates/head', $data);
		$this->load->view('teamdetails', $data);
		$this->load->view('templates/footer', $data);
	}

	public function matchup() {
		$data["page_title"] = "WAX TOURNEY";
		$data["this_page"] = "team_details";
		//get team IDs from query string
		$team1_id = $this->input->get('id1', TRUE);
		$team2_id = $this->input->get('id2', TRUE);
		//get team1 data
		$data["t1"] = $this->waxtourney_model->get_team_by_id($team1_id);
		$data["t1_qb"] = $this->waxtourney_model->get_player_by_id($data["t1"]["qb"]);
		$data["t1_rb1"] = $this->waxtourney_model->get_player_by_id($data["t1"]["rb1"]);
		$data["t1_rb2"] = $this->waxtourney_model->get_player_by_id($data["t1"]["rb2"]);
		$data["t1_wr1"] = $this->waxtourney_model->get_player_by_id($data["t1"]["wr1"]);
		$data["t1_wr2"] = $this->waxtourney_model->get_player_by_id($data["t1"]["wr2"]);
		$data["t1_te"] = $this->waxtourney_model->get_player_by_id($data["t1"]["te"]);
		//get team2 data
		$data["t2"] = $this->waxtourney_model->get_team_by_id($team2_id);
		$data["t2_qb"] = $this->waxtourney_model->get_player_by_id($data["t2"]["qb"]);
		$data["t2_rb1"] = $this->waxtourney_model->get_player_by_id($data["t2"]["rb1"]);
		$data["t2_rb2"] = $this->waxtourney_model->get_player_by_id($data["t2"]["rb2"]);
		$data["t2_wr1"] = $this->waxtourney_model->get_player_by_id($data["t2"]["wr1"]);
		$data["t2_wr2"] = $this->waxtourney_model->get_player_by_id($data["t2"]["wr2"]);
		$data["t2_te"] = $this->waxtourney_model->get_player_by_id($data["t2"]["te"]);
		//load views
		$this->load->view('templates/head', $data);
		$this->load->view('matchup', $data);
		$this->load->view('templates/footer', $data);
	}

	public function edit_seeds() {
//		$this_week = $this->input->get('week', TRUE);
		$data["page_title"] = "WAX | EDIT";
		$data["this_page"] = "edit_seeds";
//		$data["this_week"] = $this_week;
		$data["teams"] = $this->waxtourney_model->get_teams();
//		$data["matchups"] = $this->waxtourney_model->get_winners_bracket($this_week);
		$this->load->view('templates/head', $data);
		$this->load->view('templates/edit-select', $data);
		$this->load->view('edit_seeds', $data);
		$this->load->view('templates/footer', $data);
	}

	public function edit_seed() {
		$teams = $this->input->post();
		foreach($teams as $team) {
			$this->waxtourney_model->edit_seed($team['id'], $team['seed']);
		}
//		echo json_encode($messages);
	}

	public function edit_scores() {
		$week = $this->input->get('week', TRUE);
		$data["page_title"] = "WAX | EDIT";
		$data["this_page"] = "edit_scoring";
		$data["week"] = $week;
		$data["teams"] = $this->waxtourney_model->get_teams();
		$this->load->view('templates/head', $data);
		$this->load->view('templates/edit-select', $data);
		$this->load->view('edit_scores', $data);
		$this->load->view('templates/footer', $data);
	}

	public function edit_score() {
		$week = $this->input->get('week', TRUE);
		$teams = $this->input->post();
		foreach($teams as $team) {
			$this->waxtourney_model->edit_score($team['id'], $team['score'], $week);
		}
//		echo json_encode($messages);
	}

	public function edit_brackets() {
		$week = $this->input->get('week', TRUE);
		$bracket = $this->input->get('b', TRUE);

		$data["week"] = $week;
		$data["bracket"] = $bracket;
		$data["page_title"] = "WAX | EDIT";
		$data["this_page"] = "edit_brackets";
		$data["champ_bracket"] = $this->waxtourney_model->get_winners_bracket($week);
		$data["cons_bracket"] = $this->waxtourney_model->get_consolation_bracket($week);
		$data["feces_bracket"] = $this->waxtourney_model->get_feces_cup($week);
		$data["teams"] = $this->waxtourney_model->get_teams();

		$this->load->view('templates/head', $data);
		$this->load->view('templates/edit-select', $data);
		$this->load->view('edit_brackets', $data);
		$this->load->view('templates/footer', $data);
	}

	public function edit_champ_bracket() {
		$matchups = $this->input->post();
		foreach($matchups as $matchup) {
			$this->waxtourney_model->edit_champ_bracket($matchup['matchup_id'], $matchup['team1'], $matchup['team2']);
		}
//		echo json_encode($messages);
	}

	public function edit_cons_bracket() {
		$matchups = $this->input->post();
		foreach($matchups as $matchup) {
			$this->waxtourney_model->edit_cons_bracket($matchup['matchup_id'], $matchup['team1'], $matchup['team2']);
		}
//		echo json_encode($messages);
	}

	public function edit_feces_bracket() {
		$matchups = $this->input->post();
		foreach($matchups as $matchup) {
			$this->waxtourney_model->edit_feces_bracket($matchup['matchup_id'], $matchup['team1'], $matchup['team2']);
		}
//		echo json_encode($messages);
	}

}

