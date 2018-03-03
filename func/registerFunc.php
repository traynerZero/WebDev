<?php

include "connect.php";

$user = $_POST["user"];
$pass = $_POST["password"];

$email = $_POST["email"]; 
$birth = $_POST["birthday"];
$gender = $_POST["gender"];
$bio = $_POST["bio"];

$user = mysqli_real_escape_string($con,$user);
$pass = mysqli_real_escape_string($con,$pass);
$birth = mysqli_real_escape_string($con,$birth);
$email = mysqli_real_escape_string($con,$email);
$gender = mysqli_real_escape_string($con,$gender);
$bio = mysqli_real_escape_string($con,$bio);

$date = date('Y-m-d');

//_

$sql = "INSERT INTO `tbluser` (username, password, email, gender, birthday,bio, follower_count, profile_pic_path, status, date_created ) VALUES('$user','$pass','$email','$gender', '$birth','$bio', 0, '/moreimg/img_avatar.png',1,'$date')";
$result = mysqli_query($con,$sql);
if($result){
	echo "<script> alert('Registered!'); location.href = '../login.php';</script>";
}

?>