

<?php
// if ($week != 12) {
// 	echo '13+';
// }
// if ($week != 17) {
// 	echo '16-';
// }
?>

<h3 class="page-title">Week <?=$week?> Scores</h3>

<div class="edit-content">
	<form method="POST" action="" id="scoring-edit-form" class="edit-form">

		<?php
		$week_string = "wk".$week."_points";
		foreach($teams as $team) {
			if ($team["team_seed"] >0) {
				echo '<div class="scoring-row form-row">
							<input id="' . $team['id'] . '" class="edit-input" value="'. $team[$week_string] .'" />
							<span class="team-name">' . $team['team_name'] .'</span>
					</div>';
			}

		}
		?>

		<button type="submit" id="submit" class="site-btn">Submit</button>
		<div id="form-content"></div>
	</form>
</div>

</body>

<script>




	$(document).ready(function(){
		document.title = page_title;
		navbar_update("");

		function buildScoringArray() {
			let newTeamScoring = {};

			$(".scoring-row input").each((idx) => {

				//only add this team/seed combo to object if it has changed
				if ($(".scoring-row input")[idx].value != (idx + 1)) {
					let teamObj = {
						id: $(".scoring-row input")[idx].id,
						score: $(".scoring-row input")[idx].value
					}

					// console.log(teamObj);
					newTeamScoring['team' + idx] = teamObj;
				}
			});

			// console.log(newTeamSeeding);
			return newTeamScoring;
		}


		// handling the seed-edit-form submit button
		$("#scoring-edit-form").submit(function(event){
			event.preventDefault();

			let teamScores = buildScoringArray();
			// console.log(teamSeeds);

			if (teamScores) {
				$.post("<?=site_url()?>/waxtourney/edit_score?week=<?=$week?>",
					teamScores,
					"json"
				).done(()=> {
					$("#alert-message").html('<h3 style="text-align:center;margin-bottom: 10px;">Changes were successfully made.</h3><a href="<?=site_url()?>/waxtourney/edit_scores?week=<?=$week?>"><button class="site-btn">OK</button></a>');
					$("#alert-modal").css("display","flex");
				}).fail(()=>{
					$("#alert-message").html('<h3 style="text-align:center;color: red; margin-bottom: 10px;">Something went wrong.</h3><a href="<?=site_url()?>/waxtourney/edit_scores?week=<?=$week?>"><button class="site-btn">Try Again</button></a>');
					$("#alert-modal").css("display","flex");
				}); //post end
			} //if (teamSeeds) end

		}); //submit end

	}); //document.ready end

</script>

</html>
