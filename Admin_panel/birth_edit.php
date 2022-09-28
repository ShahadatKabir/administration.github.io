<?php

//connecting to the database
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "birth_certificate";

//making connection to the database
$connect = mysqli_connect($server_name, $user_name, $password, $database_name);

if(!$connect)
{
    die ("Sorry..!! Faild to connect to the database." . mysqli_connect_error());
}


//Showing all the data from selected Serial no. for updating.
$id = $_GET['edit_id'];
$sql = "SELECT * FROM `bc_applicant_info` WHERE name = '$id'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);


                        $name = $row['name'];
                        $dob = $row['dob'];
                        $bp = $row['place_of_birth'];
                        $fn = $row['fathers_name'];
                        $fna = $row['fathers_nationality'];
                        $mn = $row['mothers_name'];
                        $mna = $row['mothers_nationality'];
                        $sex = $row['sex'];
                        $pa = $row['parmanent_address'];
                        $pdd = $row['present_address'];


//Chaecking if the Edit button is clicked or not.
if(isset($_POST['save_change']))
{
                        $name = $_POST['name'];
                        $dob = $_POST['dob'];
                        $bp = $_POST['place_of_birth'];
                        $fn = $_POST['fathers_name'];
                        $fna = $_POST['fathers_nationality'];
                        $mn = $_POST['mothers_name'];
                        $mna = $_POST['mothers_nationality'];
                        $sex = $_POST['sex'];
                        $pa = $_POST['parmanent_address'];
                        $pdd = $_POST['present_address'];

    $sql = "UPDATE `bc_applicant_info` SET name='$id',dob='$dob',place_of_birth='$bp',fathers_name='$fn',fathers_nationality='$fna',mothers_name='$mn',mothers_nationality='$mna',sex='$sex',parmanent_address='$pa',present_address='$pdd'";

    $result = mysqli_query($connect,$sql);

    if($result)
    {
        header('location: fetch_birth.php');
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
                <label>Name :</label>
                <input type="text" class="form-control" autocomplete="off" name="Name" value=<?php echo $id; ?>>
            </div>
            
            <div class="mb-3">
                <label>Date of  Birth :</label>
                <input type="text" class="form-control" autocomplete="off" name="Date of  Birth" value=<?php echo $dob; ?>>
            </div>

            <div class="mb-3">
                <label>Place Of  Birth :</label>
                <input type="text" class="form-control" autocomplete="off" name="Place Of  Birth" value=<?php echo $bp; ?>>
            </div>

            <div class="mb-3">
                <label>Father's name :</label>
                <input type="text" class="form-control" autocomplete="off" name="Father's name" value=<?php echo $fn; ?>>
            </div>

            <div class="mb-3">
                <label>Father's nationality :</label>
                <input type="text" class="form-control" autocomplete="off" name="Father's nationality" value=<?php echo $fna; ?>>
            </div>

            <div class="mb-3">
                <label>Mother's name :</label>
                <input type="date" class="form-control" autocomplete="off" name="Mother's name" value=<?php echo $mn; ?>>
            </div>

            <div class="mb-3">
                <label>Mother's nationality :</label>
                <input type="text" class="form-control" autocomplete="off" name="Mother's nationality" value=<?php echo $mna; ?>>
            </div>

            <div class="mb-3">
                <label>Sex :</label>
                <input type="text" class="form-control" autocomplete="off" name="Sex" value=<?php echo $sex; ?>>
            </div>

            <div class="mb-3">
                <label>Permanent Address:</label>
                <input type="text" class="form-control" autocomplete="off" name="Permanent Address" value=<?php echo $pa; ?>>
            </div>

            <div class="mb-3">
                <label>Present Address :</label>
                <input type="text" class="form-control" autocomplete="off" name="Present Address" value=<?php echo $pdd; ?>>
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