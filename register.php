<?php

	require 'db.php';
	session_start();  
	/* Registration process, inserts user info into the database
	   and sends account confirmation email message
	 */


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	// Set session variables to be used on profile.php page
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['full_name'] = $_POST['full_name'];

	// Escape all $_POST variables to protect against SQL injections
	$full_name = $mysqli->escape_string($_POST['full_name']);
	$email = $mysqli->escape_string($_POST['email']);
	$roll1 = $mysqli->escape_string($_POST['year']);
	$roll2 = $mysqli->escape_string($_POST['dept']);
	$roll3 = $mysqli->escape_string($_POST['roll']);
	$roll = $roll1.'/'.$roll2.'/'.$roll3;
	$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
	$hash = $mysqli->escape_string( md5( rand(0,5000) ) );

	// Check if user with that email already exists
	$result = $mysqli->query("SELECT * FROM students WHERE email='$email'") or die($mysqli->error());

	// We know user email exists if the rows returned are more than 0
	if ( $result->num_rows > 0 ) {
		$_SESSION['message'] = 'User with this email already exists!';
		header("location: error.php");

	}
	else { // Email doesn't already exist in a database, proceed...
	
		// active is 0 by DEFAULT (no need to include it here)
		$sql = "INSERT INTO students (full_name, email, roll, phone, gender, password, hash) "
				. "VALUES ('$full_name','$email','$roll','$phone','$gender','$password', '$hash')";

		// Add user to the database
		if ( $mysqli->query($sql) ){
			$_SESSION['email'] = $email;
			$_SESSION['roll'] = $roll;
			$_SESSION['phone'] = $phone;
			$_SESSION['active'] = 0; //0 until ADMIN activates the account 
			$_SESSION['logged_in'] = true; // So we know the user has logged in
			header("location: my_profile.php");

		}

		else {
			$_SESSION['message'] = 'Registration failed!';
			header("location: error.php");
		}

	}     

}

?>


