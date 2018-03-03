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
 <div id="notif"  style="display: none;"><?php include "notif.php"; ?></div>
  <div id="gobckbtn" style="display: none; margin: 20px;"><button class="theme-noborder" id="gobck">Go back</button></div>
  <div id="msg"  style="display: none;"><?php include "message.php"; ?></div>

        <div id="news">
        <div id="user_header">
            <div id="user">

                <div id="user_picture">
                    <div id="picture_box">
                        <img src="/moreimg/profilepic.jpeg">
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
                            </span><a href="#" style="color: white;">Edit Picture</a></li>
                        <li>';   
    }

                        ?>
                        <li>
                            <span class="info_icon">
                                <i class="icon-briefcase"></i>
                            </span><a href="#" style="color: white;">About Me</a></li>
                        <li>
                            <span class="info_icon">
                                <i class="icon-book"></i>
                            </span><a href="#" style="color: white;">My Works</a></li>
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
    <a href="#"><h3 style="color: gray" align="left">FRIENDS <span class="fa fa-address-book-o"></span></h3></a>

    <div class="col-md relative wrapper" align="left">
        <a href="profile.php"><img src="/moreimg/img_avatar.png" class="profile-img" style="height: 50px; width: 50px;"><p class="font-md">Sample Person</p></a>
    </div>
    <div class="col-md relative wrapper" align="left">
        <a href="profile.php"><img src="/moreimg/img_avatar.png" class="profile-img" style="height: 50px; width: 50px;"><p class="font-md">Sample Person</p></a>
    </div>
    <div class="col-md relative wrapper" align="left">
        <a href="profile.php"><img src="/moreimg/img_avatar.png" class="profile-img" style="height: 50px; width: 50px;"><p class="font-md">Sample Person</p></a>
    </div>


    </div>

    <div class="row card theme-noborder" style=" border:1px solid; border-color: #9bf281;">
        <a href="#"><h3 style="color: gray" align="left">My Works<span class="fa fa-photo"></span></h3></a>
        <div class="col-md wrapper">
        <img  id="myImg" class="img-tr" name="cust_image" src="/moreimg/no_image.jpg">
        </div>
        <div class="col-md wrapper">
        <img  id="myImg" class="img-tr" name="cust_image" src="/moreimg/no_image.jpg">
        </div>
        <div class="col-md wrapper">
        <img  id="myImg" class="img-tr" name="cust_image" src="/moreimg/no_image.jpg">
        </div>
        <div class="col-md wrapper">
        <img  id="myImg" class="img-tr" name="cust_image" src="/moreimg/no_image.jpg">
        </div>
        <div class="col-md wrapper">
        <img  id="myImg" class="img-tr" name="cust_image" src="/moreimg/no_image.jpg">
        </div>
        <div class="col-md wrapper">
        <img  id="myImg" class="img-tr" name="cust_image" src="/moreimg/no_image.jpg">
        </div>
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
            <div class="theme-noborder relative wrapper" style="border:1px solid; border-color: #9bf281;">
        <div style="padding: 5px;">
        <a href="profile.php"><img src="/moreimg/img_avatar.png" class="profile-img" style="height: 50px; width: 50px;"><span class="black"><?php echo $data1['username']; ?></span></a>
        <p class="font-md" style="padding: 10px;"><?php echo $data['post_desc']; ?></p>
        </div>
        <img  id="myImg" class="img" name="cust_image" src="<?php echo $data['postimage']; ?>">
        <div style="padding: 5px;">
        <p class="topcorner font-sm"><?php echo $data['date_created']; ?></p>
        <span class="topcorner button fa fa-close"></span>
        <button class="theme-noborder">Comments</button>
        </div>
        </div>
        <br>

            <?php

        }

        ?>
        <button class="theme-noborder" style="margin-left: 45%;">Load More</button>
        <!-- end of news feed content  !-->

        
                                
                                    <!-- <img name="cust_image" src='' style="display: none;" height="550" width="700" id="savedImage"> !-->
    </div>
    </div>
</div>
</div>

</body>

</html>