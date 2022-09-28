<?php
    include('header.php');
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Driving Licence records</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">

    <img src="./Frontend_images/web_cons.jpg" alt="">
    <!--<h1 class="h1" align="center" style="color:white;">Your inserted Records</h1>
  </div>
  
  <style>
    .h1
	{
		background-color:rgb(5, 109, 109);
		color:white;
		border-radius: 10px;
	}
  </style>-->

  <?php

    //connecting to the database.
    /*$servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "driving_licence";

    //Making a connection to the database.
    $connect = mysqli_connect($servername, $username, $password, $database_name);
    if(!$connect)
    {
        die ("Sorry..!! Fail to connect to the Database." . mysqli_connect_error());
    }


    //Executing sql query
    $sql = "SELECT * FROM `dl_applicant_info`";
    $result = mysqli_query($connect, $sql);

  ?>


<!--Fatching the data to this page-->
    <div class="container">

        <table class="table table-hover table-striped">
            <thead class="">
                <tr>
                  <th class="table_data1">Serial no.</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Full Name</th>
                  <th>Gender</th>
                  <th>DOB</th>
                  <th>Age</th>
                  <th>Birth Place</th>
                  <th>Birth Country</th>
                  <th>Mobile No.</th>
                  <th>Blood Group</th>
                  <th>Vehicles Type</th>
                </tr>
            </thead>


            <tbody>
                <?php
                    //calculating total rows of the database.
                    $total_rows = mysqli_num_rows($result);

                    if($total_rows > 0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $serial_no = $row['Serial_no'];
                            $f_name = $row['First_name'];
                            $l_name = $row['Last_name'];
                            $full_name = $row['Full_name'];
                            $gender = $row['Gender'];
                            $dob = $row['DOB'];
                            $age = $row['Age'];
                            $pob = $row['Place_of_birth'];
                            $cob = $row['Country_of_birth'];
                            $mn = $row['Mobile_number'];
                            $bg = $row['Blood_group'];
                            $tov = $row['Type_of_vehicles'];

                            echo '<tr>

                            <th scope="row">'.$serial_no.'</th>
                            <td>'.$f_name.'</td>
                            <td>'.$l_name.'</td>
                            <td>'.$full_name.'</td>
                            <td>'.$gender.'</td>
                            <td>'.$dob.'</td>
                            <td>'.$age.'</td>
                            <td>'.$pob.'</td>
                            <td>'.$cob.'</td>
                            <td>'.$mn.'</td>
                            <td>'.$bg.'</td>
                            <td>'.$tov.'</td>';
                        }
                    }*/
        
                ?>
            <!--</tbody>
        </table>-->

    </div>
      

    <?php
        include('footer.php');
    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>