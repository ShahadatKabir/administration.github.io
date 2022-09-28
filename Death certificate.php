<?php
    include('start_session.php');
?>

<?php
    include('header.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Death Certificate</title>
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
    <div class="card" style="width: 120rem;height:78rem;border-color:rgb(0, 255, 157) ;border-top-color: rgb(136, 132, 132);border-top-width: 1ch;">
		
		<div class="card-body">

    <div class="container">
    
        <h2 class="h2 text-center bg-dark ">Death Certificate Application Form ( ডেথ সার্টিফিকেট আবেদনপত্র )</h2><br>

        <h2 style="font-size:1.6em"><div class="shadow-lg p-3 mb-5 bg-white rounded">Please fill up this form :</h2></div><hr>

		<fieldset>
			<legend style="font-size:1.6em" align="left"><div class="shadow-lg p-3 mb-5 bg-white rounded">Applicant Details :</div></legend><br>


            <form action="./Database/deathdata.php" method="POST">
                <table>

                    <tr>
                        <td>
                            <label>FIRST NAME : </label><br>
                            <input type="text" placeholder=" Enter First Name" name="name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>

                        <td>
                            <label>LAST NAME : </label><br>
                            <input type="text" placeholder=" Enter Last Name" name="name2"><br>
                        </td>
                    </tr>


                
                    <tr>
                        <td>
                            <br><label>NAME OF AUTHORIZED PERSON : </label><br>
                            <input type="text" placeholder=" enter name of authorized person" name="ap">   
                        </td>

                        <td>              
                            <br><label>MAIL OF AUTHORIZED PERSON : </label><br>
                            <input type="email" placeholder=" Enter Email Of Authorize person" name="mail">                 
                        </td>
                    </tr>



                    <tr>
                       <td>
                            <br><label for="sr">RELATION WITH THE DEATH PERSON</label><br>
                            <select name="sr">
                                <option selected >SELECT THE RELATIONSHIP</option>
                                <option>SON</option>
                                <option>DAUGHTER</option>
                                <option>BROTHER</option>
                                <option>SISTER</option>
                                <option>FATHER</option>
                                <option>MOTHER</option>
                            </select> 
                        </td>
                    </tr>


                    <tr>
                        <td>                           
                            <br><label>DATE OF DEATH : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><br>
                            <input type="date" name="date">                            
                        </td>

                        <td>                            
                            <br><label>TIME OF DEATH : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><br>
                            <input type="time" name="mna"> 
                        </td>
                    </tr>
                </table><br><br>
                <hr>
                <p style="color:red;">* Please Check your all details correctly before submit.</p>
                <center><input id="submit" type="submit" name="submit" value="submit"></center>
                
            </form>
        </fieldset>    
    </div>
        </div>
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

	.div4
    {
        height: 130px;
        width: 1349px;
        background-color:black;
        color: white;
        text-align: center;
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
    .card{
	margin-left: 80px; 
	margin-bottom: 10px; 
  background: #e7e7ee;
  border-radius: 10px;
}	
    .h2
    {
        color: White;
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