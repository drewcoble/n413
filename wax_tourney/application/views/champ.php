<h3 class="page-title champs">Championship Bracket</h3>
<h4 class="page-subtitle">Double-Elimination Tournament</h4>

<div class="tourney-div champ-bracket">
<!--	<h4>Winner's Bracket</h4>-->
	<div class="bracket-container">

		<?php

	$this_week = $this->input->get('week', TRUE);
	$this_week_string = "wk" . $this_week . "_points";

	foreach ($matchups as $matchup) {

			if ($matchup["bracket"] == 1) {
				echo '<a class="tourney-matchup winners" href="'. site_url() . '/waxtourney/matchup?week='. $this_week .'&id1='. $teams[$matchup["team1"]]["id"] .'&id2='. $teams[$matchup["team2"]]["id"] .'">';
			} else if ($matchup["bracket"] == 2) {
				echo '<h4>ROYAL RUMBLE</h4>
					<a class="tourney-matchup championship-game"  href="'. site_url() . '/waxtourney/matchup?week='. $this_week .'&id1='. $teams[$matchup["team1"]]["id"] .'&id2='. $teams[$matchup["team2"]]["id"] .'">
						<div class="matchup-team">
							<div class="team-seed">' . $matchup["team1"] . '</div>
							<div class="team-name">
								<img class="team-logo" src="' . base_url() . 'assets/images/fantasy_team_logos/'
								. $teams[$matchup["team1"]]["team_image"] . '" alt="">'
								. $teams[$matchup["team1"]]["team_name"] .
							'</div>
							<div class="team-score">' . $teams[$matchup["team1"]][$this_week_string] . '</div>
						</div>
					</a> <!-- END OF ROYAL RUMBLE WINNERS BRACKET DIV -->
					<div class="tourney-matchup losers">
						<div class="matchup-team">
							<div class="team-seed">' . $matchup["team2"] . '</div>
							<div class="team-name">
								<img class="team-logo" src="' . base_url() . 'assets/images/fantasy_team_logos/'
								. $teams[$matchup["team2"]]["team_image"] . '" alt="">'
								. $teams[$matchup["team2"]]["team_name"] .
							'</div>
							<div class="team-score">' . $teams[$matchup["team2"]][$this_week_string] . '</div>
						</div>
						<hr>
					';
			} else if ($matchup["bracket"] == 3) {
				echo '
						<div class="matchup-team" >
							<div class="team-seed">' . $matchup["team1"] . '</div>
							<div class="team-name">
								<img class="team-logo" src="' . base_url() . 'assets/images/fantasy_team_logos/'
								. $teams[$matchup["team1"]]["team_image"] . '" alt="">'
								. $teams[$matchup["team1"]]["team_name"] .
							'</div>
							<div class="team-score">' . $teams[$matchup["team1"]][$this_week_string] . '</div>
						</div>
						<hr><div class="matchup-team">
							<div class="team-seed">' . $matchup["team2"] . '</div>
							<div class="team-name">
								<img class="team-logo" src="' . base_url() . 'assets/images/fantasy_team_logos/'
								. $teams[$matchup["team2"]]["team_image"] . '" alt="">'
								. $teams[$matchup["team2"]]["team_name"] .
							'</div>
							<div class="team-score">' . $teams[$matchup["team2"]][$this_week_string] . '</div>
						</div>
					</div>'; // END OF ROYAL RUMBLE LOSERS BRACKET DIV
			} else if ($matchup["bracket"] == 4) {
				echo '<h4>Championship Week (If Necessary)</h4>
						<div class="tourney-matchup championship-game">';
			} else {
			echo '<a class="tourney-matchup losers" href="'. site_url() . '/waxtourney/matchup?week='. $this_week .'&id1='. $teams[$matchup["team1"]]["id"] .'&id2='. $teams[$matchup["team2"]]["id"] .'">';
		}


			if ($this_week != 15) {
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
			</a>';
			}

		}

	?>

	</div>

	<div class="tourney-week">
		<?php
		if ($this_week > 12) {
			echo '<div class="left-arrow"><a href="' . site_url() . '/waxtourney/champ?week=' . ($this_week-1) . '"><i class="fas fa-caret-left"></i></a></div>';
		}
		else {
			echo '<div class="left-arrow"></div>';
		}
		?>

		<h4>Week <?=$this_week?></h4>

		<?php
		if ($this_week < 16) {
			echo '<div class="right-arrow"><a href="' . site_url() . '/waxtourney/champ?week=' . ($this_week+1) . '"><i class="fas fa-caret-right"></i></a></div>';
		}
		else {
			echo '<div class="right-arrow"></div>';
		}
		?>
	</div>



</div> <!-- END of tourney-div -->



</body>
<script>
	$(document).ready(function(){
		document.title = page_title;
		navbar_update(this_page);
	}); //ready
</script>
</html>

