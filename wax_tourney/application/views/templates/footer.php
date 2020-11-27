</div> <!-- close site-content div -->

<nav class="nav-bottom">
<!--	<a href="--><?//=site_url()?><!--" class="nav-icon current"><i class="fas fa-table"></i></a>-->
	<a id="heatcheck" href="<?=site_url()?>/waxtourney/heatcheck" class="nav-icon current"><i class="fas fa-fire"></i></a>
	<a id="champ" href="<?=site_url()?>/waxtourney/champ?week=12" class="nav-icon"><i class="fas fa-trophy"></i></a>
	<a id="consolation" href="<?=site_url()?>/waxtourney/consolation?week=15" class="nav-icon"><i class="fas fa-award"></i></a>
	<a id="feces" href="<?=site_url()?>/waxtourney/feces?week=12" class="nav-icon"><i class="fas fa-poop"></i></a>
</nav>

<script>
	function navbar_update(current_page) {
		$("#heatcheck").removeClass("current");
		$("#champ").removeClass("current");
		$("#consolation").removeClass("current");
		$("#feces").removeClass("current");

		if (current_page != "") {
			$(`#${current_page}`).addClass("current");
		}


	}
</script>
