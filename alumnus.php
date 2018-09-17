<!-- �Aditya Thakur 
  contact: https://www.linkedin.com/in/aditya532/
 ALL RIGHTS RESERVED
 -->
<?php 
	include("header.php");
?>

<div class="container">
	<div class="row">
		<div class="col-12 ">
			<h1>Our Distinguished Alumnus</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-12 col-sm-6 col-md-6 col-lg-6">
			<!--PHP code to fetch faculty information-->
			<?php
				$query= "SELECT * FROM `alumnus` ORDER BY `alumni_id`";
				$result = $mysqli->query($query);
				while($user = $result->fetch_assoc()){
					echo '<div class="card" >
							<img class="img-responsive pro-img" style="width:100%; border-radius: 10px;"src="layout/images/'.$user["a_img"].'" width="130" height="130" />
							<br>
							<span class="h1 text-primary text-center">'.$user["a_name"].'</span>
							<br>
							<span class="h4"><br>'.$user["a_desc"].'</span><br>
						  </div>';
				}	
			?>
		</div>

	</div>
</div>

<?php		  
include("footer.php");
?>

