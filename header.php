<?php
/* Created by Aditya Thakur 
linkedin: linkedin.com/adityathakur532
ALL RIGHTS RESERVED */
require("db.php");
session_start();
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.navbar {
    overflow: hidden;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: #536615;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #a4ce1a;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
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

.dropdown-content a:hover {
    background-color: #536615;
}

.dropdown:hover .dropdown-content {
    display: block;
}
.header{
	background-color: #27cee8;
	display:inline-block;
	width: 100%;
	}
.it-hit p,pre {
  text-align: right;
  font-family: Times New Roman;
  padding-right: 16px;
  padding-top: 0;
  margin: 0;
}
.it-hit pre{
  font-size:31px; 
  padding-top: 20px;

}
.it-hit p{
  font-size: 25px;
  padding-top: 5px;
  color: black;
}
.it-hit a{
  text-decoration: none;
}
.it-hit a.visited{
  color: currentColor;
}
.it-hit button{
   width:auto;
  background-color: #1CB94E;
  border: none;
  outline: none;
  color: #fff;
  font-size: 14px;
  font-weight: normal;
  padding: 14px 0;
  border-radius: 2px;
  text-transform: uppercase;
	float: right;
	margin-right: 20px;
	padding: 5px;
  }
</style>
</head>
<body>
<div class="header">
	<div class="navbar">
		<a href="index.php">Home</a>
		<div class="dropdown">
			<button class="dropbtn">People 
      <i class="fa fa-caret-down"></i>
    </button>
			<div class="dropdown-content">
				<a href="faculty.php">Faculty</a>
				<a href="students.php">Current Students</a>
				<a href="alumnis.php">Alumnis</a>
				<a href="staffs.php">Staffs</a>
			</div>
		</div>
		<a href="arc.php">ARC</a>
		<a href="gallery.php">Gallery</a>
		<div class="dropdown">
			<button class="dropbtn">About Us 
      <i class="fa fa-caret-down"></i>
    </button>
			<div class="dropdown-content">
				<a href="about_us.php">About College</a>
				<a href="about_us.php">About Department</a>
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Community 
      <i class="fa fa-caret-down"></i>
    </button>
			<div class="dropdown-content">
				<a href="acm-chapter.php">ACM Chapter</a>
				<a href="coding-club.php">Coding Club</a>
				<a href="sports-club.php">Sports Club</a>
				<a href="cultural-club.php">Cultural Club</a>
			</div>
		</div>
		<a href="my_profile.php">My Profile</a>
	</div>
	<div class="it-hit">
		<a href="index.php"><img src="styles/images/it_logo.png" align="left" alt="itlogo"></a>
		<a href="index.php"><strong><pre>Information Technology</pre></strong></a>
		<a href="hithaldia.in"><strong><p>Haldia Institute of Technology</p></strong></a>
		<?php if ( $_SESSION['logged_in'] != 1 ) { ?>
		<a href="signin-up.php"><button>Login/Signup</button></a>
		<? }
  		else { ?>
		<a href="logout.php"><button>Logout</button></a>
		<? } ?>
	</div>
</div>
</body>
</html>

