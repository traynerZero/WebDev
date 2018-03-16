<?php  
include('connect.php');
session_start();
$userid = $_SESSION['userid'];
$pass = $_SESSION['userPass'];

$user_pass = $_POST['password'];
$newPass = $_POST['newPassword'];
$confirmNewPass = $_POST['confirmNewPassword'];

$newPass = mysqli_real_escape_string($con,$newPass);
$confirmNewPass = mysqli_real_escape_string($con,$confirmNewPass);

if(strcmp($pass, $user_pass)==0){

	if (strcmp($newPass, $confirmNewPass)==0) {
		if ($con->query( "UPDATE tbluser SET password = '$newPass' where id = $userid") === TRUE) {
    echo "<script>alert('Password updated successfully')</script>";
	$_SESSION['userPass'] = $newPass;
	echo "<script>location.href = '../editaccount.php';</script>";
	} 
	else {
	    echo "Error updating record: " . $con->error;}

	}

	elseif (strcmp($newPass, $confirmNewPass)!=0) {
	echo "<script>alert('password not match')</script>";
	echo "<script>location.href = '../editaccount.php';</script>";
	}

}

else{

	echo "<script>alert('wrong password')</script>";
	echo "<script>location.href = '../editaccount.php';</script>";
}









?>