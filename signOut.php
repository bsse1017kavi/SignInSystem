<?php
    session_start();
    $_SESSION['isSignedIn'] = false;
    session_destroy();
    header('Location: welcome.html');
?>