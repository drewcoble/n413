<h3 class="page-title">Team Details</h3>

<div class="team-details">
	<div class="team-header">

		<img src="<?=base_url()?>assets/images/fantasy_team_logos/<?=$teams[0]["team_image"]?>" alt="">

		<div class="team-info">
			<h3><?= $teams[0]["team_name"] ?></h3>
			<div class="team-subinfo">
				Seed: <?= $teams[0]["team_seed"] ?>
				&nbsp;|&nbsp;Points: <?= $teams[0]["total_points"] ?>
			</div>
		</div>

	</div> <!-- END of team-header div -->

	<div class="team-roster">
		<div class="player-row">
			<div class="position qb-pos">
				QB
			</div>
			<div class="player-details">
				<img src="<?=base_url()?>/assets/images/players/lamar-jackson.png" class="player-img" >

				<div class="player-info">
					<p>BAL | QB</p>
					<h4>Lamar Jackson</h4>
				</div>
			</div>
		</div>

		<div class="player-row">
			<div class="position rb-pos">
				RB
			</div>
			<div class="player-details">
				<img src="<?=base_url()?>/assets/images/players/dalvin-cook.png" class="player-img" >

				<div class="player-info">
					<p>MIN | RB</p>
					<h4>Dalvin Cook</h4>
				</div>
			</div>
		</div>

		<div class="player-row">
			<div class="position rb-pos">
				RB
			</div>
			<div class="player-details">
				<img src="<?=base_url()?>/assets/images/players/austin-ekeler.png" class="player-img" >

				<div class="player-info">
					<p>LAC | RB</p>
					<h4>Austin Ekeler</h4>
				</div>
			</div>
		</div>

		<div class="player-row">
			<div class="position wr-pos">
				WR
			</div>
			<div class="player-details">
				<img src="<?=base_url()?>/assets/images/players/keenan-allen.png" class="player-img" >

				<div class="player-info">
					<p>LAC | WR</p>
					<h4>Keenan Allen</h4>
				</div>
			</div>
		</div>

		<div class="player-row">
			<div class="position wr-pos">
				WR
			</div>
			<div class="player-details">
				<img src="<?=base_url()?>/assets/images/players/aj-brown.png" class="player-img" >

				<div class="player-info">
					<p>TEN | WR</p>
					<h4>AJ Brown</h4>
				</div>
			</div>
		</div>

		<div class="player-row">
			<div class="position te-pos">
				TE
			</div>
			<div class="player-details">
				<img src="<?=base_url()?>/assets/images/players/travis-kelce.png" class="player-img" >

				<div class="player-info">
					<p>KC | TE</p>
					<h4>Travis Kelce</h4>
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


