<?php
    include('start_session.php');
?>
<?php
    include('header.php');
?>


<!doctype html>
<html lang="en">
  <head>
    <title>DPSA-Driving_Licence</title>
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
    <!--Starting of Driving Licence Application Form-->
    <div class="container">
       <h1 class="h1" align="center">Driving Licence Application Form Bengali: ড্রাইভিং লাইসেন্সের আবেদনপত্র</h1><br>
        <p style="font-size:20px; color:red;">Please fill up this form (all fields are REQUIRED) -</p>
    
        <fieldset>
            <legend style="font-size:1.6em;" align="left">Personal Details :</legend>

            <div class="card c1" style="width: 100%; box-shadow: 0px 0px 7px lightgray; border-top: 3px; border-top-style: solid; border-top-color: green;">
                <div class="card-body">
                <form action="./Database/dl_data.php" method="POST">
                    <br><label for="">Name of the Applicant * </label><br>
                    <input type="text" name="fname" placeholder="First Name" autocomplete="off" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <input type="text" name="lname" placeholder="Last Name" autocomplete="off" required>
                    <br><br>

                    <label for="">Full Name as per Records * </label><br>
                    <input type="text" name="fullname" placeholder="Enter Full Name" autocomplete="off" required>
                    <h6 style="color:maroon;">(To Be Printed On Smart Card)</h6>
                    <br>

                    <!--Starting Gender, DOB and Age option-->
                    <table>
                        <tr>
                            <td>
                                <label for="">Gender * </label><br>
                                <input type="radio" name="gender" value="male" required> Male
                                <input type="radio" name="gender" value="female" required> Female
                                <input type="radio" name="gender" value="other" required> Other &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </td>

                            <td>
                                <label for="">DOB * </label><br>
                                <input type="date" name="dob" placeholder="MM-DD-YY" autocomplete="off" required>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </td>

                            <td>
                                <label for="">NID / Passport Number * </label><br>
                                <input type="text" name="nid_number" placeholder="" autocomplete="off" required>
                            </td>
                        </tr>
                        <!--Ending Gender, DOB and Age option-->



                        <!--Starting Place of birth, Country of birth and Educational Qualification-->
                        <tr>
                            <td>
                                <br><label for="">Place of Birth * </label><br>
                                <input type="text" name="pob" placeholder="Place Of Birth" autocomplete="off" required> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </td>

                            <td>
                                <br><label for="">Country of Birth * </label><br>
                                <input type="text" name="cob" placeholder="Country Of Birth" autocomplete="off" required> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </td>
                        </tr>
                        <!--Ending Place of birth, Country of birth and Educational Qualification-->



                        <!--Starting Mobile number, Emergency contact, Mail id and Blood group-->
                        <tr>
                            <td>
                                <br><label for="">Mobile Number * </label><br>
                                <input type="text" name="mob" placeholder="Mobile Number" autocomplete="off" required> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </td>

                            <td>
                                <br><label for="">Blood Group * </label><br>
                                <select style="font-size:0.8em" name="bg">
                                <option>Select</option>
                                <option>A2-</option>
                                <option>A+</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B-</option>
                                <option>O+</option>
                                <option>O-</option>
                                <option>AB+</option>
                                <option>AB-</option>
                                <option>Unknown</option>
                                <option>A1+</option>
                                <option>A1-</option>
                                <option>B1+</option>
                                <option>B1-</option>
                                <option>A1B+</option>
                                <option>A1B-</option>
                                <option>A2B+</option>
                                <option>A2B-</option>
                                <option>Oh+</option>
                                </select>
                            </td>
                        </tr>
                        <!--Ending Mobile number, Emergency contact, Mail id and Blood group-->


                        <!--Starting Address and Type of vehicles-->
                        <tr>
                            <td>
                                <br><label for="">Type of Vehicles * </label><br>
                                <select style="font-size:0.8em" name="tv">
                                    <option>Select</option>
                                    <option>Two Wheels</option>
                                    <option>Three Wheels</option>
                                    <option>Four Wheels</option>
                                    <option>Eight Wheels</option>
                                    <option>Ten Wheels</option>
                                    <option>Twelve Wheels</option>
                                    <option>Sixteen Wheels</option>
                                    </select>
                            </td>
                        </tr>
                        <!--Starting Address and Type of vehicles-->

                    </table><br><br>

                    <hr><hr>
                    <p style="color:red;">* Please Check your all details correctly before submit.</p>
                    <center><input id="submit" type="submit" name="submit" value="submit"></center>
                    <br>
                </form>
                </div>
            </div>  
        </fieldset>
         
    </div><br>
    <div class="container">
        <nav class="navbar ">
            <form class="container-fluid justify-content-end">
                <a href="./dl_records.php"><button class="btn btn-outline-info" type="button">View all Records</button></a>
                <a href="./req_cng_Record.php"><button class="btn btn-outline-info" type="button">Request for change a record</button></a>
            </form>
        </nav>
    </div>
    <br>
    <!--Ending of Driving Licence Application Form-->


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



<style>

    .h1
	{
		background-color:rgb(5, 109, 109);
		color: white;
		border-radius: 10px;
	}

    #submit{
		margin-left:40px;
		width:100px;
		padding:4px;
		font-size:15px;
		font-weight: bold;
		background-color:midnightblue;
		color:white;
		border-radius:20px ;
	}
</style>