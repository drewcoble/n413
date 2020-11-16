<h3 class="page-title champs">Championship Bracket</h3>

<div class="tourney-div champ-bracket">
<!--	<h4>Winner's Bracket</h4>-->
	<?php

	$this_week = $this->input->get('week', TRUE);
	$this_week_string = "wk" . $this_week . "_points";

//	echo $teams[0]["team_name"];


	foreach ($matchups as $matchup) {

			if ($matchup["bracket"] == 1) {
				echo '<div class="tourney-matchup winners">';
			} else if ($matchup["bracket"] == 2) {
				echo '<h4>ROYAL RUMBLE</h4>
					<div class="royal-rumble-w">
						<div class="matchup-team">
							<div class="team-seed">' . $matchup["team1"] . '</div>
							<div class="team-name">
								<img class="team-logo" src="' . base_url() . 'assets/images/fantasy_team_logos/'
								. $teams[$matchup["team1"]]["team_image"] . '" alt="">'
								. $teams[$matchup["team1"]]["team_name"] .
							'</div>
							<div class="team-score">' . $teams[$matchup["team1"]][$this_week_string] . '</div>
						</div>
					</div> <!-- END OF ROYAL RUMBLE WINNERS BRACKET DIV -->
					<div class="royal-rumble-l">
						<div class="matchup-team-rumble-l">
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
						<div class="matchup-team-rumble-l">
							<div class="team-seed">' . $matchup["team1"] . '</div>
							<div class="team-name">
								<img class="team-logo" src="' . base_url() . 'assets/images/fantasy_team_logos/'
								. $teams[$matchup["team1"]]["team_image"] . '" alt="">'
								. $teams[$matchup["team1"]]["team_name"] .
							'</div>
							<div class="team-score">' . $teams[$matchup["team1"]][$this_week_string] . '</div>
						</div>
						<hr><div class="matchup-team-rumble-l">
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
			echo '<div class="tourney-matchup losers">';
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
			</div>';
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

</body>
<script>
	$(document).ready(function(){
		document.title = page_title;
		navbar_update(this_page);
	}); //ready
</script>
</html>

