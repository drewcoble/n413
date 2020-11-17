<h3 class="page-title">Team Details</h3>

<div class="team-details">
	<div class="team-header">

		<img src="<?=base_url()?>assets/images/fantasy_team_logos/<?=$team["team_image"]?>" alt="">

		<div class="team-info">
			<h3><?= $team["team_name"] ?></h3>
			<div class="team-subinfo">
				Seed: <?= $team["team_seed"] ?>
				&nbsp;|&nbsp;Points: <?= $team["total_points"] ?>
			</div>
		</div>

	</div> <!-- END of team-header div -->

	<?php
	$team_positions = array("qb","rb1","rb2","wr1","wr2","te");
	?>

	<div class="team-roster">
		<?//= $team["players"];?>
		<div class="player-row">
			<div class="position qb-pos">
				QB
			</div>
			<div class="player-details">
				<img src="<?=base_url()?>/assets/images/players/<?= $qb["image"]; ?>" class="player-img" >

				<div class="player-info">
					<p><?= $qb["team"]; ?> | QB</p>
					<h4><?= $qb["name"]; ?></h4>
				</div>
			</div>
		</div>

		<div class="player-row">
			<div class="position rb-pos">
				RB
			</div>
			<div class="player-details">
				<img src="<?=base_url()?>/assets/images/players/<?= $rb1["image"]; ?>" class="player-img" >

				<div class="player-info">
					<p><?= $rb1["team"]; ?> | RB</p>
					<h4><?= $rb1["name"]; ?></h4>
				</div>
			</div>
		</div>

		<div class="player-row">
			<div class="position rb-pos">
				RB
			</div>
			<div class="player-details">
				<img src="<?=base_url()?>/assets/images/players/<?= $rb2["image"]; ?>" class="player-img" >

				<div class="player-info">
					<p><?= $rb2["team"]; ?> | RB</p>
					<h4><?= $rb2["name"]; ?></h4>
				</div>
			</div>
		</div>

		<div class="player-row">
			<div class="position wr-pos">
				WR
			</div>
			<div class="player-details">
				<img src="<?=base_url()?>/assets/images/players/<?= $wr1["image"]; ?>" class="player-img" >

				<div class="player-info">
					<p><?= $wr1["team"]; ?> | WR</p>
					<h4><?= $wr1["name"]; ?></h4>
				</div>
			</div>
		</div>

		<div class="player-row">
			<div class="position wr-pos">
				WR
			</div>
			<div class="player-details">
				<img src="<?=base_url()?>/assets/images/players/<?= $wr2["image"]; ?>" class="player-img" >

				<div class="player-info">
					<p><?= $wr2["team"]; ?> | WR</p>
					<h4><?= $wr2["name"]; ?></h4>
				</div>
			</div>
		</div>

		<div class="player-row">
			<div class="position te-pos">
				TE
			</div>
			<div class="player-details">
				<img src="<?=base_url()?>/assets/images/players/<?= $te["image"]; ?>" class="player-img" >

				<div class="player-info">
					<p><?= $te["team"]; ?> | TE</p>
					<h4><?= $te["name"]; ?></h4>
				</div>
			</div>
		</div>
	</div> <!-- END of team-roster div -->

</div> <!-- END of team-details div -->


</body>
<script>
	$(document).ready(function(){
		document.title = page_title;
		navbar_update(this_page);
	}); //ready
</script>
</html>


