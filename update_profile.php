<?php
/*
 © aditya thakur 
  contact: https://www.linkedin.com/in/aditya532/
 ALL RIGHTS RESERVED
 
 */
require 'db.php';
	session_start(); 
//we will need database connection to upload every data to student table


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$bio = $mysqli->escape_string($_POST['bio']);
	$work_ex = $mysqli->escape_string($_POST['work_ex']);
	$Coding = implode(',',$_POST['coding']);
	$cca = implode(',',$_POST['CCA']);
	$sports = implode(',',$_post['Sports']);
}

?>