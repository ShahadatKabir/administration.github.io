<?php
    //include('start_session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Displaying the project logo in Browser Tab-->
  <link rel="icon" type="image" href="../Frontend_images/gvtBD.png">

  <title>Admin/Members_list</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light pl-5" style="width: 100%; box-shadow: 0px 0px 7px lightgray;">
        <ul class="navbar-nav">
            <li class="nav-item">
                <div class="pt-3">
                    <a class="nav-link glyphicon glyphicon-home" href="./index.php"></a>
                </div> 
            </li>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li>
                <p class="pt-3 pl-3 div_head">Members -</p>   
            </li>
        </ul>
    </nav>                 
    
    <style>
        .div_head
        {
            text-align : left;
            
            color : gray;
            font-size : 20px;
        }
    </style>

    <?php

        //connecting to the database
        $server_name = "localhost";
        $user_name = "root";
        $password = "";
        $database_name = "user_profile";


        //making connection to the database
        $connect = mysqli_connect($server_name, $user_name, $password, $database_name);

        if(!$connect)
        {
            die ("Sorry..!! Faild to connect to the database." . mysqli_connect_error());
        }

        //Executing sql query.
        $sql = "SELECT * FROM `user_1`";
        $result = mysqli_query($connect, $sql);

        $total_rows = mysqli_num_rows($result);
    ?>  

    <div class="container">
        <p><?php echo "$total_rows" . " Members in Service."; ?></p>
            
        <style>
            p{
                font-size: 22px;
            }
        </style>
            
    <div class="card" style="width: 100%; box-shadow: 0px 0px 3px lightgray;">
        <div class="card-body"><br>

            <form class="d-flex">
                <input style="margin-left: 68%;" class="form-control me-2" type="search" placeholder="Search by ID" aria-label="Search">&nbsp;&nbsp;
                <button class="btn btn-success glyphicon glyphicon-search" type="submit"></button>
            </form><br>

            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">NID/Passport no.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone no</th>
                    <th scope="col">Email</th>
                    <th scope="col">Work Place</th>
                    <th scope="col">Education</th>
                    <th scope="col">Citizen</th>
                    <th scope="col">Password</th>
                    <th scope="col">Account Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if($total_rows > 0)
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {
                                $nid = $row['Id'];
                                $name = $row['Name'];
                                $address = $row['Lives_in'];
                                $mobile = $row['Mobile'];
                                $email = $row['Email'];
                                $work = $row['Work'];  
                                $education = $row['Education'];
                                $citizen = $row['Citizen'];   
                                $password = $row['Password'];                  

                                echo '<tr>

                                <th scope="row">'.$nid.'</th>
                                <td>'.$name.'</td>
                                <td>'.$address.'</td>
                                <td>'.$mobile.'</td>
                                <td>'.$email.'</td>
                                <td>'.$work.'</td>
                                <td>'.$education.'</td>
                                <td>'.$citizen.'</td>
                                <td>'.$password.'</td>
                                
                                <td class="td1">
                                    <a class="btn btn-sm btn-danger glyphicon glyphicon-trash text-light" href="memberId_delete.php?del_id='.$nid.'"> Delete</a>
                                </td>';                              
                            }
                        }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>
    </div>

</body>
</html>