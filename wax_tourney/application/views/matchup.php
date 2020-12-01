<h3 class="page-title">Matchup Details</h3>

<?php
	$team_positions = array("qb","rb1","rb2","wr1","wr2","te");

	$this_week = $this->input->get('week', TRUE);
?>

<div class="matchup-details">
	<div class="matchup-team-details">
		<div class="team-header">

			<div class="left-team">
				<div class="team-seed"><?= $t1["team_seed"] ?></div>
				<h3><?= $t1["team_name"] ?></h3>

				<div class="header-bottom">
					<img src="<?=base_url()?>assets/images/fantasy_team_logos/<?=$t1["team_image"]?>" alt="">
					<h2><?= $t1["wk".$this_week."_points"] ?></h2>
				</div>
			</div>

			<div class="position vs-pos">
				vs.
			</div>

			<div class="right-team">
				<div class="team-seed"><?= $t2["team_seed"] ?></div>
				<h3><?= $t2["team_name"] ?></h3>

				<div class="header-bottom">
					<h2><?= $t2["wk".$this_week."_points"] ?></h2>
					<img src="<?=base_url()?>assets/images/fantasy_team_logos/<?=$t2["team_image"]?>" alt="">
				</div>
			</div>

		</div> <!-- END of team-header div -->


		<div class="team-roster">

			<div class="player-row">

				<div class="player-details">
					<div class="player-info">
						<img src="<?=base_url()?>/assets/images/players/<?= $t1_qb["image"]; ?>" class="player-img" >

						<div class="info-side">
							<p><?= $t1_qb["team"]; ?> | QB</p>
							<h4 class="player-points">0.0</h4>
						</div>
					</div>
					<h4 class="player-name"><?= $t1_qb["name"]; ?></h4>
				</div>

				<div class="position qb-pos">
					QB
				</div>

				<div class="player-details">
					<div class="player-info">
						<img src="<?=base_url()?>/assets/images/players/<?= $t2_qb["image"]; ?>" class="player-img" >
						<div class="info-side">
							<p><?= $t2_qb["team"]; ?> | QB</p>
							<h4 class="player-points">0.0</h4>
						</div>
					</div>
					<h4 class="player-name"><?= $t2_qb["name"]; ?></h4>
				</div>
			</div>

			<div class="player-row">

				<div class="player-details">
					<div class="player-info">
						<img src="<?=base_url()?>/assets/images/players/<?= $t1_rb1["image"]; ?>" class="player-img" >
						<div class="info-side">
							<p><?= $t1_rb1["team"]; ?> | RB</p>
							<h4 class="player-points">0.0</h4>
						</div>
					</div>
					<h4 class="player-name"><?= $t1_rb1["name"]; ?></h4>
				</div>

				<div class="position rb-pos">
					RB
				</div>

				<div class="player-details">
					<div class="player-info">
						<img src="<?=base_url()?>/assets/images/players/<?= $t2_rb1["image"]; ?>" class="player-img" >
						<div class="info-side">
							<p><?= $t2_rb1["team"]; ?> | RB</p>
							<h4 class="player-points">0.0</h4>
						</div>
					</div>
					<h4 class="player-name"><?= $t2_rb1["name"]; ?></h4>
				</div>
			</div>

			<div class="player-row">

				<div class="player-details">
					<div class="player-info">
						<img src="<?=base_url()?>/assets/images/players/<?= $t1_rb2["image"]; ?>" class="player-img" >
						<div class="info-side">
							<p><?= $t1_rb2["team"]; ?> | RB</p>
							<h4 class="player-points">0.0</h4>
						</div>
					</div>
					<h4 class="player-name"><?= $t1_rb2["name"]; ?></h4>
				</div>

				<div class="position rb-pos">
					RB
				</div>

				<div class="player-details">
					<div class="player-info">
						<img src="<?=base_url()?>/assets/images/players/<?= $t2_rb2["image"]; ?>" class="player-img" >
						<div class="info-side">
							<p><?= $t2_rb2["team"]; ?> | RB</p>
							<h4 class="player-points">0.0</h4>
						</div>					</div>
					<h4 class="player-name"><?= $t2_rb2["name"]; ?></h4>
				</div>
			</div>

			<div class="player-row">

				<div class="player-details">
					<div class="player-info">
						<img src="<?=base_url()?>/assets/images/players/<?= $t1_wr1["image"]; ?>" class="player-img" >
						<div class="info-side">
							<p><?= $t1_wr1["team"]; ?> | WR</p>
							<h4 class="player-points">0.0</h4>
						</div>
					</div>
					<h4 class="player-name"><?= $t1_wr1["name"]; ?></h4>
				</div>

				<div class="position wr-pos">
					WR
				</div>

				<div class="player-details">
					<div class="player-info">
						<img src="<?=base_url()?>/assets/images/players/<?= $t2_wr1["image"]; ?>" class="player-img" >
						<div class="info-side">
							<p><?= $t2_wr1["team"]; ?> | WR</p>
							<h4 class="player-points">0.0</h4>
						</div>
					</div>
					<h4 class="player-name"><?= $t2_wr1["name"]; ?></h4>
				</div>
			</div>

			<div class="player-row">

				<div class="player-details">
					<div class="player-info">
						<img src="<?=base_url()?>/assets/images/players/<?= $t1_wr2["image"]; ?>" class="player-img" >
						<div class="info-side">
							<p><?= $t1_wr2["team"]; ?> | WR</p>
							<h4 class="player-points">0.0</h4>
						</div>
					</div>
					<h4 class="player-name"><?= $t1_wr2["name"]; ?></h4>
				</div>

				<div class="position wr-pos">
					WR
				</div>

				<div class="player-details">
					<div class="player-info">
						<img src="<?=base_url()?>/assets/images/players/<?= $t2_wr2["image"]; ?>" class="player-img" >
						<div class="info-side">
							<p><?= $t2_wr2["team"]; ?> | WR</p>
							<h4 class="player-points">0.0</h4>
						</div>
					</div>
					<h4 class="player-name"><?= $t2_wr2["name"]; ?></h4>
				</div>

			</div>

			<div class="player-row">

				<div class="player-details">
					<div class="player-info">
						<img src="<?=base_url()?>/assets/images/players/<?= $t1_te["image"]; ?>" class="player-img" >
						<div class="info-side">
							<p><?= $t1_te["team"]; ?> | TE</p>
							<h4 class="player-points">0.0</h4>
						</div>
					</div>
					<h4 class="player-name"><?= $t1_te["name"]; ?></h4>
				</div>

				<div class="position te-pos">
					TE
				</div>

				<div class="player-details">
					<div class="player-info">
						<img src="<?=base_url()?>/assets/images/players/<?= $t2_te["image"]; ?>" class="player-img" >
						<div class="info-side">
							<p><?= $t2_te["team"]; ?> | TE</p>
							<h4 class="player-points">0.0</h4>
						</div>
					</div>
					<h4 class="player-name"><?= $t2_te["name"]; ?></h4>
				</div>

			</div>
		</div> <!-- END of team-roster div -->

	</div> <!-- END of team-details div -->

	<!--
		<div class="matchup-positions">






		</div>
	-->

</div>

</body>
<script>
	$(document).ready(function(){
		document.title = page_title;
		navbar_update(this_page);
	}); //ready
</script>
</html>


