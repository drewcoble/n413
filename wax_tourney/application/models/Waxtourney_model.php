<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Waxtourney_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		//this causes the database library to be autoloaded
		//loading of any other models would happen here
	}

	public function get_scoring_list(){
		$sql = "SELECT * FROM `wax_teams` ORDER BY `total_points` DESC";
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





	public function get_random_row() {
		$sql = "SELECT * FROM `the_list` ORDER BY RAND() LIMIT 1";
		$query = $this->db->query($sql);
		return $query->row_array();
	}


}
