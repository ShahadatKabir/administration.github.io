<?php
    //connecting to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "user_profile";

    //making connection to the database
    $connect = mysqli_connect($servername, $username, $password, $database);
    if(!$connect)
    {
        die("Sorry...!! We faield to connect." . mysqli_connect_error());
    }

    $id = $_GET['edit_id'];
    $sql = "SELECT * FROM `dl_applicant_info` WHERE Id = '$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);

    if(isset($_POST['update']))
    {
        $id = $_POST['Id'];
        $name = $_POST['Name'];
        $livesin = $_POST['Lives_in'];
        $mobile = $_POST['Mobile'];
        $email = $_POST['Email'];
        $work = $_POST['Work'];
        $education = $_POST['Education'];
        $citizen = $_POST['Citizen'];

        $sql = "UPDATE `user_1` SET `Id`='$id',`Name`='$name',`Lives_in`='$livesin',`Mobile`='$mobile',`Email`='$email',`Work`='$work',`Education`='$education',`Citizen`='$citizen' WHERE Id='$id'";

        $result = mysqli_query($connect, $sql);
        if($result)
        {
            echo "Success";
        }
        else
        {
            echo "Sorry..!! Faield to update.";
        }
    }
?>