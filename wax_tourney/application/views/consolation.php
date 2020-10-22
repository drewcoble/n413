<h3 class="page-title consolation">Consolation Bracket</h3>

<div class="tourney-div consolation-bracket">

	<?php

	$this_week = $this->input->get('week', TRUE);

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
			echo '<div class="tourney-matchup final-game">';
		}
		else {
			echo '<div class="tourney-matchup cons-matchup">';
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
					</div>';
					switch ($this_week) {
						case 12:
							echo '<div class="team-score">' . $teams[$matchup["team1"]]["wk12_points"] . '</div>';
							break;
						case 13:
							echo '<div class="team-score">' . $teams[$matchup["team1"]]["wk13_points"] . '</div>';
							break;
						case 14:
							echo '<div class="team-score">' . $teams[$matchup["team1"]]["wk14_points"] . '</div>';
							break;
						case 15:
							echo '<div class="team-score">' . $teams[$matchup["team1"]]["wk15_points"] . '</div>';
							break;
						case 16:
							echo '<div class="team-score">' . $teams[$matchup["team1"]]["wk16_points"] . '</div>';
							break;
						case 17:
							echo '<div class="team-score">' . $teams[$matchup["team1"]]["wk17_points"] . '</div>';
							break;
						default:
							echo '<div class="team-score">???</div>';
					}
				echo '</div>
				<hr>
				<div class="matchup-team">
					<div class="team-seed">'
						. $matchup["team2"] .
					'</div>
					<div class="team-name">
						<img class="team-logo" src="' . base_url() . 'assets/images/fantasy_team_logos/'
						. $teams[$matchup["team2"]]["team_image"] . '" alt="">'
						. $teams[$matchup["team2"]]["team_name"] . '
					</div>';
					switch ($this_week) {
						case 12:
							echo '<div class="team-score">' . $teams[$matchup["team2"]]["wk12_points"] . '</div>';
							break;
						case 13:
							echo '<div class="team-score">' . $teams[$matchup["team2"]]["wk13_points"] . '</div>';
							break;
						case 14:
							echo '<div class="team-score">' . $teams[$matchup["team2"]]["wk14_points"] . '</div>';
							break;
						case 15:
							echo '<div class="team-score">' . $teams[$matchup["team2"]]["wk15_points"] . '</div>';
							break;
						case 16:
							echo '<div class="team-score">' . $teams[$matchup["team2"]]["wk16_points"] . '</div>';
							break;
						case 17:
							echo '<div class="team-score">' . $teams[$matchup["team2"]]["wk17_points"] . '</div>';
							break;
						default:
							echo '<div class="team-score">???</div>';
					}

				echo '</div>
			</div>';

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

</body>
<!--<script>-->
<!--	$(document).ready(function(){-->
<!--		document.title = page_title;-->
<!--		navbar_update(this_page);-->
<!--	}); //ready-->
<!--</script>-->
</html>


