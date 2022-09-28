
<?php
include('header.php');
?>

<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "complain");

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory
  	$target = "photos/".basename($image);

  	$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  						?>
<script type="text/javascript">
	alert('congrats!!🎉file uploaded Successfully...');
		</script>
	<?php
  	}else{
  								?>
<script type="text/javascript">
	alert('sorry!!😔file not uploaded Successfully...');
		</script>
	<?php
  		
  	
  	}
  }
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>image upload</title>
</head>
<body>
<h4><a href="./index.php"class="h4">Home</a> > COMPLAIN </h4><br>
	<div class="card" style="width: 120rem;height:69rem;border-color:rgb(0, 255, 157) ;border-top-color: rgb(136, 132, 132);border-top-width: 1ch;">
		
		<div class="card-body">
	<div class="container">


		<h1 class="h1" align="center"><marquee>
			Upload your Documentaion And Describe Your Problem.
</marquee></h1>
		<h2  style="font-size:1.6em"><div class="shadow-lg p-3 mb-5 bg-white rounded">Please fill up this form with necessary document!! :</h2></div><hr>
	<div id="content">
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">

	<div class="upload-btn-wrapper">
	<input type="file" name="image"><br><br>
  <button class="btn">Upload a file</button>
  </div>
</div>
<div>
	<textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea>
</div>
<div class="center">
  <button class="btn" input type="submit" name="upload" >submit</button>
  <hr><hr>
                    <p style="color:red;">* Please Check your all details correctly before submit.</p><br>
</div>

                   
</form>
</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <title>Home page</title>
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

      <!--Starting of Terms and condition, Copyright Part-->
      <div class="div4">
        <pre>
        </pre>
        <p><a href="./index.php">Home</a>  /  <a href="http://oldweb.lged.gov.bd/PrivacyPolicy.aspx">Privacy Policy</a>  /  <a href="http://oldweb.lged.gov.bd/TermsOfUse.aspx">Terms of Use</a></p>

        Copyright 2022 © Plagiarism Today | All Rights Reserved | Powered By: ICT Unit
    </div>
    <!--End of Terms and Conditions, Copyright Part-->
    



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>



<style>

.div4
    {
        height: 100px;
        width: 1349px;
        background-color:black;
        color: white;
        margin-right:100px;
		text-align: center;
    }

</style>
<style> 
.h4{
	margin-left:80px;
  color: skyblue;
}
textarea {
	margin-top: 10px;
  width: 100%;
  height: 200px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 10px solid #ccc;
  border-radius: 4px;
  background-color:skyblue;
  font-size: 16px;
  resize: none;
}
.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-grid;
}

.btn {
	margin-top: 10px;
  border: 2px solid gray;
  color: mediumvioletred;
  background-color: white;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 20px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
.h1
	{
		background-color:rgb(59, 5, 109);
		color: white;
		border-radius: 10px;
	}
	.marquee{
		   font-size: 30px;
      font-weight: 800;
      color: blanchedalmond;
      font-family: sans-serif;
	}
	.card{ 
		border-radius: 10px;
  background:aliceblue;
  margin-left: 80px; 
}


</style>