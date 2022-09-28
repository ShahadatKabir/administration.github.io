<?php
    session_start();
    if(!isset($_SESSION['user_id']))
    {
        //header("location:User_login.php");
        echo "<script>location.replace('./User_login.php');</script>";
    }
?>