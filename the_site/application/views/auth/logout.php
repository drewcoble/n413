<div class="container-fluid">
	<div id="headline" class="row mt-5">
		<div class="col-12 text-center">
			<h2>LIT FANTASY SITE LOG OUT</h2>
		</div> <!-- /col-12 -->
	</div> <!-- /row -->
	<div class="row mt-5">
		<div class="col-4"></div>  <!-- spacer -->
		<div class="col-4 text-center">
			<h3>You are now Logged Out.</h3>
			<a href="<?=site_url()?>/auth"><button class="btn btn-primary mt-5">Log In</button></a>
		</div> <!-- /.col-4 -->
	</div> <!-- /.row -->
</div>  <!-- /.container-fluid -->
</body>
<script>
	$(document).ready(function(){
		document.title = page_title;
		navbar_update(this_page);
	}); //document.ready
</script>
</html>
