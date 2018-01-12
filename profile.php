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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/literallycanvas.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/profile.js"></script>
    <script src="js/scripts.js"></script>
</head>
<body>
 <?php
    include('src/navbar.php');

 ?>
<h1>GitSocial <small>A social network for programmers.</small></h1>
<header>
  <figure class="profile-banner">
    <img src="https://unsplash.it/975/300" alt="Profile banner" />
  </figure>
  <figure class="profile-picture" 
    style="background-image: url('http://unsplash.it/150/150')">
  </figure>
  <div class="profile-stats">
    <ul>
      <li>13    <span>Projects</span></li>
      <li>1,354 <span>Commits</span></li>
      <li>32    <span>Following</span></li>
      <li>324   <span>Followers</span></li>
    </ul>
    <a href="javascript:void(0);" class="follow">
      Follow Nick
    </a>
  </div>
  <h1>Nick Dobie <small>nrdobie</small></h1>
</header>


</body>

</html>