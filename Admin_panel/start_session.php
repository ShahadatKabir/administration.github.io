<?php
    session_start();
    if(!isset($_SESSION['Admin_username']))
    {
        header("location:./admin_login.php");
        //echo "<script>location.replace('admin_login.php');</script>";
    }
?>