<?php 

    session_start();
    //session_destroy();
    unset($_SESSION['username']);
    setcookie('username', 'abc', time()-10, '/');
    header('location: login.php');
?>