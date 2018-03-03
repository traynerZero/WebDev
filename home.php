
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
                                    <button type="button" id="saveDesign" style="padding: 10px;">POST  <span class="fa fa-check"></span></button>

            </div>
    <div class="row card theme-noborder" style=" border:1px solid; border-color: #9bf281; box-shadow: 2px 4px 10px #78e258;">
    <a href="#"><h3 style="color: gray" align="left">FIND FRIENDS <span class="fa fa-address-book-o"></span></h3></a>

        <?php

        $sql = "SELECT * FROM tbluser limit 0,3";
        $result = mysqli_query($con,$sql);
        while($data = mysqli_fetch_assoc($result)){
            if($data['id'] != $userid){
        ?>

    <div class="col-md relative wrapper" align="left">
        <a href="profile.php"><img src="/moreimg/img_avatar.png" class="profile-img" style="height: 50px; width: 50px;"><p class="font-md"><?php echo $data['username'];?></p></a>
        <button type="button" class="theme-noborder">Add Friend +</button>
    </div>

    <?php
    }
    }
    ?>

    </div>

    <br>
    <div class="row theme-noborder card" style=" border:1px solid; border-color: #9bf281; box-shadow: 2px 4px 10px #78e258;">
        
        <a href="#"><h3 style="color: gray" align="left">TRENDING! <span class="fa fa-photo"></span></h3></a>
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
        <div style="padding: 5px;">
        <a href="profileu.php?id=<?php echo $data1['id'];?>"><img src="/moreimg/img_avatar.png" class="profile-img" style="height: 50px; width: 50px;"><span class="black"><?php echo $data1['username']; ?></span></a>
        <p class="font-md" style="padding: 10px;"><?php echo $data['post_desc']; ?></p>
        </div>
        <img  id="myImg" class="img" name="cust_image" src="<?php echo $data['postimage']; ?>">
        
        <p class="topcorner font-sm"><?php echo $data['date_created']; ?></p>
        <span class="topcorner button fa fa-close close"></span>
        <div style="padding: 5px;">
        <button class="theme-noborder">Comments</button>
        </div>
        </div>
        <br>

            <?php

        }

        ?>
        <a class="theme-noborder cursor" style="margin-left: 45%;" id="loadMore">Load More</a>
        <!-- end of news feed content  !-->                    
            <!-- <img name="cust_image" src='' style="display: none;" height="550" width="700" id="savedImage"> !-->
    </div>
    </div>
</div>
</div>
</body>