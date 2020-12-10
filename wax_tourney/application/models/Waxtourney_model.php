<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Waxtourney_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		//this causes the database library to be autoloaded
		//loading of any other models would happen here
	}

	public function get_scoring_list(){
		$sql = "SELECT *, wk12_points+wk13_points+wk14_points+wk15_points+wk16_points+wk17_points AS `calc_points`  FROM `wax_teams` ORDER BY `calc_points` DESC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function get_winners_bracket($this_week){
		$sql = "SELECT * FROM `wax_champ` WHERE `week` = ".$this_week;
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function get_consolation_bracket($this_week){
		$sql = "SELECT * FROM `wax_consolation` WHERE `week` = ".$this_week;
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function get_feces_cup($this_week){
		$sql = "SELECT * FROM `wax_feces_cup` WHERE `week` = ".$this_week;
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function get_teams(){
		$sql = "SELECT * FROM `wax_teams` ORDER BY `team_seed`";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function get_team_by_id($id) {
		$sql = "SELECT * FROM `wax_teams` WHERE `id` = " . $id;
		$query = $this->db->query($sql);
		return $query->row_array();
	}

	public function get_player_by_id($id) {
		$sql = "SELECT * FROM `wax_players` WHERE `id` = " . $id;
		$query = $this->db->query($sql);
		return $query->row_array();
	}

	public function edit_seed($id, $seed) {
		$id = $this->db->escape_str($id);
		$seed = $this->db->escape_str($seed);

		$sql = 'UPDATE `wax_teams` SET team_seed='. $seed . ' WHERE id=' . $id;
		$this->db->query($sql);
	}

	public function edit_score($id, $score, $week) {
		$id = $this->db->escape_str($id);
		$score = $this->db->escape_str($score);
		$score_field = "wk". $week ."_points";

		$sql = 'UPDATE `wax_teams` SET ' . $score_field . '='. $score . ' WHERE id=' . $id;
		$this->db->query($sql);
	}

	public function edit_champ_bracket($matchup_id, $team1, $team2) {
		$matchup_id = intval($matchup_id);
		$team1 = intval($team1);
		$team2 = intval($team2);

		$sql = 'UPDATE `wax_champ` SET team1='.$team1.', team2='.$team2.' WHERE matchup_id='.$matchup_id;
//		$sql = 'UPDATE `wax_champ` SET `team1`=3,`team2`=8 WHERE `matchup_id`=5';
		$this->db->query($sql);
	}

	public function edit_cons_bracket($matchup_id, $team1, $team2) {
		$matchup_id = intval($matchup_id);
		$team1 = intval($team1);
		$team2 = intval($team2);

		$sql = 'UPDATE `wax_consolation` SET team1='.$team1.', team2='.$team2.' WHERE matchup_id='.$matchup_id;
		$this->db->query($sql);
	}

	public function edit_feces_bracket($matchup_id, $team1, $team2) {
		$matchup_id = intval($matchup_id);
		$team1 = intval($team1);
		$team2 = intval($team2);

		$sql = 'UPDATE `wax_feces_cup` SET team1='.$team1.', team2='.$team2.' WHERE matchup_id='.$matchup_id;
		$this->db->query($sql);
	}


}
