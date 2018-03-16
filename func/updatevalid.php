<?php
include('connect.php');
session_start();


$email=$_SESSION['email'];
$username = $_SESSION['username'];
$userid= $_SESSION['userid'];



$pass = $_POST['password'];
$user_name= $_POST['user_name'];
$user_email= $_POST['user_email'];
$birthday= $_POST['birthday'];
$user_gender = $_POST['user_gender'];
$user_bio = $_POST['user_bio'];

$pass = mysqli_real_escape_string($con,$pass);
$user_name= mysqli_real_escape_string($con,$user_name);
$user_email= mysqli_real_escape_string($con,$user_email);
$birthday= mysqli_real_escape_string($con,$birthday);
$user_gender = mysqli_real_escape_string($con,$user_gender);
$user_bio = mysqli_real_escape_string($con,$user_bio);


if ($pass == $_SESSION['userPass']) {
	if ($con->query( "UPDATE tbluser SET birthday = '$birthday', gender = $user_gender, bio = '$user_bio' where id = $userid") === TRUE) {
    echo "<script>alert('Record updated successfully')</script>";
	 $_SESSION['username']= $user_name;
	 $_SESSION['email']= $user_email;
	echo "<script>location.href = '../editaccount.php';</script>";} 
	else {
	    echo "<script>alert('Error updating record: '".$con->error.")</script>";
	    echo "<script>location.href = '../editaccount.php';</script>";}

	 if ((strcmp($username,$user_name)!=0)||(strcmp($email,$user_email)!=0)) {
	 	if(strcmp($username,$user_name)!=0)
	 {
	 if ($con->query( "UPDATE tbluser SET username='$user_name' where id = $userid") === TRUE) {
    echo "<script>alert('username updated successfully')</script>";} 
	else {
	    echo "<script>alert('Error updating record: '".$con->error.")</script>";
	    echo "<script>location.href = '../editaccount.php';</script>";}
	 }

	 if(strcmp($email,$user_email)!=0)
	 {
	 if ($con->query( "UPDATE tbluser SET email='$user_email' where id = $userid") === TRUE) {
    echo "<script>alert('email updated successfully')</script>";} 
	else {
	    echo "<script>alert('Error updating record: '".$con->error.")</script>";
	    echo "<script>location.href = '../editaccount.php';</script>";}
	 }
	 }
	 


}



else {
	echo "<script>alert('wrong password')</script>";
	echo "<script>location.href = '../editaccount.php';</script>";
}

?>