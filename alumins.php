<!-- �Aditya Thakur 
  contact: https://www.linkedin.com/in/aditya532/
 ALL RIGHTS RESERVED
 -->
<?php 
	include("header.php");
?>


<div class="container-fluid">
	<div class="row">
		<div class="col-12 col-md-12 col-lg-12">
			<h1>Our Distinguished Alumnus</h1>
		</div>
	</div>

	<div class="row">
		<div class=" col-12 col-lg-4 col-xl-4 card">
			<!--PHP code to fetch faculty information-->
			<?php
				$query= "SELECT * FROM `alumnus` ORDER BY `alumni_id`";
				$result = $mysqli->query($query);
				while($user = $result->fetch_assoc())
				echo '<div class="box" >
								<img class="img-responsive pull-right" src="layout/images/'.$user["a_img"].'" width="130" height="130" />
								<span class="h2">'.$user["a_name"].'</span><br/>
								<span class="h3"><strong>Description: </strong>'.$user["a_desc"].'</span><br>
							</div>
						</div>';
			?>
		</div>

		<div class=" col-12 col-lg-4 col-xl-4 card">
			<!--PHP code to fetch faculty information-->
			<?php
				$query= "SELECT * FROM `alumnus` ORDER BY `alumni_id`";
				$result = $mysqli->query($query);
				while($user = $result->fetch_assoc())
				echo '<div class="box" >
								<img class="img-responsive pull-right" src="layout/images/'.$user["a_img"].'" width="130" height="130" />
								<span class="h2">'.$user["a_name"].'</span><br/>
								<span class="h3"><strong>Description: </strong>'.$user["a_desc"].'</span><br>
							</div>
						</div>';
			?>
		</div>

		<div class=" col-12 col-lg-4 col-xl-4 card">
			<!--PHP code to fetch faculty information-->
			<?php
				$query= "SELECT * FROM `alumnus` ORDER BY `alumni_id`";
				$result = $mysqli->query($query);
				while($user = $result->fetch_assoc())
				echo '<div class="box" >
								<img class="img-responsive pull-right" src="layout/images/'.$user["a_img"].'" width="130" height="130" />
								<span class="h2">'.$user["a_name"].'</span><br/>
								<span class="h3"><strong>Description: </strong>'.$user["a_desc"].'</span><br>
							</div>
						</div>';
			?>
		</div>
	</div>


	<div class=" col-12 col-lg-4 col-xl-4 card">
		<!--PHP code to fetch faculty information-->
		<?php
				$query= "SELECT * FROM `alumnus` ORDER BY `alumni_id`";
				$result = $mysqli->query($query);
				while($user = $result->fetch_assoc())
				echo '<div class="box" >
								<img class="img-responsive pull-right" src="layout/images/'.$user["a_img"].'" width="130" height="130" />
								<span class="h2">'.$user["a_name"].'</span><br/>
								<span class="h3"><strong>Description: </strong>'.$user["a_desc"].'</span><br>
							</div>
						</div>';
			?>
	</div>

	<div class=" col-12 col-lg-4 col-xl-4 card">
		<!--PHP code to fetch faculty information-->
		<?php
				$query= "SELECT * FROM `alumnus` ORDER BY `alumni_id`";
				$result = $mysqli->query($query);
				while($user = $result->fetch_assoc())
				echo '<div class="box" >
								<img class="img-responsive pull-right" src="layout/images/'.$user["a_img"].'" width="130" height="130" />
								<span class="h2">'.$user["a_name"].'</span><br/>
								<span class="h3"><strong>Description: </strong>'.$user["a_desc"].'</span><br>
							</div>
						</div>';
			?>
	</div>

	<div class=" col-12 col-lg-4 col-xl-4 card">
		<!--PHP code to fetch faculty information-->
		<?php
				$query= "SELECT * FROM `alumnus` ORDER BY `alumni_id`";
				$result = $mysqli->query($query);
				while($user = $result->fetch_assoc())
				echo '<div class="box" >
								<img class="img-responsive pull-right" src="layout/images/'.$user["a_img"].'" width="130" height="130" />
								<span class="h2">'.$user["a_name"].'</span><br/>
								<span class="h3"><strong>Description: </strong>'.$user["a_desc"].'</span><br>
							</div>
						</div>';
			?>
	</div>

</div>


<?php		  
include("footer.php");
?>