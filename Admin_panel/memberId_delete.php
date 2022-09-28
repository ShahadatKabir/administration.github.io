<?php

    //connecting to the database
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $database_name = "user_profile";


    //making connection to the database
    $connect = mysqli_connect($server_name, $user_name, $password, $database_name);

    if(!$connect)
    {
        die ("Sorry..!! Faild to connect to the database." . mysqli_connect_error());
    }

    if(isset($_GET['del_id']))
    {
        $id = $_GET['del_id'];

        $sql = "DELETE FROM `user_1` WHERE Id = '$id'";
        $result = mysqli_query($connect,$sql);

        if($result)
        {
            header('location: members.php');
        }

        else
        {
            die ("Failed to delete the record." . mysqli_connect_error());
        }
    }


?>
