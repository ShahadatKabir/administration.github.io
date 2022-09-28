<?php
    //connecting to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "user_profile";

    //storing data from HTML form
    $id = $_POST["nid"];
    $name = $_POST["name"];
    $mobileno = $_POST["mobile"];
    $email = $_POST["email"];
    $psd = $_POST['password'];
    $file = $_FILES['file'];

    //making connection to the database
    $connect = mysqli_connect($servername, $username, $password, $database);
    if(!$connect)
    {
        die("Sorry...!! We faield to connect." . mysqli_connect_error());
    }

    //inserting data into the database
    $push = "INSERT INTO `user_1`(`Id`, `Name`, `Mobile`, `Email`, `Password`) VALUES ('$id','$name','$mobileno','$email','$psd')";

    if(mysqli_query($connect,$push))
    {
        header('location: ../index.php');
        
        //echo "Record Updated";
    }
    else
    {
        echo "Faield to insert. Please try again..!!";
    }
?>