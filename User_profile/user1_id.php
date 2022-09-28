<?php
    include('../start_session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!--Displaying the project logo in Browser Tab-->
  <link rel="icon" type="image" href="../Frontend_images/gvtBD.png">
  <title>DPSA-profile</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/c28ce6a750.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "user_profile";

    $connect = mysqli_connect($servername, $username, $password, $database);

    if(!$connect)
    {
        die("Sorry...!!Faield to connect." . mysqli_connect_error());
    }

    //Storing a particular user id loged in by a user.
    $uid = $_SESSION['user_id'];

    //Selecting only the given user id from the database.
    $sql = "SELECT * FROM `user_1` WHERE Id = '$uid'";
    $result = mysqli_query($connect, $sql);
    $total_rows = mysqli_num_rows($result);

    if($total_rows > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $id = $row['Id'];
            $name = $row['Name'];
            $livesin = $row['Lives_in'];
            $mobile = $row['Mobile'];
            $email = $row['Email'];
            $work = $row['Work'];
            $education = $row['Education'];
            $citizen = $row['Citizen'];
            $password = $row['Password'];
        }
    }
?>
<div class="div1">
    <div class="container sub_div">
        <br><a class="fas fa-arrow-left link-light" href="../index.php"></a>
    </div>
    <br><br><br><br><br>
    <table>
        <tr>
            <td>
                <img src="./usr1.PNG" alt="">
            </td>
            <td>
                <p class="p1"><?php echo "$name"; ?></p>
                <p style="color: white; font-size: 17px; padding-left: 170px;" class="fas fa-id-badge"> &nbsp;&nbsp;&nbsp;(Your Profile)</p>
            </td>
        </tr>
        <?php
            //session_start();
            $_SESSION['user_name'] = "$name";  //Taking the loged in account's name to the header file in navigation bar.
        ?>
    </table>
    <hr><br>
    
    <style>
        img{
            border-radius : 50%;
            height: 160px;
            margin-left : 90%;
        }
        .div1{
            background-color: rgb(69, 57, 70);
            width: 100%;
        }
        .sub_div{
            font-size: 20px;
        }
        .p1{
            color: white;
            font-size: 25px;
            padding-top: 50px;
            padding-left: 170px;
        }
    </style>
</div>
<div style="background:#f5f5f5";>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
            <br><div class="card ml-5" style="width: 35rem;">
                    <div class="card-body">
                        <p class="fas fa-user"> &nbsp;&nbsp;&nbsp;Member</p><br>
                        <p class="fas fa-map-marker"> &nbsp;&nbsp;&nbsp; <b>Lives in</b> <?php echo"$livesin"; ?></p><br><hr>
                        <p style="font-size:14px; font-weight:bold;">Your Preferences</p>
                        <ul>
                            <li>Receive messeges from Admin.</li>
                            <li>View latest news / notice from govt.</li>
                            <li>Get govt. services</li>
                            <li>Complain your problems</li>
                        </ul>      
                    </div>
                </div><br>
                <div class="card ml-5" style="width: 35rem;">
                    <div class="card-body">
                        <p style="font-size:14px; font-weight:bold;">Contact Information&nbsp;&nbsp;&nbsp;&nbsp;<i class=""></i></p><hr>
                        <p class="fas fa-phone"> &nbsp;&nbsp;&nbsp;+880 <?php echo"$mobile"; ?></p><br>
                        <p class="fas fa-envelope"> &nbsp;&nbsp;&nbsp;<?php echo"$email"; ?></p><br><br>
                    </div>
                </div><br>
                <div>                 
                    <?php 
                        echo'<a href="user1_editPro.php?edit_id='.$id.'"><button class="btn btn-success ml-5" type="button">Update Profile</button></a> ';
                    ?>   
                </div>
            </div>

            <div class="col-lg-8">
                <div>   
                <br><div class="row pl-5" style="width: 86rem;">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title fas fa-passport"><b> &nbsp;&nbsp;&nbsp;NID / Passport Number</b></h5><hr>
                                    <p><?php echo"$id"; ?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-lock"></i></p>      
                                </div>
                            </div>
                        </div>
                    </div>   
                </div><br>
                <div>   
                    <div class="row pl-5" style="width: 86rem;">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title fas fa-briefcase"><b> &nbsp;&nbsp;&nbsp;Work</b></h5><hr>
                                    <p><?php echo"$work"; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div><br>
                <div>   
                    <div class="row pl-5" style="width: 86rem;">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title fas fa-graduation-cap"><b> &nbsp;&nbsp;&nbsp;Education</b></h5><hr>
                                    <p><?php echo"$education"; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div><br>
                <div>   
                    <div class="row pl-5" style="width: 86rem;">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title fas fa-globe"><b> &nbsp;&nbsp;&nbsp;Citizen</b></h5><hr>
                                    <p><?php echo"$citizen"; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div><br>
                <div>   
                    <div class="row pl-5" style="width: 86rem;">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title fas fa-lock"><b> &nbsp;&nbsp;&nbsp;Password</b></h5><hr>
                                    <p><?php echo"$password"; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>

        <style>
            p{
                font-family : tahoma;
                font-weight : normal;
                font-size : 15px;
            }

            .card{
                box-shadow: 0px 1px 2px 0px gray;
            }
        </style>

    </div>



    <br><br><br><br><br>
</div>
</body>
</html>

<?php
    include('../footer.php');
?>