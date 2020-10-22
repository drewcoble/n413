<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
		<title><?=$page_title?></title>

		<link rel="stylesheet" href="https://use.typekit.net/viz3trp.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
		<link href="<?=base_url()?>assets/css/styles.css" rel="stylesheet">

		<script src="<?=base_url()?>assets/js/jquery-3.4.1.min.js" type="application/javascript"></script>

		<script>
			var this_page = "<?=$this_page?>";
			var page_title = "<?=$page_title?>";
		</script>
	</head>
	<body>
	<div class="nav-top">

	<?php
		if ($this->session->role == 1) {
			echo '<div class="nav-icon nav-left" ><i class="fas fa-pen-square" ></i ><span style = "margin-left: 5px" > Edit</span ></div >';
		}
		else {
			echo '<div class="nav-icon nav-left" ></div >';

		}
	?>
		<h1>WAX Tourney</h1>
		<a href="<?=site_url()?>/auth" class="nav-icon nav-right" id="login"><span>Log In</span><i class="fas fa-user-circle"></i></a>
	</div>
	<div class="site-content">
