<?php
/*
 © aditya thakur 
  contact: https://www.linkedin.com/in/aditya532/
 ALL RIGHTS RESERVED
 */
session_start();
$phone = $_SESSION['phone'];
require_once("db.php");
//file upload path
$targetDir = "profile/img/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
    //allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf', 'JPG');
    if(in_array($fileType, $allowTypes)){
		//change the name of file
		$temp = explode(".", $_FILES["file"]["name"]);
		$newfilename = $phone . '.' . end($temp);
		//update imagename to db
		$sql = "UPDATE students SET image='$newfilename' WHERE phone='$phone'";
		$mysqli->query($sql);
        //upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetDir.$newfilename)){
            $_SESSION['message'] = "The file ".$fileName. " has been uploaded.";
        }else{
           $_SESSION['message'] = "Sorry, there was an error uploading your file.";
        }
    }else{
        $_SESSION['message'] = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $_SESSION['message'] = 'Please select a file to upload.';
}
//display status message
header("location: my_profile.php");
?>