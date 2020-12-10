<div class="container-fluid">
	<div id="headline" class="row  mt-5">
		<div class="col-12 text-center">
			<h2 class="page-title">Register</h2>
		</div> <!-- /col-12 -->
	</div> <!-- /row -->


	<form id="register_form" method="POST" action="">
		<div class="row mt-5">
			<div class="col-4"></div>  <!-- spacer -->
			<div id="form-container" class="col-4">
				<div class="register-row">
					<span>User Name: </span>
					<input type="text" id="username" name="username" class="form-control" value="" placeholder="Enter Username" required/>
				</div>
				<div id="username_length" class="text-danger"></div>
				<div id="username_exists" class="text-danger"></div>
				<div class="register-row">
					<span>E-mail: </span>
					<input type="email" id="email" name="email" class="form-control" value="" placeholder="Enter E-mail" required/>
				</div>
				<div id="email_exists" class="text-danger"></div>
				<div id="email_validate" class="text-danger"></div>
				<div class="register-row">
					<span>Password: </span>
					<input type="password" id="password" name="password" class="form-control" value="" placeholder="Enter Password" required/>
				</div>
				<div id="password_length" class="text-danger"></div>

			</div>  <!-- /#form-container -->
		</div>  <!-- /.row -->
		<button type="submit" id="submit" class="site-btn">Submit</button>
	</form>
</div>
	</body>
	<script>
		$(document).ready(function(){
			document.title = page_title;
			navbar_update(this_page);

			$("#register_form").submit(function(event){
				event.preventDefault();
				$.post( "<?=site_url()?>/auth/new_account",
					$("#register_form").serialize(),
					function(data){
						if(data.status){
							$("#form-container").html(data.success);
							right_navbar_update();
						}else{
							if(data.errors){
								// handle error messages here
								for (var key in data){
									switch(key){
										case "status":
										case "errors":
										case "success":
										case "failed":
											break;
										default: $("#"+key).html(data[key]);
											$("#"+key).css("display","block");
											break;
									} //switch
								} //for-in
							}else{
								$("#form-container").html(data.failed);  //registration failed, but without errors
							} //if data.errors
						} //if data.status
					},  //callback function
					"json"
				); //post
			}); //submit
		}); //document.ready

		function right_navbar_update(){
			var html = '<li id="logout_item" class="nav-item">'+
				'<a id="logout_link" class="nav-link" href="<?=site_url()?>/auth/logout">Log-Out</a>'+
				'</li>';

			$("#right_navbar").html(html);
		}
	</script>
	</html>
