<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Displaying the project logo in Browser Tab-->
    <link rel="icon" type="image" href="../Frontend_images/gvtBD.png">
    <title>DPSA-User_login</title>
</head>
<body>
      <table>
        <tr>
          <td style="height:100px;width:100px;"><div class="tr1">
            <form action="" method="POST">
              <h2>User Login</h2>

              <div class="container">
                <label for="uname"><b>Username  </b></label>
                <input type="text" placeholder="Enter NID/Passport Number" name="id" autocomplete="off" required>

                <label for="psw"><b>Password  </b></label>
                <input type="password" placeholder="Enter Password" name="user_password" required>
                <br> </br>
                <button type="submit" name="login">Login</button>      

                <div class="extra">
                  <a class="extra" href="../u_signup.php">Link with Us</a>
                </div>
                <style>
                  .extra{
                    color: lightgray;
                    font-size: 13px;
                  }
                </style>
              </div>       
            </form>
          </td>
        </tr>
      </table>

         <!--Starting PHP code-->
    <?php
    include('connection.php');

      if(isset($_POST['login']))
      {
          $sql = "SELECT * FROM `user_1` WHERE `Id`='$_POST[id]' AND `Password`='$_POST[user_password]' ";
          $result = mysqli_query($con, $sql);

          $total_rows = mysqli_num_rows($result);

          if($total_rows == 1)
          {
              session_start();
              $_SESSION['user_id'] = $_POST['id'];
              header("location:user1_id.php");
              //echo "<script>location.replace('./User_profile/user1_id.php');</script>";            
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
</body>
</html>

<style>
        body {

            font-family: "Roboto Condensed", "sans-serif";
            width: 95%;
            height: 100%;
			      background-image: url('../Frontend_images/background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            margin-top: 5.5%;
           
        }

        table {
            width: 90%;
        }
        .tr1
        {
          width:45%;
          padding:100px;
        }
        body {font-family: Arial, Helvetica, sans-serif;}
        form {border: 3px solid #FFFFFF;
        background-color:#FFFFFF;
        }

        input[type=text], input[type=password] {
          width: 80%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;

          font-size:15px;
        }

        button {
          background-color: #4CAF50;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 20%;
          margin-right: 10px;
          margin-left: 40%;
          
        }
        a
        {
        text-decoration:none;
        color:white;
        }

        button:hover {
          opacity: 0.8;
        }

        .container {
          padding: 20px;
        }

        span.psw {
          float: right;
          padding-top: 16px;
        
          
        }

        @media screen and (max-width: 300px) {
          span.psw {
            display: block;
            float: none;

          }
          /* .cancelbtn {
            width: 100%;
          } */
        }
        .tr1
        {
        margin-left:300px;
        }
        h2
        {
        text-align:center;
        }
        .heading
        {
        text-align:center;
        position:absolute;
        top:0;
        left:0;
        margin-left:36%;
        margin-top:45px;
        font-size:30px;
        color:white;
        }
      .logg
      {
      margin-top:15px;
      margin-left:350px;
      padding-bottom:10px;
</style>