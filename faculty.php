<!--
CREATED BY:
** BACK-END:
Aditya Thakur
linkedin: linkedin.com/adityathakur532

** FRONT-END:
Shubham Prakash
LikedIn: https://www.linkedin.com/in/ishubhamprakash

ALL RIGHTS RESERVED
-->
<?php
$page_requirements = '
	<title>Our Faculty | IT Dept</title>
	<link rel="stylesheet" href="styles/faculty.css" type="text/css" />	';
	include("header.php");
?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-lg-offset-4">
					<h1>Our Faculties and Staffs</h1>
				</div>
			</div>
			<div class="row">

				<!--PHP code to fetch faculty information-->
			<?php
				$query= "SELECT * FROM `faculty` ORDER BY `faculty_id`";
				$result = $mysqli->query($query);
				while($user = $result->fetch_assoc())
				echo '<div class="box" >
								<img class="img-responsive pull-right" src="layout/images/'.$user["f_img"].'" width="130" height="130" />
								<span class="h2">'.$user["f_name"].'</span><br/>
								<span class="h3"><strong>Designation: </strong>'.$user["f_designation"].'</span><br><br>
								<span class="h3"><strong>Qualification: </strong>'.$user["f_qualification"].'</span><br>
								<a href="cv/'.$user["f_cv"].'" download>Click to download CV</a>
							</div>
						</div>';
			?>
			</div>
			<br>
		</div>

<?php
include("footer.php");
?>