<?php  
include('connect.php');
session_start();
$userid = $_SESSION['userid'];
$pass = $_SESSION['userPass'];

$user_pass = $_POST['password'];

if (strcmp($user_pass, $pass)==0) {
	if ($con->query( "UPDATE tbluser SET status = 0 where id = $userid") === TRUE) {
    echo "<script>alert('account deactivated successfully')</script>";
	echo "<script>location.href = '../editaccount.php';</script>";
	}


	else {
	    echo "<script>alert('Error updating record: '".$con->error.")</script>";
	    echo "<script>location.href = '../editaccount.php';</script>";
	}

	 
}

else{

	echo "<script>alert('wrong password')</script>";
	echo "<script>location.href = '../editaccount.php';</script>";
}

?>