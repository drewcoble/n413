	<div id="form-content">

		<div id="headline" class="row  mt-5">
			<div class="col-12 text-center">
				<h3 class="page-title">Log In</h3>
			</div> <!-- /col-12 -->
		</div> <!-- /row -->

		<form id="login-form" class="login-form" method="POST" action="">
			<div class="login-row">
				<span>Username:</span><input type="text" id="username" name="username" class="form-control" value="" placeholder="Enter Username" required/>
			</div>
			<div class="login-row">
				<span>Password:</span><input type="password" id="password" name="password" class="form-control" value="" placeholder="Enter Password" required/>
			</div>
			<button type="submit" id="submit" class="site-btn">Submit</button>

		</form>
		<br>
		<p>Don't have an account yet?</p>
		<p><a href="<?=site_url()?>/auth/register">Sign Up here.</a></p>
	</div>

	</body>
	<script>
		$(document).ready(function(){
			document.title = page_title;
			navbar_update("");

			$("#login-form").submit(function(event){
				event.preventDefault();

				$.post("<?=site_url()?>/auth/authenticate",
					$("#login-form").serialize(),
					function(data){
						console.log(data);
						//handle messages here
						if(data.status){
							console.log(data);
							$("#form-content").html(data.success);
							right_navbar_update(data.role);
						}else{
							console.log(data.status);
							$("#form-content").html(data.failed);
						}
					},
					"json"
				); //post
			}); //submit

		}); //document.ready

	</script>
	</html>
