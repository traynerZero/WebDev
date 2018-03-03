
<?php
    session_start();

    include("func/connect.php");
    

    if(isset($_SESSION["userid"])){ 


     $userid = $_SESSION["userid"];

         $sql = "SELECT * FROM tbluser where id = '$userid'";
    $result = mysqli_query($con,$sql);
    if($result){

    $data = mysqli_fetch_assoc($result);
    $username = $data['username'];
        }
  
    }else{
      echo "<script>alert('Login First'); location.href = 'login.php';</script>";
    }

    

    ?>

<div class = "app-header">
  <h2 style="font-family:cursive; font-size: 24px;" align="center"><a href="" style="color: #9bf281;">Paintstagram</a></h2>
    <div class="navbar">
      <div class="dropdown">
      <button class="dropbtn" style="margin-right: 40px;">
        <span class="fa fa-bars"></span>
      </button>
      <div class="dropdown-content" style="right: 0; left: auto;">
        <a href="editaccount.php">Account Settings</a>
        <a href="about.php">About</a>
        <a class="cursor" id="logout">Logout</a>
      </div>
    </div>
    <a title="Message" id="msgbtn" class="cursor"><span class="fa fa-envelope"></span></a>
    <a id="notifbtn" title="Notification" class="cursor"><span class="fa fa-bell"></span></a>
    <a href="home.php" title="Home"><span class="fa fa-home"></span></a>
    <a href="profile.php?id=<?php echo $userid; ?>"><img src="/moreimg/img_avatar.png" class="profile-img" style="height: 25px; width: 25px;"></a>
    <a> Hi <?php echo $username;?> !</a>
    <label id="usernameid" style="display: none;"><?php echo $username;?></label>
    <label id="userid" style="display: none;"><?php echo $userid;?></label>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
  $('#logout').on('click',function(){ 
   $.ajax({
                                                    type: 'post',
                                                    url: '../func/logout.php',
                                                    success: function(response){
                                                      $("body").append(response);
                                                }
  });
 });
});
</script>