<!DOCTYPE html>
<html>

<head>

<?php include "links.php"; ?>

<link rel="stylesheet" type="text/css" href="css/profile.css">
    <script src="js/profile.js"></script>    
</head>

<body>
    <?php
    include('header.php');


    $pid = $_GET['id'];



    $sql = "SELECT * FROM tbluser where id = '$pid'";
    $result = mysqli_query($con,$sql);
    $data = mysqli_fetch_assoc($result);
 ?>
 <br>
 <input type="hidden" value="<?php echo $pid;?>" id="userID">
 <div id="notif"  style="display: none;"><?php include "notif.php"; ?></div>
  <div id="gobckbtn" style="display: none; margin: 20px;"><button class="theme-noborder" id="gobck">Go back</button></div>
  <div id="msg"  style="display: none;"><?php include "message.php"; ?></div>

        <div id="news">
        <div id="user_header">
            <div id="user">

                <div id="user_picture">
                    <div id="picture_box">
                        <img class="profilepicture" src="<?php echo $data['profile_pic_path'];?>">
                    </div>
                </div>
                <div id="user_info">
                    <h2 class="user_name"><?php echo $data['username']; ?></h2>
                    <hr>
                    <ul id="user_list">
                        <?php


    if($pid == $userid){
        echo ' <li><span class="info_icon">
                                <i class="icon-briefcase"></i>
                            </span><a href="#" style="color: white;" id="myBtn">Edit Picture</a></li>
                        <li>';   
    }

                        ?>
                        
                        <li>
                        <li>
                            <span class="info_icon">
                                <i class="icon-book"></i>
                            </span><a href="#" style="color: white;">My Works</a></li>
                            <div style="width: 350px;">
                            <label style="padding: 10px; margin: 10px;"><?php echo $data['bio']; ?></label>
                            </div>
                    </ul>

                </div>
            </div>
        </div>
        <br>
        <br>
        <?php


    if($pid == $userid){
        echo " 
        <button type='button' style='width: 85%; padding: 10px; margin-left: 100px; margin-right: 100px;' class='letspaint'><strong>LET'S PAINT</strong></button>";   
    }

                        ?>
<div class="panel">
<div class="row">
    <div class="column left" style="height: auto; width: 37%;" align="right">
            <div class="paint-panel">
                                    <div class="literCanvas"></div>
                                    <div id="thisCanvas" style="display: none">
                                    <canvas id="canvas" ></canvas>
                                    </div>
                                    <input type="hidden" name="cust_img_data" id="cust_img_data" value=""/>
                                    <br>
                                    <textarea class="theme" id="desc" style="width: 400px;"></textarea>
                                    <br>
                                    <button type="button" id="upload" style="padding: 10px;">UPLOAD <span class="fa fa-camera"></span></button>
                                    <button type="button" id="saveDesign" style="padding: 10px;">POST  <span class="fa fa-check"></span></button>
            </div>

    <div class="row card theme-noborder" style=" border:1px solid; border-color: #9bf281;">
        <div style="border-bottom: 1px solid; border-color: #9bf281;">
    <a href="#"><h3 style="color: gray" align="left">Followers <span class="fa fa-address-book-o"></span></h3></a>
        </div>

        <?php
        $ctr = 0;
        $sql = "SELECT * FROM tbluser";
        $result = mysqli_query($con,$sql);
        while($data = mysqli_fetch_assoc($result)){
            if($ctr != 7){
            $sql1 = "SELECT * FROM tblfollow where id_follower = $userid";
            $result1 = mysqli_query($con,$sql1);
            $data1 = mysqli_fetch_assoc($result1);
            if($data['id'] != $userid && $data['id'] == $data1['id_followee']){
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
    if($ctr == 0){
            echo "<center><label>It seems you have no followers. :( </label><center>";
        
    }
    ?>
    </div>
    <br>
    <div class="row card theme-noborder" style=" border:1px solid; border-color: #9bf281;">
        <div style="border-bottom: 1px solid; border-color: #9bf281;">
        <a href="#"><h3 style="color: gray" align="left">My Works<span class="fa fa-photo"></span></h3></a>
        </div>
        <?php

        $sql = "SELECT * FROM tblpost where user_id = $pid order by date_created desc limit 0,9";
        $result = mysqli_query($con,$sql);
        while($data = mysqli_fetch_assoc($result)){
        ?>
        <div class="col-md wrapper">
        <img  id="myImg" class="img-tr" name="cust_image" src="/upload/<?php echo $data['postimage']; ?>">
        </div>
        <?php 
        }
        ?>
    </div>

    <br>
    <footer class="theme-noborder"></footer>
    <footer class="theme-noborder"><h6 style="color: gray"><a href="index.php">Paintstagram</a> © 2018</h6></footer>

    </div>



    <div class="column left" id="displayhere">
        <!-- news feed content  !-->
        <?php

        $sql = "SELECT * FROM tblpost where user_id = '$pid' order by date_created desc limit 0,4";
        $result = mysqli_query($con,$sql);

        while($data = mysqli_fetch_assoc($result)){
            $id = $data['user_id'];
            $sql1 = "SELECT username FROM tbluser where id = '$id' ";
            $result1 = mysqli_query($con,$sql1);
            $data1 = mysqli_fetch_assoc($result1);
            ?>
        <div class="theme-noborder relative wrapper" style="border:1px solid; border-color: #9bf281; box-shadow: 2px 4px 10px #78e258;">

        <div style="padding: 5px; border-top: 1px solid; border-bottom: 1px solid; border-color: #9bf281;">

        <a href="profile.php"><img src="/moreimg/img_avatar.png" class="profile-img" style="height: 50px; width: 50px;"><span class="black"><?php echo $data1['username']; ?></span></a>
        <p class="font-md" style="padding: 10px;"><?php echo $data['post_desc']; ?></p>
        </div>
        <img  id="myImg" class="img" name="cust_image" src="<?php echo $data['postimage']; ?>">
        <div style="padding: 5px; border-top: 1px solid; border-color: #9bf281;">
        <p class="topcorner font-sm"><?php echo $data['date_created']; ?></p>
        <span class="topcorner button fa fa-close"></span>
        <button class="theme-noborder">Like <span class="fa fa-heart"></button>
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

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form action="../func/uploadpic.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="userid" value="<?php echo $pid; ?>">
    <input type="file" name="image" accept="image/*"/>
    <button type="submit" name="submit" style="position:relative;  width: 100px; left: 50%;">Save</button>
    </form>
  </div>

</div>

</body>

</html>