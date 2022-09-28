<?php
    include('header.php');
?>


<!doctype html>
<html lang="en">
  <head>
    <title>DPSA-Service</title>
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
      
    <!--Starting of Service cards-->
    <div class="container">

    <h4><a href="./index.php">Home</a> > Services</h4><br>

        <table>
            <tr>
                <td class="pl-5">
                    <div class="card shadow inner">
                        <a href="./Driving licence.php"><img class="card-img" src="./Frontend_images/driving_licence.jpg" alt=""></a>                       
            
                        <div class="dl-card">
                            <p class="pt-3">Apply for a Driving licence</p>
                        </div> 
                    </div>
                </td>

                <td class=" pl-5">
                    <div class="card shadow inner">
                        <a href="./nid.php"><img class="card-img" src="./Frontend_images/NID card.jpg" alt=""></a>                       
            
                        <div class="dl-card">
                            <p class="pt-3">Apply for NID card</p>
                        </div>
                    </div>
                </td>

                <td class="pl-5">
                    <div class="card shadow inner">
                        <a href="./Birth Certificate.php"><img class="card-img" src="./Frontend_images/birth certificate.jpg" alt=""></a>
                                   
                        <div class="dl-card">
                            <p class="pt-3">Apply for Birth certificate</p>
                        </div>
                    </div>
                </td>

                <td class="pl-5">
                    <div class="card shadow inner">
                        <a href="./Death certificate.php"><img class="card-img" src="./Frontend_images/death certificate.jpg" alt=""></a>
                                  
                        <div class="dl-card">
                            <p class="pt-3">Apply for Death certificate</p>
                        </div>
                    </div> 
                </td>

                <!--<td class="pl-5">
                    <div class="card shadow inner">
                        <a href="#"><img class="card-img" src="./Frontend_images/electric bill.jpg" alt=""></a>
                                      
                        <div class="dl-card">
                            <p class="pt-3">Pay Electric Bill</p>
                        </div>
                    </div>
                </td>-->
            </tr>
        </table>    
    </div>

<br><br>

    <div class="container">
        <table>
            <tr>
                <!--<td class="pl-5">
                    <div class="card shadow inner">
                        <a href="#"><img class="card-img" src="./Frontend_images/wasa bill.jpg" alt=""></a>
                                        
                        <div class="dl-card">
                            <p class="pt-3">Pay Water Bill (WASA)</p>
                        </div>
                    </div>
                </td>-->         
            </tr>
        </table>           
    </div><br><br><br>
    <!--Ending of Service cards-->


    <!--Starting of Service card's CSS code-->
    <style>
        .card{
            height: 268px;
            width: 240px;
            border-radius: 7px;
        }

        .card-img
        {
            height: 205px;
            margin: auto;
            
        }

        .dl-card
        {
            height: 40px;
            width: 239px;
            background-color:rgb(15, 70, 70);
            color: white;
            text-align: center;
            margin-top: 8%;
        }


        .inner
        {
            overflow: hidden;
        }

        .inner img
        {
            transition: all 1s ease;
        }

        .inner:hover img
        {
            transform: scale(1.2);
            z-index: 1;
            
        }

    </style>
    <!--Ending of Service card's CSS code-->
    

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