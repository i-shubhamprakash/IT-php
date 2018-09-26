<?php
/*
 © aditya thakur 
  contact: https://www.linkedin.com/in/aditya532/
 ALL RIGHTS RESERVED
 
 */ 
 

  DEFINE('DB_USERNAME', 'root');
  DEFINE('DB_PASSWORD', '');
  DEFINE('DB_HOST', 'localhost');
  DEFINE('DB_DATABASE', 'it_db');

  $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }
?>
