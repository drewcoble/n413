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
			<div class="position">
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
			<div class="position">
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
			<div class="position">
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
			<div class="position">
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
			<div class="position">
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


