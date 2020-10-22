<h3 class="page-title feces-title">Feces Cup</h3>

<div class="tourney-div feces-cup">
	<?php

	$this_week = $this->input->get('week', TRUE);

	//	echo $teams[0]["team_name"];

	foreach($matchups as $matchup) {

		switch ($matchup["matchup_id"]) {
			case 3:
				echo '<h4>For Deliverance</h4>';
				break;
			case 4:
				echo '<h4>Knee Deep in Feces</h4>';
				break;
			case 5:
				echo '<h4>For Deliverance</h4>';
				break;
			case 6:
				echo '<h4>Feces Cup Finals</h4><h5>Round 1</h5>';
				break;
			case 7:
				echo '<h4>Feces Cup Finals</h4><h5>Round 2&nbsp;&nbsp;(If Necessary)</h5>';
				break;
			default:break;
		}

		echo '<div class="tourney-matchup feces-matchup">';

		echo '<div class="matchup-team">
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
			default:
				echo '<div class="team-score">???</div>';
		}
		echo '
				</div>
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
	if ($this_week > 12) {
		echo '<div class="left-arrow"><a href="' . site_url() . '/waxtourney/feces?week=' . ($this_week-1) . '"><i class="fas fa-caret-left"></i></a></div>';
	}
	else {
		echo '<div class="left-arrow"></div>';
	}
	?>

	<h4>Week <?=$this_week?></h4>

	<?php
	if ($this_week < 16) {
		echo '<div class="right-arrow"><a href="' . site_url() . '/waxtourney/feces?week=' . ($this_week+1) . '"><i class="fas fa-caret-right"></i></a></div>';
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


