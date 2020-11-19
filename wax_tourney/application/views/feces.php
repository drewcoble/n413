<h3 class="page-title feces-title">Feces Cup</h3>
<h4 class="page-subtitle">Double-Deliverance Tournament</h4>

<div class="tourney-div feces-cup">

	<div class="bracket-container">

	<?php

	$this_week = $this->input->get('week', TRUE);
	$this_week_string = "wk" . $this_week . "_points";

	//	echo $teams[0]["team_name"];

	foreach($matchups as $matchup) {

		switch ($matchup["matchup_id"]) {
			case 1:
				break;
			case 3:
			case 5:
				echo '<h4>For Deliverance</h4>';
				break;
			case 4:
				echo '<h4>Knee Deep in Feces</h4>';
				break;
			case 6:
				echo '<h4>Feces Cup Finals</h4><h5>Round 1</h5>';
				break;
			case 7:
				echo '<h4>Feces Cup Finals</h4><h5>Round 2&nbsp;&nbsp;(If Necessary)</h5>';
				break;
			default:
				break;
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
			</div>
			
			<div class="team-score">' . $teams[$matchup["team1"]][$this_week_string] . '</div>
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
			</div>
			<div class="team-score">' . $teams[$matchup["team2"]][$this_week_string] . '</div>
			</div>
	</div>';
	} // end of foreach loop
	?>

	</div> <!-- end of bracket-holder -->

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

</div> <!-- end of tourney-div -->





</body>
<script>
	$(document).ready(function(){
		document.title = page_title;
		navbar_update(this_page);
	}); //ready
</script>
</html>


