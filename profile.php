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

        <div id="user_header">
            <div id="user">

                <div id="user_picture">
                    <div id="picture_box">
                        <img src="https://en.gravatar.com/userimage/54162376/6fa5c4908077ceddb6388f7cad1a1187.jpg?size=100">
                    </div>
                </div>
                <div id="user_info">
                    <h2 class="user_name">Robbie Green</h2>
                    <hr>
                    <ul id="user_list">
                        <li>
                            <i class="icon-building info_icon"></i>
                            </span> Advantage Screen Printing</li>
                        <li>
                            <span class="info_icon">
                                <i class="icon-briefcase"></i>
                            </span> Creative Director</li>
                        <li>
                            <span class="info_icon">
                                <i class="icon-book"></i>
                            </span> BFA In Graphic Arts</li>
                    </ul>
                </div>
            </div>
        </div>

</body>

</html>