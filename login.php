<!DOCTYPE html>
<html>
<head>
	<title>Paintstagram</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- stylesheet -->


    <!--scripts-->
    <link rel="stylesheet" type="text/css" href="css/modals.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
                                      $('#regBtn').on('click', function(){
                                            $('#registerform').show('slow');
                                        });
      });
    </script>
</head>

<h2 style="font-family:cursive; font-size: 32px;" align="center"><a href="index.php" style="color: black;">Paintstagram</a></h2>
<body>
  <div>
    <div>
      <form action="func/loginvalid.php" method="post" class="form-login column">
      
        <h1>Login</h1>
        
        <fieldset>          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user" autocomplete="false">
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" autocomplete="false">
          
        <button type="submit" style="padding: 0;width: 100%;"><h2>Sign in</h2></button>
        <br>
        <br>
        <br>
        <label  style="color: white;">Don't have an account? <a class="cursor" id="regBtn">Register</a></label>
      
    </fieldset>
    </form>

      <div  class="form-register" id="registerform">
        <h1>Sign Up</h1>
        <form action="func/registerFunc.php" method="post">
        <fieldset>

          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="user" name="user" required>
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="email" autocomplete="false" required>
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" autocomplete="false" required>
          <label for="password">Confirm Password:</label>
          <input type="password" id="password" autocomplete="false" required>
         
          <label>Birthday:</label>
          <input type="date" name="birthday" required>
          <br><br>
          <label>Gender:</label>
          <input type="radio" id="male" value="male" name="gender" required><label for="male" class="light">Male</label> &emsp;
          <input type="radio" id="female" value="female" name="gender" required><label for="female" class="light">Female</label>
        </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Your profile</legend>
          <label for="bio">Biography:</label>
          <textarea id="bio" name="bio"></textarea>
        </fieldset>
        <fieldset>
        <button type="submit">Sign Up</button>
      </fieldset>
      </form>
      </div>
    </div>
</body>

</html>