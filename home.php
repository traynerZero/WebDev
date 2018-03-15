
<!DOCTYPE html>
<html>
<head>
	<title>Paintstagram</title>
    <?php include "links.php" ?>

</head>

<body>

  <?php include "header.php";

  $userid = $_SESSION['userid'];
   ?>
   <input type="hidden" value="<?php echo $userid;?>" id="userID">
  <div id="notif"  style="display: none;"><?php include "notif.php"; ?></div>
  <div id="gobckbtn" style="display: none; margin: 20px;"><button class="theme-noborder" id="gobck">Go back</button></div>
  <div id="msg"  style="display: none;"><?php include "message.php"; ?></div>
<div id="news">
    <br>
            <button type="button" style="width: 85%; padding: 10px; margin-left: 100px; margin-right: 100px; " class="letspaint"><strong>LET'S PAINT</strong></button>
<div class="panel">
<div class="row" >
	<div class="column left" style="height: auto; width: 37%;" align="right">
            <div class="paint-panel" >
                                    <div class="literCanvas"></div>
                                    <div id="thisCanvas" style="display: none">
                                    <canvas id="canvas" ></canvas>
                                    </div>
                                    <input type="hidden" name="cust_img_data" id="cust_img_data" value=""/>
                                    <br>
                                    <textarea class="theme" id="desc" style="width: 400px;"></textarea>
                                    <br>
                                    <button id="upload" style="padding: 10px;" class="cursor">UPLOAD <span class="fa fa-camera"></span></button>
                                    <input type="file" name="thisFile" id="uploadFile" style="display: none">
                                    <button type="button" id="saveDesign" style="padding: 10px;">POST  <span class="fa fa-check"></span></button>

            </div>
    <div class="row card theme-noborder" style=" border:1px solid; border-color: #9bf281; box-shadow: 2px 4px 10px #78e258;">
    <div style="border-bottom: 1px solid; border-color: #9bf281;">
    <a href="#"><h3 style="color: gray" align="left">WHO TO FOLLOW &nbsp;<span class="fa fa-address-book-o"></span></h3></a>
    </div>
        <?php
        $ctr = 0;
        $sql = "SELECT * FROM tbluser";
        $result = mysqli_query($con,$sql);
        while($data = mysqli_fetch_assoc($result)){
            if($ctr != 3){
            $sql1 = "SELECT * FROM tblfollow";
            $result1 = mysqli_query($con,$sql1);
            $data1 = mysqli_fetch_assoc($result1);
            if($data['id'] != $userid && $data['id'] != $data1['id_followee']){
        ?>

    <div class="row relative wrapper" id="<?php echo $data['id']; ?>" align="left" style="border-top: 1px solid; border-color:#78e258; ">
        <a href="profile.php?id=<?php echo $data['id']; ?>"><img src="/moreimg/img_avatar.png" class="profile-img" style="height: 50px; width: 50px;"><p class="font-md" style="position:absolute; top: 20px; margin-left: 60px; height: 50px; width: 50px;"><?php echo $data['username'];?></p></a>
        <button type="button" class="theme-noborder fbtn" style=" position:absolute; top: 20px; right: 10px; " value="<?php echo $data['id']; ?>">Follow</button>
    </div>

    <?php
    $ctr++;
    }
    }
    }
    ?>

    </div>

    <br>
    <div class="row theme-noborder card" style=" border:1px solid; border-color: #9bf281; box-shadow: 2px 4px 10px #78e258;">
        <div style="border-bottom: 1px solid; border-color: #9bf281;">
        <a href="#"><h3 style="color: gray" align="left">TRENDING! <span class="fa fa-photo"></span></h3></a>
        </div>
        <br>
        <?php

        $sql = "SELECT * FROM tblpost order by date_created desc limit 0,9";
        $result = mysqli_query($con,$sql);
        while($data = mysqli_fetch_assoc($result)){
        ?>
        <div class="col-md">
            <img class="img-tr" name="cust_image" src="/upload/<?php echo $data['postimage']; ?>">
        </div>
        <?php
        }
        ?>
    </div>

    <br><footer><h4 style="color: gray;" class="font"><a href="index.php">Paintstagram</a> © 2018</h4></footer>

	</div>

    <input type="file" name="image" id="imgupload" style="display: none;">

    <div class="column left" id="displayhere">
        <!-- news feed content  !-->

        <?php

        $sql = "SELECT * FROM tblpost order by date_created desc";
        $result = mysqli_query($con,$sql);

        while($data = mysqli_fetch_assoc($result)){
            $id = $data['user_id'];
            $sql1 = "SELECT id,username FROM tbluser where id = '$id' ";
            $result1 = mysqli_query($con,$sql1);
            $data1 = mysqli_fetch_assoc($result1);
            ?>
            <div class="theme-noborder relative wrapper" style="border:1px solid; border-color: #9bf281; box-shadow: 2px 4px 10px #78e258;">
        
        <div style="padding: 5px;border-top: 1px solid; border-bottom: 1px solid; border-color: #9bf281;">

        <a href="profileu.php?id=<?php echo $data1['id'];?>"><img src="/moreimg/img_avatar.png" class="profile-img" style="height: 50px; width: 50px;"><span class="black"><?php echo $data1['username']; ?></span></a>
        <p class="font-md" style="padding: 10px;"><?php echo $data['post_desc']; ?></p>
        </div>
        <img  id="myImg" class="img" name="cust_image" src="<?php echo $data['postimage']; ?>">
        
        <p class="topcorner font-sm"><?php echo $data['date_created']; ?></p>
        <span class="topcorner button fa fa-close close"></span>
        <div style="padding: 5px; border-top: 1px solid; border-bottom: 1px;border-color: #9bf281;">
        <button class="theme-noborder">Like <span class="fa fa-heart"></span></button>
        </div>
        </div>
        <br>

            <?php

        }

        ?>
        <!-- end of news feed content  !-->                    
            <!-- <img name="cust_image" src='' style="display: none;" height="550" width="700" id="savedImage"> !-->
    </div>
    </div>
</div>
</div>


</body>