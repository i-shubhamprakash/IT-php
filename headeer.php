<?php
/*
 © aditya thakur ©Piyush Vikas
  contact: https://www.linkedin.com/in/aditya532/
 ALL RIGHTS RESERVED
 
 */
session_start();
$full_name = $_SESSION[ 'full_name' ];
$currentPage = pathinfo( $_SERVER[ 'PHP_SELF' ], PATHINFO_FILENAME );
require( "db.php" );
?>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="layout/styles/layout.css" type="text/css"/>
	<style>
		body {
			margin: 0;
			font-family: Arial
		}
		
		.topnav {
			overflow: hidden;
			background-color: #333;
		}
		
		.topnav a {
			float: left;
			display: block;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 17px;
		}
		
		.active {
			background-color: #4CAF50;
			color: white;
		}
		
		.topnav .icon {
			display: none;
		}
		
		.dropdown {
			float: left;
			overflow: hidden;
		}
		
		.dropdown .dropbtn {
			font-size: 17px;
			border: none;
			outline: none;
			color: white;
			padding: 14px 16px;
			background-color: inherit;
			font-family: inherit;
			margin: 0;
		}
		
		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f9f9f9;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
			z-index: 1;
		}
		
		.dropdown-content a {
			float: none;
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			text-align: left;
		}
		
		.topnav a:hover,
		.dropdown:hover .dropbtn {
			background-color: #555;
			color: white;
		}
		
		.dropdown-content a:hover {
			background-color: #ddd;
			color: black;
		}
		
		.dropdown:hover .dropdown-content {
			display: block;
		}
		
		@media screen and (max-width: 600px) {
			.topnav a:not(: first-child), .dropdown .dropbtn {
				display: none;
			}
			.topnav a.icon {
				float: right;
				display: block;
			}
		}
		
		@media screen and (max-width: 600px) {
			.topnav.responsive {
				position: relative;
			}
			.topnav.responsive .icon {
				position: absolute;
				right: 0;
				top: 0;
			}
			.topnav.responsive a {
				float: none;
				display: block;
				text-align: left;
			}
			.topnav.responsive .dropdown {
				float: none;
			}
			.topnav.responsive .dropdown-content {
				position: relative;
			}
			.topnav.responsive .dropdown .dropbtn {
				display: block;
				width: 100%;
				text-align: left;
			}
		}
	</style>
</head>

<body>

	<div class="topnav" id="myTopnav">
		<a href="index.php" <?php echo ($currentPage=="index" ) ? ' class="active"' : '' ?>>Home</a>
		<div class="dropdown">
			<button class="dropbtn">People
      			<i class="fa fa-caret-down"></i>
    		</button>
			<div class="dropdown-content">
				<a href="faculty.php" <?php echo ($currentPage=="faculty" ) ? ' class="active"' : '' ?> >Faculty</a>
				<a href="#">Current Students</a>
				<a href="#">Alumnis</a>
				<a href="#">Staff</a>
			</div>
		</div>
		<a href="arc.php" <?php echo ($currentPage=="arc" ) ? ' class="active"' : '' ?>> ARC</a>
		<a href="gallery.php" <?php echo ($currentPage=="gallery" ) ? ' class="active"' : '' ?>>  Gallery</a>
		<div class="dropdown">
			<button class="dropbtn">About Us
      			<i class="fa fa-caret-down"></i>
    		</button>
			<div class="dropdown-content">
				<a href="about_us.php" <?php echo ($currentPage=="about_us" ) ? ' class="active"' : '' ?> >About College</a>
				<a href="about_us.php" <?php echo ($currentPage=="about_us" ) ? ' class="active"' : '' ?> >About Dept</a>
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Community
      			<i class="fa fa-caret-down"></i>
    		</button>
			<div class="dropdown-content">
				<a href="acm-chapter.php" <?php echo ($currentPage=="acm-chapter" ) ? ' class="active"' : '' ?>   >ACM Chapter</a>
				<a href="about_us.php" <?php echo ($currentPage=="about_us" ) ? ' class="active"' : '' ?> >Coding Club</a>
				<a href="about_us.php" <?php echo ($currentPage=="about_us" ) ? ' class="active"' : '' ?> >Sports Club</a>
				<a href="about_us.php" <?php echo ($currentPage=="about_us" ) ? ' class="active"' : '' ?> >Cultural Club</a>
			</div>
		</div>
		<a href="my_profile.php">My Profile</a>
		<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
	</div>


	<div class="row2">
		<div class="fl_left">
			<a href="index.php">
				<img src="layout/images/it_logo.png" class="img-responsive"/>
			</a>
		

		</div>
		<?php 
					if ( $_SESSION['logged_in'] != 1 ) { ?>
		<div class=f l_right>
			<h1><a href="index.php">Information Technology</a></h1>
			<h2>Haldia Institute of Technology</h2><br>
			<abc1 <?php echo ($currentPage=="signup" ) ? ' class="act"' : '' ?> >
				<button class="button button1" onclick="location.href='signup.php';">SignUp</button>
			</abc1>
			<abc1 <?php echo ($currentPage=="signin" ) ? ' class="act"' : '' ?> >
				<button class="button button1" onclick="location.href='signin.php';">Login</button>
			</abc1><br/>
		</div>
		<?php }
					 else{ ?>
		<div class=f l_right>
			<h1><a href="index.php">Information Technology</a></h1>
			<h2>Haldia Institute of Technology</h2><br>
			<abc1>
				<button class="button button1" onclick="location.href='logout.php';">Logout <?php echo $full_name;?></button>
			</abc1>
		</div>
		<?php } ?>
	</div>

	<script>
		function myFunction() {
			var x = document.getElementById( "myTopnav" );
			if ( x.className === "topnav" ) {
				x.className += " responsive";
			} else {
				x.className = "topnav";
			}
		}
	</script>

</body>

</html>