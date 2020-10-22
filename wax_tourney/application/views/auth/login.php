
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
		<button type="submit" id="submit" class="submit-btn">Submit</button>


	</form>

	</body>
	<script>
		$(document).ready(function(){
			document.title = page_title;
			// navbar_update(this_page);

			$("#login_form").submit(function(event){
				event.preventDefault();
				$.post("<?=site_url()?>/auth/authenticate",
					$("#login_form").serialize(),
					function(data){
						//handle messages here
						if(data.status){
							$("#form-container").html(data.success);
							right_navbar_update(data.role);
						}else{
							$("#form-container").html(data.failed);
						}
					},
					"json"
				); //post
			}); //submit

		}); //document.ready

		function right_navbar_update(role){
			var html = "";
			if (role > 0) {
				html =  '<li id="messages_item" class="nav-item">'+
					'<a id="messages_link" class="nav-link" href="<?=site_url()?>/litjams/messages">Messages</a>'+
					'</li>';
			}

			html += '<li id="logout_item" class="nav-item">'+
				'<a id="logout_link" class="nav-link" href="<?=site_url()?>/auth/logout">Log-Out</a>'+
				'</li>';
			$("#right_navbar").html(html);
		}

	</script>
	</html>
