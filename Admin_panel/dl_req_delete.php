<?php
    //Connectiing to the database.
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $database_name = "driving_licence";


    //Making connection to the database
    $connect = mysqli_connect($server_name, $user_name, $password, $database_name);

    if(!$connect)
    {
        die ("Sorry..!!Failed to connect to the database." . mysqli_connect_error());
    }


    if(isset($_GET['del_id']))
    {
        $id = $_GET['del_id'];

        $sql = "DELETE FROM `dlicense_correct_info` WHERE NIDPassport_number = '$id' ";
        $result = mysqli_query($connect, $sql);

        if($result)
        {
            header('location: fetch_dl_req.php');
        }

        else
        {
            die ("FAiled to Delete the record." . mysqli_connect_error());
        }
    }
?>