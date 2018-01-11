
<!DOCTYPE html>
<html>
<head>
	<title>Paintstagram</title>
    <?php include "links.php" ?>
    
    <script src="js/scripts.js"></script>
</head>

<body>

  <?php include "header.php"; ?>

            <button type="button" style="width: 100%; padding: 10px; " class="letspaint"><strong>LET'S PAINT</strong></button>
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
    <a href="#"><h3 style="color: gray" align="left">FIND FRIENDS <span class="fa fa-address-book-o"></span></h3></a>

    <div class="col-md relative wrapper" align="left">
        <a href="#"><img src="/moreimg/img_avatar.png" class="profile-img" style="height: 50px; width: 50px;"><p class="font-md">Sample Person</p></a>
        <button type="button" class="theme-noborder">Add Friend +</button>
    </div>
    <div class="col-md relative wrapper" align="left">
        <a href="#"><img src="/moreimg/img_avatar.png" class="profile-img" style="height: 50px; width: 50px;"><p class="font-md">Sample Person</p></a>
        <button type="button" class="theme-noborder">Add Friend +</button>
    </div>
    <div class="col-md relative wrapper" align="left">
        <a href="#"><img src="/moreimg/img_avatar.png" class="profile-img" style="height: 50px; width: 50px;"><p class="font-md">Sample Person</p></a>
        <button type="button" class="theme-noborder">Add Friend +</button>
    </div>


    </div>

    <div class="row card theme-noborder">
        <a href="#"><h3 style="color: gray" align="left">TRENDING! <span class="fa fa-photo"></span></h3></a>
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

    <div class="theme-noborder column left" id="displayhere">
        <!-- news feed content  !-->
        <section>
        <div class="card relative wrapper">
        <a href=""><img src="/moreimg/img_avatar.png" class="profile-img" style="height: 50px; width: 50px;"><span class="black">Sample Person</span></a>
        <p class="font-md" style="padding: 10px;">SAMPLEAFKDSHFKJSAHKFHSD DSJKFHKSDAFHK LSAHFKJASH FKDSAHFKJHSADKJFHASDJFHASDJKFHSADKHF HFJKAH FJKDSHFKJADSH KFHSADJHDHSKFJAfkahf kjahfkjsdahfsdahfksja</p>
        <img  id="myImg" class="img" name="cust_image" src="/moreimg/no_image.jpg">
        <p class="topcorner font-sm">01/06/2018 11:16 PM</p>
        <span class="topcorner button fa fa-ellipsis-h"></span>
        </div>
        <br>
        </section>
        <section>
        <div class="card relative wrapper">
        <a href=""><img src="/moreimg/img_avatar.png" class="profile-img" style="height: 50px; width: 50px;"><span class="black">Sample Person</span></a>
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
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>


</body>