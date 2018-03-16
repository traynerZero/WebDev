<!DOCTYPE html>
<html>

<?php
  
  include('links.php');


?>

<body>
 <?php
    include('header.php');

     $userid = $_SESSION['userid'];
    // echo "<script>alert('Welcome ".$userid."');</script>";
     $query = $con->query("SELECT * FROM tbluser WHERE id = $userid LIMIT 1");
      if ($query->num_rows > 0) {
      $result = $query->fetch_assoc();
    }
 ?>
 
    <link rel="stylesheet" type="text/css" href="css/editaccount.css">
    <link rel="stylesheet" type="text/css" href="css/modal.css">
  <form action="func/updatevalid.php" method="post">
      
        <h1>Edit account</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name" value="<?php echo $result['username'] ?>">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email" autocomplete="false" value="<?php echo $result['email'] ?>">
          <label>Birthday:</label>
          <input type="date" name="birthday" value="<?php echo $result['birthday'] ?>">
          
          <label>Gender:</label>
          <input type="radio" id="male" value="1" name="user_gender"><label for="male" class="light">Male</label> &emsp;
          <input type="radio" id="female" value="2" name="user_gender"><label for="female" class="light">Female</label>
        </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Your profile</legend>
          <label for="bio">Biography:</label>
          <textarea id="bio" name="user_bio" ><?php echo $result['bio']?></textarea>
        </fieldset>
        <fieldset>
        <input type="button" value="update" name="updateBtn" onclick="openFunction()">
        <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <br>
      <label>Password:</label>
      <input type="Password" name="password" style="border: solid" value="">
      <input type="submit" name="btnSubmit" class="">
  </div>

</div>
      </form>


      <?php 

    if(($result['gender'])==1)
    {
      echo "<script>document.getElementById('male').checked = 'true';</script>";

    }

    else if(($result['gender'])==2)
    {
      echo "<script>document.getElementById('female').checked = 'true';</script>";

    }
      ?>


      <form method="POST" action="func/updatePasswordValid.php">
        <input type="button" value="change password" name="changePassBtn" onclick="changePass()">
                <!-- The Modal -->
        <div id="deleteModal" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <br>
              <label>Password:</label>
              <input type="Password" name="password" style="border: solid" value="">
              <br>
              <label>New Password:</label>
              <input type="Password" name="newPassword" style="border: solid" value="">
              <br>
              <label>Confirm NewPassword:</label>
              <input type="Password" name="confirmNewPassword" style="border: solid" value="">
              <input type="submit" name="btnSubmit" class="">
          </div>

        </div>

      </form>

      <form method="POST" action="func/deactivateValid.php">
        <input type="button" value="deactivate account" name="deactivateBtn" onclick="deactivateFunction()">
                <!-- The Modal -->
        <div id="deactivateModal" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <br>
              <label>Password:</label>
              <input type="Password" name="password" style="border: solid" value="">
              <input type="submit" name="btnSubmit" class="">
          </div>

        </div>

      </form>



</body>
<script type="text/javascript">
  // Get the modal
var modal = document.getElementById('myModal');
var deleteModal = document.getElementById('deleteModal');
var deactivateModal = document.getElementById('deactivateModal');


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close");

for (var i = span.length - 1; i >= 0; i--) {
  span[i].onclick = function() {
    modal.style.display = "none";
    deleteModal.style.display = "none";
}}
 
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    if (event.target == deleteModal) {
        deleteModal.style.display = "none";
    }
    if (event.target == deactivateModal) {
        deactivateModal.style.display = "none";
    }
}

function openFunction(){
  modal.style.display="block";
}

function changePass(){
  deleteModal.style.display = "block";
}

function deactivateFunction(){
  deactivateModal.style.display = "block";
}

</script>
</html>