<?php
/* CREATED BY:
** BACK-END:
Aditya Thakur
linkedin: linkedin.com/adityathakur532

** FRONT-END:
Shubham Prakash
LikedIn: https://www.linkedin.com/in/ishubhamprakash

ALL RIGHTS RESERVED */


  DEFINE('DB_USERNAME', 'root');
  DEFINE('DB_PASSWORD', 'mysql@2308');
  DEFINE('DB_HOST', 'localhost');
  DEFINE('DB_DATABASE', 'it_db');

  $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }
?>
