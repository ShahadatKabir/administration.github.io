<?php include('connection.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Admin Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Displaying the project logo in Browser Tab-->
    <link rel="icon" type="image" href="../Frontend_images/gvtBD.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c28ce6a750.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <div class="login-form">
        <img class="bd_logo" src="./img/header.png" alt="">
        <style>
            .bd_logo
            {
                
                width : 80px;
                margin-left : 183px;
                padding-top : 25px;
            }
        </style>

        <h1>Admin Login</h1>

        <form method="POST">
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" name="username" autocomplete="off" required>
            </div>

            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="admin_password" id = "my_input" required>

                <div class="hide" onclick="my_function()">
                    <i id="hide1" class="fa fa-eye"></i>
                    <i id="hide2" class="fa fa-eye-slash"></i>
                </div>
                
            </div>

            <button type="submit" name="signin">Sign In</button>

            <div class="extra">
                <a href="#">Forgot Password ?</a>
            </div>

        </form>
    </div>

    <!--JavaScript Code for eye open and close in password section-->
    <script>
        function my_function()
        {
            var x = document.getElementById("my_input");
            var y = document.getElementById("hide1");
            var z = document.getElementById("hide2");

            if (x.type === 'password')
            {
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            }

            else
            {
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }
    </script>




    <!--Starting PHP code-->
    <?php

        if(isset($_POST['signin']))
        {
            $sql = "SELECT * FROM `admin_login_info` WHERE `user_name`='$_POST[username]' AND `password`='$_POST[admin_password]' ";
            $result = mysqli_query($con, $sql);

            $total_rows = mysqli_num_rows($result);

            if($total_rows == 1)
            {
                session_start();
                $_SESSION['Admin_username'] = $_POST['username'];
                header("location:./index.php");
                //echo "<script>location.replace('head.php');</script>";            
            }

            else
            {
                //Using JavaScript tag 'alert' function.
                echo "<script>
                        alert('Incorrect User name or Password..!!');
                    </script>";
            }
        }
    ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>




<style>
        *{
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
            font-family: poppins;
            text-decoration: none;
        }

        body
        {
            margin-top: 7%;
            margin-left: 33%;
            background-color: #f2f4f6;
            background-image : url('./img/bd_par.jpg');
            background-repeat : no-repeat;
            background-position : center;
            background-size : cover;
            background-attachment : fixed;
        }

        div.login-form
        {
            width: 450px;
            background-color : rgba(0,0,0,0.5);
            box-shadow: 0px 5px 10px black;
            color : white;
            border-radius : 7px;
        }

        div.login-form h1
        {
            text-align: center;
            background-color:rgba(0,0,0,0);
            padding: 12px 0px;
            color: white;
        }

        div.login-form form
        {
            padding: 30px 60px;
        }

        div.login-form form div.input-field
        {
            display: flex;
            flex-direction: row;
            margin: 6px 0px;
        }

        div.login-form form div.input-field i
        {
            color: darkslategray;
            padding: 12px 12px;
            background-color: #f2f4f6;
            margin-right: 0px;
        }

        div.login-form form div.input-field input
        {
            background-color: #f2f4f6;
            padding: 8px;
            border: none;
            width: 350px;
            padding-left: 5px;
        }

        div.login-form button
        {
            width: 330px;
            background-color:#5BC0F2;
            padding: 8px;
            border: none;
            font-size: 16px;
            font-weight: 500;
            color: white;
            margin: 15px 0px;
        }

        div.login-form form button:hover
        {
            background-color: #26DF89;
        }

        div.login-form form div.extra
        {
            font-size: 14px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        div.login-form form div.extra a:first-child
        {
            color: gray;
        }

        div.login-form form div.extra a:last-child
        {
            color: lightgray;
        }

        #hide1
        {
            display : none;
        }

        
    </style>