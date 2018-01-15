<!DOCTYPE html>
<html>

<head>
    <title>Paintstagram</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <!-- stylesheet -->
    <!-- dependency: React.js -->
    <script src="js/react-with-addons.js"></script>
    <script src="js/react-dom.js"></script>

    <!--scripts-->
    <link href="css/literallycanvas.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/modals.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/literallycanvas.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/profile.js"></script>
    <script src="js/scripts.js"></script>
</head>

<body>
    <?php
    include('header.php');
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
                    <h2 class="user_name">Robbie Green</h2>
                    <hr>
                    <ul id="user_list">
                        <li>
                            <i class="icon-building info_icon"></i>
                            </span><a href="#" style="color: white;">Edit Picture</a></li>
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
        <button type="button" style="width: 85%; padding: 10px; margin-left: 100px; margin-right: 100px; " class="letspaint"><strong>LET'S PAINT</strong></button>
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
    <div class="row card theme-noborder" >
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

    <div class="row card theme-noborder">
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
        <section>
        <div class="theme-noborder card relative wrapper">
        <a href="profile.php"><img src="/moreimg/profilepic.jpeg" class="profile-img" style="height: 50px; width: 50px;"><span class="black">Robbie Green</span></a>
        <p class="font-md" style="padding: 10px;">This Picture is soooo amaziiiing!</p>
        <img  id="myImg" class="img" name="cust_image" src="/moreimg/wallpaper.jpg">
        <p class="topcorner font-sm">01/06/2018 11:16 PM</p>
        <span class="topcorner button fa fa-ellipsis-h"></span>
        </div>
        <br>
        </section>
        <section>
        <div class="theme-noborder card relative wrapper">
        <a href="profile.php"><img src="/moreimg/profilepic.jpeg" class="profile-img" style="height: 50px; width: 50px;"><span class="black">Robbie Green</span></a>
        <p class="font-md" style="padding: 10px;">SAMPLEAFKDSHFKJSAHKFHSD DSJKFHKSDAFHK LSAHFKJASH FKDSAHFKJHSADKJFHASDJFHASDJKFHSADKHF HFJKAH FJKDSHFKJADSH KFHSADJHDHSKFJAfkahf kjahfkjsdahfsdahfksja</p>
        <img  id="myImg" class="img" name="cust_image" src="/moreimg/no_image.jpg">
        <p class="topcorner font-sm">01/06/2018 11:16 PM</p>
        <span class="topcorner button fa fa-ellipsis-h"></span>
        </div>
        <br>
        </section>
        <!-- end of news feed content  !-->

        
                                
                                    <!-- <img name="cust_image" src='' style="display: none;" height="550" width="700" id="savedImage"> !-->
    </div>
    </div>
</div>
</div>

</body>

</html>