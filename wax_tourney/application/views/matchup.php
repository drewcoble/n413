<h3 class="page-title">Matchup Details</h3>

<div class="matchup-details">
	<div class="matchup-team-details">
		<div class="team-header">

			<img src="<?=base_url()?>assets/images/fantasy_team_logos/<?=$t1["team_image"]?>" alt="">

			<div class="team-info">
				<h3><?= $t1["team_name"] ?></h3>
				<div class="team-subinfo">
					Seed: <?= $t1["team_seed"] ?>
					&nbsp;|&nbsp;Points: <?= $t1["total_points"] ?>
				</div>
			</div>

		</div> <!-- END of team-header div -->

<?php
$team_positions = array("qb","rb1","rb2","wr1","wr2","te");
?>

<div class="team-roster">
	<?//= $team["players"];?>
	<div class="player-row">

		<div class="player-details">
			<img src="<?=base_url()?>/assets/images/players/<?= $t1_qb["image"]; ?>" class="player-img" >

			<div class="player-info">
				<p><?= $t1_qb["team"]; ?> | QB</p>
				<h4><?= $t1_qb["name"]; ?></h4>
			</div>
		</div>
	</div>

	<div class="player-row">

		<div class="player-details">
			<img src="<?=base_url()?>/assets/images/players/<?= $t1_rb1["image"]; ?>" class="player-img" >

			<div class="player-info">
				<p><?= $t1_rb1["team"]; ?> | RB</p>
				<h4><?= $t1_rb1["name"]; ?></h4>
			</div>
		</div>
	</div>

	<div class="player-row">

		<div class="player-details">
			<img src="<?=base_url()?>/assets/images/players/<?= $t1_rb2["image"]; ?>" class="player-img" >

			<div class="player-info">
				<p><?= $t1_rb2["team"]; ?> | RB</p>
				<h4><?= $t1_rb2["name"]; ?></h4>
			</div>
		</div>
	</div>

	<div class="player-row">

		<div class="player-details">
			<img src="<?=base_url()?>/assets/images/players/<?= $t1_wr1["image"]; ?>" class="player-img" >

			<div class="player-info">
				<p><?= $t1_wr1["team"]; ?> | WR</p>
				<h4><?= $t1_wr1["name"]; ?></h4>
			</div>
		</div>
	</div>

	<div class="player-row">

		<div class="player-details">
			<img src="<?=base_url()?>/assets/images/players/<?= $t1_wr2["image"]; ?>" class="player-img" >

			<div class="player-info">
				<p><?= $t1_wr2["team"]; ?> | WR</p>
				<h4><?= $t1_wr2["name"]; ?></h4>
			</div>
		</div>
	</div>

	<div class="player-row">

		<div class="player-details">
			<img src="<?=base_url()?>/assets/images/players/<?= $t1_te["image"]; ?>" class="player-img" >

			<div class="player-info">
				<p><?= $t1_te["team"]; ?> | TE</p>
				<h4><?= $t1_te["name"]; ?></h4>
			</div>
		</div>
	</div>
</div> <!-- END of team-roster div -->

</div> <!-- END of team-details div -->
	<div class="matchup-positions">
		<div class="position vs-pos">
			vs.
		</div>
		<div class="position qb-pos">
			QB
		</div>
		<div class="position rb-pos">
			RB
		</div>
		<div class="position rb-pos">
			RB
		</div>
		<div class="position wr-pos">
			WR
		</div>
		<div class="position wr-pos">
			WR
		</div>
		<div class="position te-pos">
			TE
		</div>
	</div>
	<div class="matchup-team-details">
		<div class="team-header">

			<img src="<?=base_url()?>assets/images/fantasy_team_logos/<?=$t2["team_image"]?>" alt="">

			<div class="team-info">
				<h3><?= $t2["team_name"] ?></h3>
				<div class="team-subinfo">
					Seed: <?= $t2["team_seed"] ?>
					&nbsp;|&nbsp;Points: <?= $t2["total_points"] ?>
				</div>
			</div>

		</div> <!-- END of team-header div -->

		<?php
		$team_positions = array("qb","rb1","rb2","wr1","wr2","te");
		?>

		<div class="team-roster">
			<?//= $team["players"];?>
			<div class="player-row">

				<div class="player-details">
					<img src="<?=base_url()?>/assets/images/players/<?= $t2_qb["image"]; ?>" class="player-img" >

					<div class="player-info">
						<p><?= $t2_qb["team"]; ?> | QB</p>
						<h4><?= $t2_qb["name"]; ?></h4>
					</div>
				</div>
			</div>

			<div class="player-row">

				<div class="player-details">
					<img src="<?=base_url()?>/assets/images/players/<?= $t2_rb1["image"]; ?>" class="player-img" >

					<div class="player-info">
						<p><?= $t2_rb1["team"]; ?> | RB</p>
						<h4><?= $t2_rb1["name"]; ?></h4>
					</div>
				</div>
			</div>

			<div class="player-row">

				<div class="player-details">
					<img src="<?=base_url()?>/assets/images/players/<?= $t2_rb2["image"]; ?>" class="player-img" >

					<div class="player-info">
						<p><?= $t2_rb2["team"]; ?> | RB</p>
						<h4><?= $t2_rb2["name"]; ?></h4>
					</div>
				</div>
			</div>

			<div class="player-row">

				<div class="player-details">
					<img src="<?=base_url()?>/assets/images/players/<?= $t2_wr1["image"]; ?>" class="player-img" >

					<div class="player-info">
						<p><?= $t2_wr1["team"]; ?> | WR</p>
						<h4><?= $t2_wr1["name"]; ?></h4>
					</div>
				</div>
			</div>

			<div class="player-row">

				<div class="player-details">
					<img src="<?=base_url()?>/assets/images/players/<?= $t2_wr2["image"]; ?>" class="player-img" >

					<div class="player-info">
						<p><?= $t2_wr2["team"]; ?> | WR</p>
						<h4><?= $t2_wr2["name"]; ?></h4>
					</div>
				</div>
			</div>

			<div class="player-row">

				<div class="player-details">
					<img src="<?=base_url()?>/assets/images/players/<?= $t2_te["image"]; ?>" class="player-img" >

					<div class="player-info">
						<p><?= $t2_te["team"]; ?> | TE</p>
						<h4><?= $t2_te["name"]; ?></h4>
					</div>
				</div>
			</div>
		</div> <!-- END of team-roster div -->

	</div> <!-- END of team-details div -->
</div>

</body>
<script>
	$(document).ready(function(){
		document.title = page_title;
		navbar_update(this_page);
	}); //ready
</script>
</html>


