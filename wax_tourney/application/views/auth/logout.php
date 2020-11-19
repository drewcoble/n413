
<div class="logout-screen-container" style="text-align: center">

</div>
</div>
</body>
<script>
	$(document).ready(function(){
		document.title = page_title;
		navbar_update("");

		//$("#nav-right").html(`<a href="<?//=site_url()?>///auth/login" class="nav-icon" id="login"><span>Log In</span><i class="fas fa-user-circle"></i></a>`);

		$("#alert-message").html('<h3 style="margin-bottom: 10px;">You are now Logged Out.</h3><a href="<?=site_url()?>/waxtourney/index"><button class="site-btn">OK</button></a>');
		$("#alert-modal").css("display","flex");

		// $("#alert-modal").click(()=>{
		// 	$("#alert-modal").css("display","none");
		// })
	}); //document.ready
</script>
</html>
