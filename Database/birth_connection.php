<?php
    //connecting to the driving_licence database.
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "birth_certificate";


    //making connection-
    $connection = mysqli_connect($servername, $username, $password, $database);
    if(!$connection)
    {
        die("Sorry..!! We failed to connect to the database.".mysqli_connect_error()); 
    }
?>