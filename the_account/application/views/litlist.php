	<style>
		.cursor-pointer {cursor:pointer;}
	</style>
	<div class="container-fluid">
		<div id-"headline" class="row mt-5">
		<div class="col-12 text-center">
			<h2>LIT FANTASY LIST</h2>
		</div> <!-- /.col-12 -->
	</div> <!-- /.row -->
		<?php
			foreach($records as $record){
				echo '
					<div class="row record-item mt-5 cursor-pointer" data-id="'.$record["id"].'" data-item="'.$record["name"].'">
						<div class="col-2"></div>  <!-- spacer -->
						<div class="col-2" style="background-color: lightgray; border-radius: 12px"><img src="'.base_url().'assets/images/'.$record["image"].'" width="100%"/></div>
						<div class="col-7"><b>'.$record["name"].'</b> '.$record["description"].'</div>
					</div>  <!-- /.row -->';
			} //foreach
		?>
	</div> <!-- /.container-fluid -->
	</body>
	<script>

		$(document).ready(function(){
			document.title = page_title;
			navbar_update(this_page);

			$(".record-item").on("click", function(){
				var id = $(this).data('id');
				show_detail(id);
			}); //on()
		}); //document.ready

		function show_detail(id){
			window.location.assign("<?=site_url()?>/litjams/detail/"+id);
		}
	</script>
</html>
