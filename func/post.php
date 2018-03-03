<?php

include "connect.php";
date_default_timezone_set("Asia/Singapore");
$timezone = date_default_timezone_get();

$user = $_POST["userid"];
$img = $_POST["img"];
$desc = $_POST["descr"];

$user = mysqli_real_escape_string($con,$user);
$img = mysqli_real_escape_string($con,$img);
$desc = mysqli_real_escape_string($con,$desc);


$date = date('Y/m/d h:i:s a',time());

$datefile = date('Y_m_d_h_i_s_',time());

list($type,$img) = explode(';',$img);
list(,$img) = explode(',', $img);
$img = base64_decode($img);

$filename = '../upload/'.$user.'_'.$datefile.'.png';
file_put_contents($filename, $img);

//_

$sql = "INSERT INTO `tblpost` (postimage, post_desc, date_created, user_id, num_of_likes) VALUES('$filename','$desc','$date','$user',0)";
$result = mysqli_query($con,$sql);
if($result){
	echo $date;
}

?>