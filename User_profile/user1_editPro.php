<?php
    include('../start_session.php');
?>

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

    //Showing all the data from selected Serial no. for updating.
    $id = $_GET['edit_id'];
    $sql = "SELECT * FROM `user_1` WHERE Id = '$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    
    $id = $row['Id'];
    $name = $row['Name'];
    $livesin = $row['Lives_in'];
    $mobile = $row['Mobile'];
    $email = $row['Email'];
    $work = $row['Work'];
    $education = $row['Education'];
    $citizen = $row['Citizen'];
    $psd = $row['Password'];
                
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $nid = $_POST['nid'];
        $livesin = $_POST['levesin'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $work = $_POST['work'];
        $education = $_POST['education'];
        $citizen = $_POST['citizen'];
        $psd = $_POST['password'];

        $sql = "UPDATE `user_1` SET Id='$nid', Name='$name',Lives_in='$livesin',Mobile='$mobile',Email='$email',Work='$work',Education='$education',Citizen='$citizen',Password='$psd' WHERE Id='$id'";

        $result = mysqli_query($connect, $sql);
        if($result)
        {
            //echo '<script type="text/javascript">alert("Profile Updated")</script>';
            header('location: user1_id.php');
        }
        else
        {
            echo '<script type="text/javascript">alert("Please check your NID/Passport no.")</script>';
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--Displaying the project logo in Browser Tab-->
  <link rel="icon" type="image" href="../Frontend_images/gvtBD.png">
  <title>DPSA-edit_profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/c28ce6a750.js" crossorigin="anonymous"></script>
</head>
<body style="background:#f5f5f5;">
<div class="container">
    <br><br>
    <div class="card" style="width: 50rem; margin-left: 13%;">
        <br>
        <div class="card-body">
            <p class="fas fa-pen"> &nbsp;Update Your Profile</p>
            <style>
                p{
                    font-size: 22px;
                    font-style: normal;
                }
            </style>

            <br><br>
            <form action="" Method="POST">
            <p style="color: red; font-size: 15px;">(Required)* -Please mention your given NID / Passport number before change any of the record.</p>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="id" id="floatingPassword" placeholder="Given NID/Passport no" autocomplete="off" required>
                <label for="floatingPassword">Given NID/Passport number -> <?php echo $id;?></label>
            </div><hr><br>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="nid" id="floatingPassword" placeholder="New NID/Passport no" autocomplete="off" value=<?php echo $id;?>>
                <label for="floatingPassword">New NID/Passport number </label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Name" autocomplete="off" value=<?php echo $name;?>>
                <label for="floatingInput">Name </label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="levesin" id="floatingInput" placeholder="Lives in" autocomplete="off" value=<?php echo $livesin;?>>
                <label for="floatingInput">Lives in </label>
            </div>
            
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="mobile" id="floatingInput" placeholder="Mobile no." autocomplete="off" value=<?php echo $mobile;?>>
                <label for="floatingInput">Mobile no. </label>
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" autocomplete="off" value=<?php echo $email;?>>
                <label for="floatingInput">Email </label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="work" id="floatingInput" placeholder="Work" autocomplete="off" value=<?php echo $work;?>>
                <label for="floatingInput">Work </label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="education" id="floatingInput" placeholder="Education" autocomplete="off" value=<?php echo $education;?>>
                <label for="floatingInput">Education </label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="citizen" id="floatingInput" placeholder="Citizen" autocomplete="off" value=<?php echo $citizen;?>>
                <label for="floatingInput">Citizen </label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="password" id="floatingInput" placeholder="Password" autocomplete="off" value=<?php echo $psd;?>>
                <label for="floatingInput">Password </label>
            </div><br>

            <div class="" style="text-align:center;">
                <input class="btn btn-outline-success" id="submit" type="submit" name="update" value="Update">
            </div>
            </form>
        </div>
    </div>
</div>

<style>
    .card{
        box-shadow: 1px 1px 4px 0px; gray;
        border-top: 3px;
        border-top-style: solid; 
        border-top-color: green;
    }
    button{
        margin-left: 43%;
    }
</style>
<br><br>
    
</body>
</html>