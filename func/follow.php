<?php

include "connect.php";
date_default_timezone_set("Asia/Singapore");
$timezone = date_default_timezone_get();

$user = $_POST["userid"];
$flw = $_POST["flwid"];

$user = mysqli_real_escape_string($con,$user);
$flw = mysqli_real_escape_string($con,$flw);
//_

$sql = "INSERT INTO `tblfollow` (id_follower, id_followee) VALUES('$user','$flw')";
mysqli_query($con,$sql);


?>