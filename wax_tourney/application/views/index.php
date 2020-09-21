<div class="container-fluid">
	<div id="headline" class="row mt-3">
		<div class="col-12 text-center">
			<h1>LIT FANTASY SITE</h1>
		</div> <!-- /col-12 -->
	</div> <!-- /row -->
	<div class="row">
		<div id="subtitle" class="col-12 text-center">
			<h3>Fantasy Football List</h3>
		</div> <!-- /col-12 -->
	</div> <!-- /row -->
	<div id="content" class="row">
		<div class="col-1"></div><!-- spacer -->
		<div class="col-3 mt-5 text-center"> <!-- navigation -->
			<a href="<?=site_url()?>/litjams/litlist" ><h4>Top Ten List</h4></a>
			<a href="<?=site_url()?>/litjams/litform" ><h4>Contact Us</h4></a>
		</div>
		<div class="col-4 text-center"> <!-- image -->
			<a href="<?=site_url()?>/litjams/detail/<?= $row["id"]?>">
				<img style="background-color: lightgray; border-radius: 12px;"src="<?=base_url()?>assets/images/<?=$row['image']?>" width="100%"; />
			</a>
		</div> <!-- /image -->
		<div class="col-4 mt-5 text-center"> <!-- caption -->
			<a href="<?=site_url()?>/litjams/detail/<?= $row["id"]?>">
				<h2><?=$row["name"]?></h2>
				<h4><?=$row["position"]?></h4>
			</a>
		</div>
	</div> <!-- /row -->
</div> <!-- /container-fluid -->
</body>
<script>
	$(document).ready(function(){
		document.title = page_title;
		navbar_update(this_page);
	}); //ready
</script>
</html>
