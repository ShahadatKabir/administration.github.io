<?php

    //Storing data from html form.
    $id = $_POST["nid"];
    $full_name = $_POST["full_name"];
    $text = $_POST["text"];

    include('dl_connection.php');  //including the connection file which is making connection to the Database.

    $sql = "INSERT INTO `dlicense_correct_info`(`NIDPassport_number`, `Full_name`, `Text_info`) VALUES ('$id','$full_name','$text')";

    if(mysqli_query($connection, $sql))
    {
        echo "Request send successfully.";
    }

    else
    {
        echo "Failed to send the request..!!";
    }


?>