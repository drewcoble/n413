<h3 class="page-title consolation">Consolation Bracket</h3>
<h4 class="page-subtitle">Single-Elimination Tournament</h4>

<div class="tourney-div consolation-bracket">

	<div class="bracket-container">

		<?php

	$this_week = $this->input->get('week', TRUE);
	$this_week_string = "wk" . $this_week . "_points";

	//	echo $teams[0]["team_name"];

	foreach($matchups as $matchup) {
		switch ($matchup["matchup_id"]) {
			case 5:
				echo '<h4>For 3rd Place & 2nd Draft Priority</h4>';
				break;
			case 6:
				echo '<h4>For 5th Place</h4>';
				break;
			case 7:
				echo '<h4>For 7th Place</h4>';
				break;
			default:
				break;
		}

		if ($matchup["final_game"] == 1) {
			echo '<a class="tourney-matchup final-game" href="'. site_url() . '/waxtourney/matchup?week='. $this_week .'&id1='. $teams[$matchup["team1"]]["id"] .'&id2='. $teams[$matchup["team2"]]["id"] .'">';
		}
		else {
			echo '<a class="tourney-matchup cons-matchup" href="'. site_url() . '/waxtourney/matchup?week='. $this_week .'&id1='. $teams[$matchup["team1"]]["id"] .'&id2='. $teams[$matchup["team2"]]["id"] .'">';
		}

		echo '
				<div class="matchup-team">
					<div class="team-seed">'
						. $matchup["team1"] .
					'</div>
					<div class="team-name">
						<img class="team-logo" src="' . base_url() . 'assets/images/fantasy_team_logos/'
						. $teams[$matchup["team1"]]["team_image"] . '" alt="">'
						. $teams[$matchup["team1"]]["team_name"] . '
					</div>
					
					<div class="team-score">' . $teams[$matchup["team1"]][$this_week_string] . '</div>
					
				</div> <!-- end of matchup-team div -->
				<hr>
				<div class="matchup-team">
					<div class="team-seed">'
						. $matchup["team2"] .
					'</div>
					<div class="team-name">
						<img class="team-logo" src="' . base_url() . 'assets/images/fantasy_team_logos/'
						. $teams[$matchup["team2"]]["team_image"] . '" alt="">'
						. $teams[$matchup["team2"]]["team_name"] . '
					</div>
					
					<div class="team-score">' . $teams[$matchup["team2"]][$this_week_string] . '</div>
				</div> <!-- end of matchup-team div -->
			</a>'; //end of tourney-matchup div

	}
?>

	</div>

	<div class="tourney-week">
		<?php
		if ($this_week > 15) {
			echo '<div class="left-arrow"><a href="' . site_url() . '/waxtourney/consolation?week=' . ($this_week-1) . '"><i class="fas fa-caret-left"></i></a></div>';
		}
		else {
			echo '<div class="left-arrow"></div>';
		}
		?>

		<h4>Week <?=$this_week?></h4>

		<?php
		if ($this_week < 17) {
			echo '<div class="right-arrow"><a href="' . site_url() . '/waxtourney/consolation?week=' . ($this_week+1) . '"><i class="fas fa-caret-right"></i></a></div>';
		}
		else {
			echo '<div class="right-arrow"></div>';
		}
		?>
	</div>

</div>



</body>
<script>
	$(document).ready(function(){
		document.title = page_title;
		navbar_update(this_page);
	}); //ready
</script>
</html>


