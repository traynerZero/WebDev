<!DOCTYPE html>
<html>
<head>
	<title>Paintstagram</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="main.css">
	<!-- stylesheet -->


    <!--scripts-->
    <link rel="stylesheet" type="text/css" href="css/modals.css">
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>
</head>
<h2 style="font-family:cursive; font-size: 32px;" align="center"><a href="index.php" style="color: black;">Paintstagram</a></h2>
<body>

  <form action="home.php" method="post">
      
        <h1>Sign Up</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email">
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="user_password">
          <label for="password">Confirm Password:</label>
          <input type="password" id="password" name="user_password">
          
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
        <button type="submit">Sign Up</button>
      </form>


</body>

</html>