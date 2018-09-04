<?php
/*
 © aditya thakur 
  contact: https://www.linkedin.com/in/aditya532/
 ALL RIGHTS RESERVED
 
 */
	require 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	 

/* User login process, checks if user exists and password is correct */
// Escape email to protect against SQL injections
	$email = $mysqli->escape_string($_POST['email']);
	$result = $mysqli->query("SELECT * FROM students WHERE email='$email'");
	
	

	if ( $result->num_rows == 0 ){ // User doesn't exist
		$_SESSION['message'] = "User with that email doesn't exist!";
		header("location: signin-up.php");
	}
	else { // User exists
		$user = $result->fetch_assoc();

		if ( password_verify($_POST['password'], $user['password']) ) {

			$_SESSION['email'] = $user['email'];
			// This is how we'll know the user is logged in
			$_SESSION['logged_in'] = true;

			header("location: my_profile.php");
		}
		else {
			$_SESSION['message'] = "You have entered wrong password, try again!";
			header("location: signin-up.php");
		}
	}
}
?>
