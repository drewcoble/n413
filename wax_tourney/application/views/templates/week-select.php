<div class="tourney-week">
<?php
	if ($this_week > 12) {
		echo '<div class="left-arrow"><a href="' . site_url() . '/waxtourney/champ?week=' . ($this_week-1) . '"><i class="fas fa-caret-left"></i></a></div>';
	}
	else {
		echo '<div class="left-arrow"></div>';
	}
	?>

<h4>Week <?=$this_week?></h4>

	<?php
	if ($this_week < 16) {
		echo '<div class="right-arrow"><a href="' . site_url() . '/waxtourney/champ?week=' . ($this_week+1) . '"><i class="fas fa-caret-right"></i></a></div>';
	}
	else {
		echo '<div class="right-arrow"></div>';
	}
?>
</div>
