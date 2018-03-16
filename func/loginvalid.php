<?php

include "connect.php";

$user = $_POST["user"];
$pass = $_POST["password"];

$user = mysqli_real_escape_string($con,$user);
$pass = mysqli_real_escape_string($con,$pass);

//_

$sql = "SELECT * FROM tbluser where (email = '$user') and (password = '$pass')";
$result = mysqli_query($con,$sql);
$cnt = mysqli_num_rows($result);
if($cnt != 0){
	session_start();
	$data = mysqli_fetch_assoc($result);
	$_SESSION['userid'] = $data['id'];
	$_SESSION['userPass'] = $data['password'];
	$_SESSION['username']= $data['username'];
	$_SESSION['email']= $data['email'];
	echo "<script>alert('Welcome ".$data['username']."'); location.href = '../home.php';</script>";
}else{
	echo "<script>alert('Email/Password Incorrect'); location.href = '../login.php';</script>";
}

?>