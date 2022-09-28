<?php
    include('start_session.php');
?>

<?php
include('header.php');
?>

<!doctype html>
<html lang="en">
  <head>
	<title>Birth Certificate</title>
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


    <!--Starting of NID form-->
	
	<div class="card" style="width: 120rem;height:88rem;border-color:rgb(0, 255, 157) ;border-top-color: rgb(136, 132, 132);border-top-width: 1ch;">
		
		<div class="card-body">
	<div class="container-fluid">

		<h1 class="h1" align="center">National Identity Card Bengali( জাতীয় পরিচয়পত্র )</h1>
		<h2 style="font-size:1.6em"><div class="shadow-lg p-3 mb-5 bg-white rounded">Please fill up this form :</h2></div><hr>

		<fieldset>
			<legend style="font-size:1.6em" align="left"><div class="shadow-lg p-3 mb-5 bg-white rounded">Applicant Details :</div></legend><br>
				<form action="./Database/niddata.php" method="POST">
					
					<table>
						
						<tr>
							<td>
								<label for="">Name : </label><br>
								<input type="text" name="Name"
								placeholder="Enter your name"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
							</td>
							
							<td>
								<label for="birthday">Date of  Birth : </label><br>
								<input type="date" id="birthday" name="birthday" ><br>
							</td>
</tr>
<tr>
<td>
								<label for="">Birth certificate number : </label><br>
								<input type="text" name="brth_certificate_no"
								placeholder="Birth place" ><br>
							</td>
		
							<td>
								<label for="">Place Of  Birth : </label><br>
								<input type="text" name="birth_place"
								placeholder="Birth place" ><br>
							</td>

						</tr>
					
		
						<tr>
							<td>
								<br><label for="">Father's name : </label><br>
								<input type="text" name="fathers_name"
								placeholder="Enter Father's name" ><br>
							</td>
<td>
								<br><label for="">Mother's name : </label><br>
								<input type="text" name="mothers_name"
								placeholder="Enter Mother's name" ><br>
							</td>
							
							</tr>
							<tr>
							<td>
								<br><label for="">Father's nationality : </label><br>
								<input type="text" name="fathers_nationality"
								placeholder="Enter Father's nationality" ><br>
							</td>
							<td>
								<br><label for="">Mother's nationality : </label><br>
								<input type="text" name="mothers_nationality"
								placeholder="Enter Mother's nationality" ><br>
							</td>
						</tr>
		
							
							
		
						<tr>
							<td>
								<br><label for="">Sex : </label><br>
								<input type="text" name="sex"
								placeholder="Enter your Gender" >
							</td>
						</tr><br>
		
						<tr>
							<td>
								<br><label for="">Permanent Address: </label><br>
								<input type="text" name="permanent_address"
								placeholder="Enter Permanent address" >
							</td>
							
		
							<td>
								<br><label for="">Present Address : </label><br>
								<input type="text" name="present_address"
								placeholder="Enter Present address" >
							</td>
						</tr>
					
					</table><br>
					<hr>
                    <p style="color:red;">* Please Check your all details correctly before submit.</p>
                    <center><input id="submit" type="submit" name="submit" value="submit"></center>
					<br><br>
					
				</form>	
		</fieldset>
	</div>
</div>
</div>
</div>
</div>
</div>
    <!--Ending of NID form-->
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


	.h1
	{
		background-color:rgb(59, 5, 109);
		color: white;
		border-radius: 10px;
	}

	#submit{
		margin-left:40px;
		width:100px;
		padding:4px;
		font-size:15px;
		font-weight: bold;
		background-color:rgb(63, 25, 112);
		color:white;
		border-radius:20px ;
	}
</style>

<style media ="screen">
	.form{
	width:200px;
	padding:10px;
	margin-left:300px;
	}
</style>

