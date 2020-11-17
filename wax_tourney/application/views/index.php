<h3 class="page-title">Heat Check <i class="fas fa-fire"></i>&nbsp;<i class="fas fa-fire"></i>&nbsp;<i class="fas fa-fire"></i></h3>

<div class="scoring-table">
	<div class="scoring-row title-row"><span class="rank">#</span><span class="team-name">Team</span><span class="team-points">Points</span></div>

	<?php
		$rank = 1;
		foreach($teams as $team){
			if ($rank == 12) {
				echo '
				<div class="scoring-row" id="last-row">
					<span class="team-seed">' . $team["team_seed"] . '</span>
					<a href="' . site_url() . '/waxtourney/teamdetails?id=' . $team["id"] . '" class="team-name">
						<img class="team-logo" src="' . base_url() . 'assets/images/fantasy_team_logos/' . $team["team_image"] . '" alt="">'
						. $team["team_name"] .
					'</a>
					<span class="team-points">' . $team["total_points"] . '</span>
				</div>';
			}
			else if ($rank < 12) {
				echo '
				<div class="scoring-row">
					<span class="team-seed">' . $team["team_seed"] . '</span>
					
					<a href="' . site_url() . '/waxtourney/teamdetails?id=' . $team["id"] . '" class="team-name">
						<img class="team-logo" src="' . base_url() . 'assets/images/fantasy_team_logos/' . $team["team_image"] . '" alt="">'
					 	. $team["team_name"] .
					'</a>
					<span class="team-points">' . $team["total_points"] . '</span>
				</div>';
			}
			$rank ++;
		} //foreach



	?>


<!--	<div class="scoring-row"><span class="rank">1</span><span class="team-name">Team 1</span><span class="team-points">128.6</span></div>-->

</div>

</body>
<!--<script>-->
<!--	$(document).ready(function(){-->
<!--		document.title = page_title;-->
<!--		navbar_update(this_page);-->
<!--	}); //ready-->
<!--</script>-->
</html>
