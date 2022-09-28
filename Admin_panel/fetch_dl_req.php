<?php
  include('option_head.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div>
    <nav>
      <ul class="nav nav-tabs">

        <li class="nav-item">
          <a class="nav-link" href="fetch_driving_licence.php">Approval Request</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="#">Data Correction Request</a>
        </li>

      </ul>
    </nav>
  </div><br>

  <div class="container">
    <p class="table_head1 p-1 mt-2">Data Correction Request -</p>
  </div>

  <style>
    .table_head1
      {
        background-color: maroon;
        color: white;
        border-width: 10px;
        border-color: black;
        border-radius: 8px;
        font-size: 27px;
      }
  </style>


  <?php
  
      //Connecting to the database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database_name = "driving_licence";



      //Making connection to the database
      $connect = mysqli_connect($servername, $username, $password, $database_name);

      if(!$connect)
      {
          die ("Sorry..!!Failed to connect to the database." . mysqli_connect_error());
      }



      //Executing sql query
      $sql = "SELECT * FROM `dlicense_correct_info`";
      $result = mysqli_query($connect, $sql);



      //calculating total rows of the database.
      $total_rows = mysqli_num_rows($result);

  ?>


  <!--Fatching all the data from dl_connect_info Database-->
  <div class="container">

    <?php
      echo "Total (" . "$total_rows" . ")" . " Request pending -";
    ?>


    <table class="table table-hover table-striped">
      <thead class="">
          <tr>
            <th class="table_data1">NID / Passport no.</th>
            <th>Full name</th>
            <th>Update Information</th>
            <th>Action<th>
          </tr>
      </thead>


      <tbody>
        <?php

          if($total_rows > 0)
          {
              while($row = mysqli_fetch_assoc($result))
              {
                $id = $row['NIDPassport_number'];
                $full_name = $row['Full_name'];
                $text = $row['Text_info'];

                echo '<tr>

                <th scope="row">'.$id.'</th>
                <td>'.$full_name.'</td>
                <td>'.$text.'</td>

                <td class="td1">
                  <a class="text-light btn btn-sm btn-danger glyphicon glyphicon-trash" href="dl_req_delete.php?del_id='.$id.'" onclick="return delete_permission()"> </a>
                </td>';
              }
          }
          
        ?>
      </tbody>
    </table>

  </div>

</body>
</html>