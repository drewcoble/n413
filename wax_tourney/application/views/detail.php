<div class="container-fluid">
	<div id-"headline" class="row mt-5">
	<div class="col-12 text-center">
		<?php
		if($row){
			echo '<h1>'.$row["name"].'</h1>';
		}else{
			echo '<h2>There has been a database error.</h2>';
		}
		?>
	</div> <!-- /.col-12 -->
</div> <!-- /.row -->
<?php
if($row){
	echo '      
                <div class="row mt-3">
                    <div class="col-2"></div>  <!-- spacer -->
                    <div class="col-3" style="background-color: lightgray; border-radius: 12px"><img src="'.base_url().'assets/images/'.$row["image"].'" width="100%"/></div>
                    <div class="col-5">'.$row["description"].'</div>
                </div>  <!-- /.row -->';
}
?>
<div class="row mt-4 mb-5">
	<div class="col-12 text-center">
		<a href="<?=site_url()?>/litjams/litlist"><button class="btn" style="color: white;background-color: #0C9964;">Back to The List</button></a>
	</div> <!-- /.col-12 -->
</div> <!-- /.row -->
</div> <!-- /.container-fluid -->
</body>
</html>
