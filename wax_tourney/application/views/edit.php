<h4>Edit Team Seeding</h4>

<div class="edit-content">
	<form method="POST" action="" id="seed-edit-form" class="seed-edit-form">

	<?php
//		$teams = $data["teams"];
		foreach($teams as $team) {
			if ($team["team_seed"] >0) {
				echo '<div class="seeding-row form-row">
							<input id="' . $team['id'] . '" class="seed-input" value="'. $team["team_seed"] .'" />
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

		function buildSeedingArray() {
			let newTeamSeeding = {};

			$(".seeding-row input").each((idx) => {

				//only add this team/seed combo to object if it has changed
				if ($(".seeding-row input")[idx].value != (idx + 1)) {
					let teamObj = {
						id: $(".seeding-row input")[idx].id,
						seed: $(".seeding-row input")[idx].value
					}

					// console.log(teamObj);
					newTeamSeeding['team' + idx] = teamObj;
				}
			});

			// console.log(newTeamSeeding);
			return newTeamSeeding;
		}


		// handling the seed-sedit-form submit button
		$("#seed-edit-form").submit(function(event){
			event.preventDefault();

			let teamSeeds = buildSeedingArray();
			// console.log(teamSeeds);

			if (teamSeeds) {
				$.post("<?=site_url()?>/waxtourney/edit_seeding",
						teamSeeds,
						"json"
				).done(()=> {
					$("#alert-message").html('<h3 style="text-align:center;margin-bottom: 10px;">Changes were successfully made.</h3><a href="<?=site_url()?>/waxtourney/edit"><button class="site-btn">OK</button></a>');
					$("#alert-modal").css("display","flex");
				}).fail(()=>{
					$("#alert-message").html('<h3 style="text-align:center;color: red; margin-bottom: 10px;">Something went wrong.</h3><a href="<?=site_url()?>/waxtourney/edit"><button class="site-btn">Try Again</button></a>');
					$("#alert-modal").css("display","flex");
				}); //post end
			} //if (teamSeeds) end

		}); //submit end

	}); //document.ready end

</script>

</html>
