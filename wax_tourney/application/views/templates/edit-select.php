<h3 class="page-title">Menu</h3>
<div class="edit-menu">

	<a class="menu-option menu-dropdown" href="<?=site_url()?>/waxtourney/edit_seeds">Seeding</a>

	<div class="menu-dropdown">
		<div id="select-bracket-week" class="menu-option">Brackets</div>
		<div id="bracket-week-list" class="week-list">
			<h5>Championship</h5>
			<a href="<?=site_url()?>/waxtourney/edit_brackets?b=champ&week=12">Week 12</a>
			<a href="<?=site_url()?>/waxtourney/edit_brackets?b=champ&week=13">Week 13</a>
			<a href="<?=site_url()?>/waxtourney/edit_brackets?b=champ&week=14">Week 14</a>
			<a href="<?=site_url()?>/waxtourney/edit_brackets?b=champ&week=15">Week 15</a>
			<a href="<?=site_url()?>/waxtourney/edit_brackets?b=champ&week=16">Week 16</a>
			<h5>Consolation</h5>
			<a href="<?=site_url()?>/waxtourney/edit_brackets?b=cons&week=15">Week 15</a>
			<a href="<?=site_url()?>/waxtourney/edit_brackets?b=cons&week=16">Week 16</a>
			<a href="<?=site_url()?>/waxtourney/edit_brackets?b=cons&week=17">Week 17</a>
			<h5>Feces Cup&reg;</h5>
			<a href="<?=site_url()?>/waxtourney/edit_brackets?b=feces&week=12">Week 12</a>
			<a href="<?=site_url()?>/waxtourney/edit_brackets?b=feces&week=13">Week 13</a>
			<a href="<?=site_url()?>/waxtourney/edit_brackets?b=feces&week=14">Week 14</a>
			<a href="<?=site_url()?>/waxtourney/edit_brackets?b=feces&week=15">Week 15</a>
			<a href="<?=site_url()?>/waxtourney/edit_brackets?b=feces&week=16">Week 16</a>
		</div>
	</div>


	<div class="menu-dropdown">
		<div id="select-scoring-week" class="menu-option">Scores</div>
		<div id="scoring-week-list" class="week-list">
			<a href="<?=site_url()?>/waxtourney/edit_scores?week=12">Week 12</a>
			<a href="<?=site_url()?>/waxtourney/edit_scores?week=13">Week 13</a>
			<a href="<?=site_url()?>/waxtourney/edit_scores?week=14">Week 14</a>
			<a href="<?=site_url()?>/waxtourney/edit_scores?week=15">Week 15</a>
			<a href="<?=site_url()?>/waxtourney/edit_scores?week=16">Week 16</a>
			<a href="<?=site_url()?>/waxtourney/edit_scores?week=17">Week 17</a>
		</div>
	</div>

</div>

<script>
	let scoringFlag = 0;
	$("#select-scoring-week").click(()=>{
		if (scoringFlag == 0) {
			$("#scoring-week-list").css("display", "flex");
			scoringFlag = 1
		}
		else {
			$("#scoring-week-list").css("display", "none");
			scoringFlag = 0
		}
	})

	let bracketFlag = 0;
	$("#select-bracket-week").click(()=>{
		if (bracketFlag == 0) {
			$("#bracket-week-list").css("display", "flex");
			bracketFlag = 1
		}
		else {
			$("#bracket-week-list").css("display", "none");
			bracketFlag = 0
		}
	})
</script>
