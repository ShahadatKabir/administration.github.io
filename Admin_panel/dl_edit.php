        <?php

            //connecting to the database
            $server_name = "localhost";
            $user_name = "root";
            $password = "";
            $database_name = "driving_licence";

            //making connection to the database
            $connect = mysqli_connect($server_name, $user_name, $password, $database_name);

            if(!$connect)
            {
                die ("Sorry..!! Faild to connect to the database." . mysqli_connect_error());
            }

 
            //Showing all the data from selected Serial no. for updating.
            $id = $_GET['edit_id'];
            $sql = "SELECT * FROM `dl_applicant_info` WHERE NIDPassport_number = '$id'";
            $result = mysqli_query($connect, $sql);
            $row = mysqli_fetch_assoc($result);

            
            $id = $row['NIDPassport_number'];
            $f_name = $row['First_name'];
            $l_name = $row['Last_name'];
            $full_name = $row['Full_name'];
            $gender = $row['Gender'];
            $dob = $row['DOB'];
            $pob = $row['Place_of_birth'];
            $cob = $row['Country_of_birth'];
            $mn = $row['Mobile_number'];
            $bg = $row['Blood_group'];
            $tov = $row['Type_of_vehicles'];
            

            //Chaecking if the Edit button is clicked or not.
            if(isset($_POST['save_change']))
            {
                $id = $_POST['NIDPassport_Number'];
                $f_name = $_POST['First_name'];
                $l_name = $_POST['Last_name'];
                $full_name = $_POST['Full_name'];
                $gender = $_POST['Gender'];
                $dob = $_POST['DOB'];
                $pob = $_POST['Place_of_birth'];
                $cob = $_POST['Country_of_birth'];
                $mn = $_POST['Mobile_number'];
                $bg = $_POST['Blood_group'];
                $tov = $_POST['Type_of_vehicles'];

                $sql = "UPDATE `dl_applicant_info` SET NIDPassport_number='$id',First_name='$f_name',Last_name='$l_name',Full_name='$full_name',Gender='$gender',DOB='$dob',Place_of_birth='$pob',Country_of_birth='$cob',Mobile_number='$mn',Blood_group='$bg',Type_of_vehicles='$tov' WHERE NIDPassport_number='$id'";

                $result = mysqli_query($connect,$sql);

                if($result)
                {
                    header('location: fetch_driving_licence.php');
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
                            <label>NID/Passport no.</label>
                            <input type="text" class="form-control" autocomplete="off" name="NIDPassport_Number" value=<?php echo $id; ?>>
                        </div>
                        
                        <div class="mb-3">
                            <label>First Name :</label>
                            <input type="text" class="form-control" autocomplete="off" name="First_name" value=<?php echo $f_name; ?>>
                        </div>

                        <div class="mb-3">
                            <label>Last Name :</label>
                            <input type="text" class="form-control" autocomplete="off" name="Last_name" value=<?php echo $l_name; ?>>
                        </div>

                        <div class="mb-3">
                            <label>Full Name :</label>
                            <input type="text" class="form-control" autocomplete="off" name="Full_name" value=<?php echo $full_name; ?>>
                        </div>

                        <div class="mb-3">
                            <label>Gender :</label>
                            <input type="text" class="form-control" autocomplete="off" name="Gender" value=<?php echo $gender; ?>>
                        </div>

                        <div class="mb-3">
                            <label>DOB :</label>
                            <input type="date" class="form-control" autocomplete="off" name="DOB" value=<?php echo $dob; ?>>
                        </div>

                        <div class="mb-3">
                            <label>Birth Place :</label>
                            <input type="text" class="form-control" autocomplete="off" name="Place_of_birth" value=<?php echo $pob; ?>>
                        </div>

                        <div class="mb-3">
                            <label>Birth Country :</label>
                            <input type="text" class="form-control" autocomplete="off" name="Country_of_birth" value=<?php echo $cob; ?>>
                        </div>

                        <div class="mb-3">
                            <label>Mobile No. :</label>
                            <input type="text" class="form-control" autocomplete="off" name="Mobile_number" value=<?php echo $mn; ?>>
                        </div>

                        <div class="mb-3">
                            <label>Blood Group :</label>
                            <input type="text" class="form-control" autocomplete="off" name="Blood_group" value=<?php echo $bg; ?>>
                        </div>

                        <div class="mb-3">
                            <label>Vehicles Type :</label>
                            <input type="text" class="form-control" autocomplete="off" name="Type_of_vehicles" value=<?php echo $tov; ?>>
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