<?php

include "connect.php";
date_default_timezone_set("Asia/Singapore");
$timezone = date_default_timezone_get();

$user = $_POST["userid"];



$user = mysqli_real_escape_string($con,$user);
$pic = "";

	$tmp_name = $_FILES["image"]["tmp_name"];
	$date = date("Y-m-d");
	$time = time();
 	move_uploaded_file($tmp_name, "../profpics/". $user ."_". $date . $time . ".png");


 $pic = "../profpics/". $user  . "_". $date . $time . ".png";

 $sql = "UPDATE `tbluser` SET `profile_pic_path` = '$pic' WHERE `tbluser`.`id` = $user";
$result = mysqli_query($con,$sql);
if($result){
	echo "<script>alert('Update Successfuly!'); location.href = '../profile.php?id=".$user."'</script>";
}else{
	mysqli_error();
}





?>