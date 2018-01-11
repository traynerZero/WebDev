<!DOCTYPE html>
<html>
<head>
	<title>Paintstagram</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="main.css">
	<!-- stylesheet -->


    <!--scripts-->
    <link rel="stylesheet" type="text/css" href="css/modals.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/scripts.js"></script>
</head>
<body>
 <?php
    include('header.php');
 ?>
<form action="index.html" method="post">
      
        <h1>Login</h1>
        
        <fieldset>          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email">
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="user_password">
          
        <button type="submit">Sign Up</button>
      </form>



</body>

</html>