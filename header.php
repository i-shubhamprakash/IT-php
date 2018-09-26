<?php
/* Created by Aditya Thakur 
linkedin: linkedin.com/adityathakur532
ALL RIGHTS RESERVED */
require("login.php");
session_start();
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- google font  -->
    <link href="https://fonts.googleapis.com/css?family=Acme|Nunito" rel="stylesheet">
    
    <!-- Font awesome library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
    
    <link rel="stylesheet" href="styles/main.css">
    <title>Information Technology</title>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Information Technology</a>
        </div>
        
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">People<span class="caret"></span></a>
                        <ul class="dropdown-menu"> 
                          <li><a href="faculty.php">Faculty</a></li>
                            <li><a href="students.php">Current Students</a></li>
                            <li><a href="alumnus.php">Alumns</a></li>
                            <li><a href="staffs.php">Staffs</a></li>
                        </ul>
                    </li>
                <li><a href="arc.php">ARC</a></li>
                <li><a href="gallery.php">Gallery</a></li>


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="about_us.php">About College</a></li>
                            <li><a href="about_us.php">About Department</a></li>
                        </ul>
                </li>


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Community<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="acm-chapter.php">ACM Chapter</a></li>
                            <li><a href="coding-club.php">Coding Club</a></li>
                            <li><a href="sports-club.php">Sports Club</a></li>
                            <li><a href="cultural-club.php">Cultural Club</a></li>
                        </ul>
                </li>
            </ul>
  
            <ul class="nav navbar-nav navbar-right">

                <!-- login code -->
        </div>


    </div>
</nav>
