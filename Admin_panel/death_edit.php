<?php

//connecting to the database
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "death_certificate";

//making connection to the database
$connect = mysqli_connect($server_name, $user_name, $password, $database_name);

if(!$connect)
{
    die ("Sorry..!! Faild to connect to the database." . mysqli_connect_error());
}


//Showing all the data from selected Serial no. for updating.
$id = $_GET['edit_id'];
$sql = "SELECT * FROM `dc_applicant_info` WHERE First_name = '$id'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);


                        $id = $row['First_name'];
                        $name2 = $row['Last_name'];
                        $ap = $row['Name_of_authorized_person'];
                        $mail= $row['Mail_of_authorized_person'];
                        $sr = $row['Relation_with_death_person'];
                        $date= $row['Dob'];
                        $mna = $row['Time_of_death'];
                        


//Chaecking if the Edit button is clicked or not.
if(isset($_POST['save_change']))
{
                        $id = $_POST['First_name'];
                        $name2 = $_POST['Last_name'];
                        $ap = $_POST['Name_of_authorized_person'];
                        $mail= $_POST['Mail_of_authorized_person'];
                        $sr = $_POST['Relation_with_death_person'];
                        $date= $_POST['Dob'];
                        $mna = $_POST['Time_of_death'];
  

    $sql = "UPDATE `dc_applicant_info` SET First_name='$id',Last_name='$name2',Name_of_authorized_person='$ap',Mail_of_authorized_person='$mail',Relation_with_death_person='$sr',Dob='$date',Time_of_death='$mna'";

    $result = mysqli_query($connect,$sql);

    if($result)
    {
        header('location: fetch_death.php');
    }

    else
    {
        die ("Failed to Update the record." . mysqli_connect_error());
    }
}


?>




<!doctype html>
<html lang="en">
<head>
<title>AP-edit_record</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--Displaying the project logo in Browser Tab-->
<link rel="icon" type="image" href="../Frontend_images/gvtBD.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/c28ce6a750.js" crossorigin="anonymous"></script>   
</head>
<body style="background:#f5f5f5;">

<div class="container">

<br><div class="card" style="width: 60%; box-shadow: 0px 0px 7px lightgray; margin-left: 20%;">
<div class="card-body">
    <h4 class="fas fa-pen"> &nbsp;&nbsp;Edit Record</h4>
    <style>
        h4{
            padding-left: 0%;
        }
    </style>
    <form method="POST">
            <br><div class="mb-3">
                <label>FIRST NAME :</label>
                <input type="text" class="form-control" autocomplete="off" name="name" value=<?php echo $id; ?>>
            </div>
            
            <div class="mb-3">
                <label>LAST NAME :</label>
                <input type="text" class="form-control" autocomplete="off" name="name2" value=<?php echo $name2; ?>>
            </div>

            <div class="mb-3">
                <label>NAME OF AUTHORIZED PERSON :</label>
                <input type="text" class="form-control" autocomplete="off" name="ap" value=<?php echo $ap; ?>>
            </div>

            <div class="mb-3">
                <label>MAIL OF AUTHORIZED PERSON :</label>
                <input type="text" class="form-control" autocomplete="off" name="mail" value=<?php echo $mail; ?>>
            </div>

            <div class="mb-3">
                <label>RELATION WITH THE DEATH PERSON</label>
                <input type="text" class="form-control" autocomplete="off" name="sr" value=<?php echo $sr; ?>>
            </div>

            <div class="mb-3">
                <label>DATE OF DEATH :</label>
                <input type="date" class="form-control" autocomplete="off" name="date" value=<?php echo $date; ?>>
            </div>

            <div class="mb-3">
                <label>TIME OF DEATH : </label>
                <input type="text" class="form-control" autocomplete="off" name="Mother's nationality" value=<?php echo $mna; ?>>
            </div>

            
            <center><button type="submit" class="btn btn-outline-success text-center" name="save_change">Update</button></center>
        </form>
</div>
</div>
</div>
<br><br>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>