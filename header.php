<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Displaying the project logo in Browser Tab-->
    <link rel="icon" type="image" href="./Frontend_images/gvtBD.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>DPSA</title>
  </head>
  <body>

  <!--Making body head, govt logo from here below-->
  <table>
        <tr>
            <td>
                <div class="div1 p-4">
                    <a href="./index.php"><img class="img1" src="./Frontend_images/gvtBD.png" alt=""></a>
                </div>
            </td>

            <td class="pb-4">
                <h3><b>District Public Service Administration</b></h3>
            </td>

            <td>
                <div class="div2 pt-3">
                    <a href="https://digitalbangladesh.gov.bd/"><img class="img2" src="./Frontend_images/dgitalBD.jpg" alt=""></a>
                </div>
            </td>

            <td>
                <div class="div3 pt-3">
                    <a href="https://mujib100.gov.bd/"><img class="img3" src="./Frontend_images/mujibbd.png" alt=""></a>
                </div>
            </td>
        </tr>
    </table>
    <!--End of making body head part-->


    <!--Navigation_bar part. All NAVIGATION options are here only-->
    <div>
        <nav class="navbar navbar-expand-sm bg-dark justify-content-left navbar-dark pl-4">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link glyphicon glyphicon-home" href="./index.php"> HOME &nbsp;</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link glyphicon glyphicon-tasks" href="./Directory.php"> DIRECTORY &nbsp;</a>  
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link glyphicon glyphicon-briefcase" href="./Service page.php"> SERVICES &nbsp;</a>

                </li>


                <!--<li class="nav-item dropdown">
                    <a class="nav-link glyphicon glyphicon-file dropdown-toggle" data-toggle="dropdown" href="#"> DOCUMENTS</a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item pb-3" href="#">GOVERNMENT ORDERS</a>
                        <a class="dropdown-item" href="#">ACTS AND RULES</a>
                    </div>
                </li>-->

        
                <li class="nav-item">
                    <a class="nav-link glyphicon glyphicon-bullhorn" href="./fileup.php"> COMPLAIN &nbsp;</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link glyphicon glyphicon-exclamation-sign" href="./about_us.php"> ABOUT US&nbsp;</a>
                </li>

                <?php
                    error_reporting(E_ERROR | E_PARSE);   //Hiding the warning massege.
                    session_start();
                    $name = $_SESSION['user_name'];
                ?>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<li class="nav-item dropdown">      
                    <a class="user nav-link glyphicon glyphicon-user" data-toggle="dropdown" href="#"> <?php echo "$name";?></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item glyphicon glyphicon-user pb-4" href="./User_profile/user1_id.php">&nbsp;My Profile</a>

                        <a class="dropdown-item glyphicon glyphicon-log-in pb-4" href="User_login.php">&nbsp;Login</a>

                        <a class="dropdown-item glyphicon glyphicon-link" href="u_signup.php">&nbsp;Link with us</a>

                        <div class="dropdown-divider"></div>
                        <form action="" method="POST">
                        <button class="btn glyphicon glyphicon-log-out" name="logout">&nbsp;Logout</button>
                        </form>       
                        <?php
                            include('logout.php');
                        ?>                
                    </div>
                </li>
            </ul>
        </nav>
    </div>
    <!--End of Navigation bar-->



  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


<style>
    .div1{
        height: 130px;
        width: 130px;
    }

    .div2{
        height: 130px;
        width: 120px;
        margin-left: 780px;
    }

    .div3{
        height: 130px;
        width: 130px;
        
    }

    .img1{
        height: 90px;
        width: 95px;
    }

    .img2{
        height: 90px;
        width: 95px;
    }

    .img3{
        height: 90px;
        width: 100px;
    }

    .dropdown:hover>.dropdown-menu
    {
        display:block;
    }
</style>