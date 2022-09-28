<?php
    include('start_session.php');        //Checking the user is loged in or not.
?>

<?php include('head.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Requests for Services</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!--Starting Card in Service page-->
    <div class="info">

      <div class="card" style="width: 88%; box-shadow: 0px 0px 7px lightgray;">
        <h5 class="card-header">Driving Licence Request</h5>

        <div class="card-body">
          <img class="mb-3" src="./img/dl.jpg" alt="">
    
          <h5 class="card-title">APPROVE DRIVING LICENCE REQUEST OR MODIFY IT</h5>
          <a href="./fetch_driving_licence.php" class="btn btn-success">View Request</a>
        </div>
      </div><br>

      <div class="card" style="width: 88%; box-shadow: 0px 0px 7px lightgray;">
        <h5 class="card-header">Birth Certificate Request</h5>

        <div class="card-body">
          <img class="mb-3" src="./img/bc.jpg" alt="">
    
          <h5 class="card-title">APPROVE BIRTH CERTIFICATE REQUEST OR MODIFY IT</h5>
          <a href="fetch_birth.php" class="btn btn-success">View Request</a>
        </div>
      </div><br>

      <div class="card" style="width: 88%; box-shadow: 0px 0px 7px lightgray;">
        <h5 class="card-header">Death Certificate Request</h5>

        <div class="card-body">
          <img class="mb-3" src="./img/dc.jpg" alt="">
    
          <h5 class="card-title">APPROVE DEATH CERTIFICATE REQUEST OR MODIFY IT</h5>
          <a href="fetch_death.php" class="btn btn-success">View Request</a>
        </div>
      </div><br>

      <div class="card" style="width: 88%; box-shadow: 0px 0px 7px lightgray;">
        <h5 class="card-header">NID Card Request</h5>

        <div class="card-body">
          <img class="mb-3" src="./img/nid.jpg" alt="">
    
          <h5 class="card-title">APPROVE NID CARD REQUEST OR MODIFY IT</h5>
          <a href="./fetch_nid.php" class="btn btn-success">View Request</a>
        </div>
      </div><br>

    </div>



    <style>
      .info{
        margin: 20px;
        color: black;
        width: 80%;
        margin-left: 230px;
      }

      .info div{
        margin-bottom: 20px;         
      }
      
      .card
      {
        width:950px;
      }
    </style>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>