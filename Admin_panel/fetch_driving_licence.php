<?php
    include('option_head.php');     //Header design with HTML.
?>


<!doctype html>
    <html lang="en">
      <head>
        <title>Driving Licence</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      </head>
      <body>
      <!--Page Direction-->
      <h6 class="pl-2 p"><a href="./index.php" class="a1">Admin Index</a> > <a class="a1" href="./service.php">Services Request</a> > Driving Licence Request</h6>

      <style>
          .a1
          {
              color:darkgray;
              font-size: 16px;
          }
          .p{font-size: 16px;}

          a{color:black;}
      </style>


    <div class="pl-1">

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


            //Executing sql query.
            $sql = "SELECT * FROM `dl_applicant_info`";
            $result = mysqli_query($connect, $sql);
   
        ?>    


        <!--Navigation bar-->

        <br>
        <div>
            <nav>
                <ul class="nav nav-tabs">

                <li class="nav-item">
                    <a class="nav-link active" href="#">Approval Request</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="fetch_dl_req.php">Data Correction Request</a>
                </li>

                </ul>
            </nav>
        </div><br>


        <!--Table start-->
        <?php
            //Displaying total rows of database.
            $total_rows = mysqli_num_rows($result);
            echo "";
            echo "(" . "$total_rows" . ")" . " Records found in the Database-";
            echo "";
        ?>

        <table class="table table-hover table-striped">
            <thead class="table_head2">
                <tr>
                  <th class="table_data1">NID/Passport no.</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Full Name</th>
                  <th>Gender</th>
                  <th>DOB</th>
                  <th>Birth Place</th>
                  <th>Birth Country</th>
                  <th>Mobile No.</th>
                  <th>Blood Group</th>
                  <th>Vehicles Type</th>
                  <th>Entry Time</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
            </thead>


            <?php

                if($total_rows > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $nid = $row['NIDPassport_number'];
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
                        $time = $row['Time'];

                        echo '<tr>

                        <th scope="row">'.$nid.'</th>
                        <td>'.$f_name.'</td>
                        <td>'.$l_name.'</td>
                        <td>'.$full_name.'</td>
                        <td>'.$gender.'</td>
                        <td>'.$dob.'</td>
                        <td>'.$pob.'</td>
                        <td>'.$cob.'</td>
                        <td>'.$mn.'</td>
                        <td>'.$bg.'</td>
                        <td>'.$tov.'</td>
                        <td>'.$time.'</td>
                        
                        <td class="td1">
                            <a class="btn btn-sm btn-primary glyphicon glyphicon-pencil text-light" href="dl_edit.php?edit_id='.$nid.'"> </a>
                        </td>
                        <td>
                            <a class="text-light btn btn-sm btn-danger glyphicon glyphicon-trash" href="dl_delete.php?del_id='.$nid.'" onclick="return delete_permission()"> </a>
                        </td>';
                              
                    }
                }
            ?>    
                        
        </table>

        <!--Making a JavaScript code for asking permission to Delete a Data-->
        <script>
            function delete_permission()
            {
                return Confirm('Are you sure you want to delete this record ?');
            }
        </script>

    </div>
    
    
          
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </body>
    </html>



    <style>
        .table_head2
        {
            background-color:rgb(10, 70, 70);
            color: white; 
        }
    </style>