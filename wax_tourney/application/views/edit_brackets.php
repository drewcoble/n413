<h3 class="page-title week-id" id="<?=$week?>">Week <?=$week?> Matchups</h3>

<div class="edit-content">

		<?php

		if ($bracket == "champ") {
			echo '<form method="POST" action="" id="champ-edit-form" class="edit-form">';
			$champCount = 0;

			foreach ($champ_bracket as $matchup) {


				if ($matchup["matchup_id"] == 1 || $matchup["matchup_id"] == 5 || $matchup["matchup_id"] == 9) {
					echo "<h3>Winner's Bracket</h3>";
				} else if ($matchup["matchup_id"] == 7 || $matchup["matchup_id"] == 10) {
					echo "<h3>Loser's Bracket</h3>";
				} else if ($matchup["matchup_id"] == 12) {
					echo "<h3>Royal Rumble</h3>";
				} else if ($matchup["matchup_id"] == 14) {
					echo "<h3>Championship Week</h3>";
				}
				if ($matchup["week"] == $week) {

					echo '<div class="champ-matchup edit-matchup';
					if ($matchup["bracket"] == 1) {
						echo ' wb';
					} else if ($matchup["bracket"] == 0) {
						echo ' lb';
					}
					echo '">';
					echo '<div class="edit-matchup-row"><select id="champ' . $champCount . '" class="edit-input champ-select">';
					foreach ($teams as $team) {
						$option_string = '<option value="' . $team["team_seed"] . '"';
						if ($matchup["team1"] == $team["team_seed"]) {
							$option_string .= ' selected="selected" ';
						}
						echo $option_string . '>' . $team["team_seed"] . " - " . $team["team_name"] . '</option>';
					}
					echo '</select></div>';

					$champCount += 1;

					echo '<div class="edit-matchup-row"><select id="champ' . $champCount . '" class="edit-input champ-select">';
					foreach ($teams as $team) {
						$option_string = '<option value="' . $team["team_seed"] . '"';
						if ($matchup["team2"] == $team["team_seed"]) {
							$option_string .= ' selected="selected" ';
						}
						echo $option_string . '>' . $team["team_seed"] . " - " . $team["team_name"] . '</option>';
					}
					echo '</select></div>';
					echo '</div>';
				}

				$champCount += 1;
			}
		}


		if ($bracket == "cons") {
			echo '<form method="POST" action="" id="cons-edit-form" class="edit-form">';
			$consCount = 0;

			echo "<h3>Consolation Bracket</h3>";

			foreach ($cons_bracket as $matchup) {

				if ($matchup["week"] == $week) {

					echo '<div class="cons-matchup edit-matchup cb">';
					echo '<div class="edit-matchup-row"><select id="cons' . $consCount . '" class="edit-input cons-select">';
					foreach ($teams as $team) {
						$option_string = '<option value="' . $team["team_seed"] . '"';
						if ($matchup["team1"] == $team["team_seed"]) {
							$option_string .= ' selected="selected" ';
						}
						echo $option_string . '>' . $team["team_seed"] . " - " . $team["team_name"] . '</option>';
					}
					echo '</select></div>';

					$consCount += 1;

					echo '<div class="edit-matchup-row"><select id="cons' . $consCount . '" class="edit-input cons-select">';
					foreach ($teams as $team) {
						$option_string = '<option value="' . $team["team_seed"] . '"';
						if ($matchup["team2"] == $team["team_seed"]) {
							$option_string .= ' selected="selected" ';
						}
						echo $option_string . '>' . $team["team_seed"] . " - " . $team["team_name"] . '</option>';
					}
					echo '</select></div>';
					echo '</div>';
				}

				$consCount += 1;
			}
		}


		if ($bracket == "feces") {
			echo '<form method="POST" action="" id="feces-edit-form" class="edit-form">';
			$fecesCount = 0;

			echo "<h3>Feces Cup</h3>";

			foreach ($feces_bracket as $matchup) {

				if ($matchup["week"] == $week) {

					echo '<div class="feces-matchup edit-matchup fc">';
					echo '<div class="edit-matchup-row"><select id="feces' . $fecesCount . '" class="edit-input feces-select">';
					foreach ($teams as $team) {
						$option_string = '<option value="' . $team["team_seed"] . '"';
						if ($matchup["team1"] == $team["team_seed"]) {
							$option_string .= ' selected="selected" ';
						}
						echo $option_string . '>' . $team["team_seed"] . " - " . $team["team_name"] . '</option>';
					}
					echo '</select></div>';

					$fecesCount += 1;

					echo '<div class="edit-matchup-row"><select id="feces' . $fecesCount . '" class="edit-input feces-select">';
					foreach ($teams as $team) {
						$option_string = '<option value="' . $team["team_seed"] . '"';
						if ($matchup["team2"] == $team["team_seed"]) {
							$option_string .= ' selected="selected" ';
						}
						echo $option_string . '>' . $team["team_seed"] . " - " . $team["team_name"] . '</option>';
					}
					echo '</select></div>';
					echo '</div>';
				}

				$fecesCount += 1;
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


		//functions handling feces cup bracket updates
		function buildFecesArray() {
			let newFecesBracket = {};

			let week = $(".week-id").attr('id');

			let idxAdjust = 0;

			if (week == 12) {
				idxAdjust = 1;
			}
			else if (week == 13) {
				idxAdjust = 3;
			}
			else if (week == 14) {
				idxAdjust = 5;
			}
			else if (week == 15) {
				idxAdjust = 6;
			}
			else if (week == 16) {
				idxAdjust = 7;
			}

			$(".feces-matchup").each((idx) => {
				console.log('idx: ' + idx)
				let matchupStart = idx *2;
				let team1id = `#feces${matchupStart}`;
				let team2id = `#feces${matchupStart+1}`;

				let team1val = $(team1id).find(":selected").val();
				let team2val = $(team2id).find(":selected").val();

				console.log(team1val,team2val);

				let matchup_id = Number(idx) + Number(idxAdjust);

				//create an object to store this matchup
				let matchupObj = {
					matchup_id: Number(matchup_id),
					team1: Number(team1val),
					team2: Number(team2val),
				}

				console.log(matchupObj);
				newFecesBracket['matchup' + idx] = matchupObj;

			});

			console.log(newFecesBracket);
			return newFecesBracket;
		}

		// handling the feces-edit-form submit button
		$("#feces-edit-form").submit(function(event){
			event.preventDefault();

			let fecesArray = buildFecesArray();

			if (fecesArray) {
				$.post("<?=site_url()?>/waxtourney/edit_feces_bracket",
					fecesArray,
					"json"
				).done(()=> {
					$("#alert-message").html('<h3 style="text-align:center;margin-bottom: 10px;">Changes were successfully made.</h3><a href="<?=site_url()?>/waxtourney/edit_brackets?b=feces&week=<?=$week?>"><button class="site-btn">OK</button></a>');
					$("#alert-modal").css("display","flex");
				}).fail(()=>{
					$("#alert-message").html('<h3 style="text-align:center;color: red; margin-bottom: 10px;">Something went wrong.</h3><a href="<?=site_url()?>/waxtourney/edit_brackets?b=feces&week=<?=$week?>"><button class="site-btn">Try Again</button></a>');
					$("#alert-modal").css("display","flex");
				}); //post end
			} //if (teamSeeds) end

		}); //submit end






		//functions handling consolation bracket updates
		function buildConsArray() {
			let newConsBracket = {};

			let week = $(".week-id").attr('id');

			let idxAdjust = 0;


			if (week == 15) {
				idxAdjust = 1;
			}
			else if (week == 16) {
				idxAdjust = 3;
			}
			else if (week == 17) {
				idxAdjust = 5;
			}

			$(".cons-matchup").each((idx) => {
				console.log('idx: ' + idx)
				let matchupStart = idx *2;
				let team1id = `#cons${matchupStart}`;
				let team2id = `#cons${matchupStart+1}`;

				let team1val = $(team1id).find(":selected").val();
				let team2val = $(team2id).find(":selected").val();

				console.log(team1val,team2val);

				let matchup_id = Number(idx) + Number(idxAdjust);

				//create an object to store this matchup
				let matchupObj = {
					matchup_id: Number(matchup_id),
					team1: Number(team1val),
					team2: Number(team2val),
				}

				console.log(matchupObj);
				newConsBracket['matchup' + idx] = matchupObj;

			});

			console.log(newConsBracket);
			return newConsBracket;
		}

		// handling the cons-edit-form submit button
		$("#cons-edit-form").submit(function(event){
			event.preventDefault();

			let consArray = buildConsArray();
			// console.log(teamSeeds);

			if (consArray) {
				$.post("<?=site_url()?>/waxtourney/edit_cons_bracket",
					consArray,
					"json"
				).done(()=> {
					$("#alert-message").html('<h3 style="text-align:center;margin-bottom: 10px;">Changes were successfully made.</h3><a href="<?=site_url()?>/waxtourney/edit_brackets?b=cons&week=<?=$week?>"><button class="site-btn">OK</button></a>');
					$("#alert-modal").css("display","flex");
				}).fail(()=>{
					$("#alert-message").html('<h3 style="text-align:center;color: red; margin-bottom: 10px;">Something went wrong.</h3><a href="<?=site_url()?>/waxtourney/edit_brackets?b=cons&week=<?=$week?>"><button class="site-btn">Try Again</button></a>');
					$("#alert-modal").css("display","flex");
				}); //post end
			} //if (teamSeeds) end

		}); //submit end





		//functions handling championship bracket updates
		function buildChampArray() {
			let newChampBracket = {};

			let week = $(".week-id").attr('id');

			let idxAdjust = 0;

			if (week == 12) {
				idxAdjust = 1;
			}
			else if (week == 13) {
				idxAdjust = 5;
			}
			else if (week == 14) {
				idxAdjust = 9;
			}
			else if (week == 15) {
				idxAdjust = 12;
			}
			else if (week == 16) {
				idxAdjust = 14;
			}

			$(".champ-matchup").each((idx) => {
				console.log('idx: ' + idx)
				let matchupStart = idx *2;
				let team1id = `#champ${matchupStart}`;
				let team2id = `#champ${matchupStart+1}`;

				let team1val = $(team1id).find(":selected").val();
				let team2val = $(team2id).find(":selected").val();

				console.log(team1val,team2val);

				let matchup_id = Number(idx) + Number(idxAdjust);

				//create an object to store this matchup
				let matchupObj = {
					matchup_id: Number(matchup_id),
					team1: Number(team1val),
					team2: Number(team2val),
				}

				console.log(matchupObj);
				newChampBracket['matchup' + idx] = matchupObj;

			});

			console.log(newChampBracket);
			return newChampBracket;
		}

		// handling the champ-edit-form submit button
		$("#champ-edit-form").submit(function(event){
			event.preventDefault();

			let champArray = buildChampArray();
			// console.log(teamSeeds);

			if (champArray) {
				$.post("<?=site_url()?>/waxtourney/edit_champ_bracket",
					champArray,
					"json"
				).done(()=> {
					$("#alert-message").html('<h3 style="text-align:center;margin-bottom: 10px;">Changes were successfully made.</h3><a href="<?=site_url()?>/waxtourney/edit_brackets?b=champ&week=<?=$week?>"><button class="site-btn">OK</button></a>');
					$("#alert-modal").css("display","flex");
				}).fail(()=>{
					$("#alert-message").html('<h3 style="text-align:center;color: red; margin-bottom: 10px;">Something went wrong.</h3><a href="<?=site_url()?>/waxtourney/edit_brackets?b=champ&week=<?=$week?>"><button class="site-btn">Try Again</button></a>');
					$("#alert-modal").css("display","flex");
				}); //post end
			} //if (teamSeeds) end

		}); //submit end

	}); //document.ready end

</script>
