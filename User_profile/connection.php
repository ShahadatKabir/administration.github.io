<?php

    //connecting to the database
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $database = "user_profile";

    //making connection to the database
    $con = mysqli_connect($server_name, $user_name, $password, $database);

    if(!$con)
    {
        die ("Sorry..!! Field to connect to the database." . mysqli_connect_error());
    }
?>