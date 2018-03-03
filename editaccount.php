<!DOCTYPE html>
<html>

<?php
  
  include('links.php');

?>

<body>
 <?php
    include('header.php');
 ?>
 
    <link rel="stylesheet" type="text/css" href="css/editaccount.css">
  <form action="index.html" method="post">
      
        <h1>Edit account</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email" autocomplete="false" value=" ">
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="user_password" autocomplete="false" value=" ">
          
          <label>Age:</label>
          <input type="radio" id="under_13" value="under_13" name="user_age"><label for="under_13" class="light">Under 13</label>&emsp;
          <input type="radio" id="over_13" value="over_13" name="user_age"><label for="over_13" class="light">13 or older</label>
          <br><br>
          <label>Gender:</label>
          <input type="radio" id="male" value="male" name="user_gender"><label for="male" class="light">Male</label> &emsp;
          <input type="radio" id="female" value="female" name="user_gender"><label for="female" class="light">Female</label>
        </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Your profile</legend>
          <label for="bio">Biography:</label>
          <textarea id="bio" name="user_bio"></textarea>
        </fieldset>
        <fieldset>
        <button type="submit" class="theme-noborder">Save changes</button>
      </form>


</body>

</html>