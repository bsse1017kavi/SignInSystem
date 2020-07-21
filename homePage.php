<?php
    session_start();
    if(!$_SESSION['isSignedIn'] || $_SESSION['isSignedIn']==null)
    {
        header('Location: welcome.html');
    }
?>
<html>
    <head><title>Welcome</title></head>
    <style>
        .centered-element 
        {
            position: absolute;
            left: 48%;
            /*margin-left: -50px;*/
            top: 50%;
            /*margin-top: -50px;*/
        }

        .background
        {
            background-image: url("images/nature2.jpg");
        }

        .yellow-text
        {
            color: yellow;
            font-size: 36px;
        }

        .yellow-button
        {
            background-color: yellow;
            width: 150px;
        }
    </style>
    <body class="background">
        <div class="centered-element yellow-text">
            Welcome<br>
            <form action="signOut.php" method="POST">
                <input type = "submit" value = "Sign out" class="yellow-button">
            </form>
        </div>
    </body>
</html>