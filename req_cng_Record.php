<?php
    include('header.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DPSA-Rwquest_for_change_the_records</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
    
  <div class="container">
    <h1 class="h1" align="center" style="color:white;">Please give us your previous information</h1>
  </div><br>

  <h4 class="required_h4" style="color: darkred;">*It is REQUIRED to fill up all the given form correctly.</h4>
  <style>
    .h1
	{
		background-color:rgb(5, 109, 109);
		color:white;
		border-radius: 10px;
	}

    .required_h4
    {
        padding-left:9%;
    }
  </style>
    
    <div class="container">
        <div class="card c1" style="width: 100%; box-shadow: 0px 0px 7px lightgray; border-top: 3px; border-top-style: solid; border-top-color: green;">
            <div class="card-body">
            <form action="./Database/dl_req.php" method="POST">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="inputID" class="col-form-label">NID / Passport no.* </label>
                    </div>
                    <div class="col-auto">
                        <input name="nid" type="text" id="inputID" class="form-control" aria-describedby="passwordHelpInline" autocomplete="off" required>
                    </div>
                    <div class="col-auto">
                        <span id="passwordHelpInline" class="form-text" style="color: red">
                        *Required
                        </span>
                    </div>
                </div><br>
                
                <div class="">
                    <h4>Full Name * </h4>
                    <p style="color:darkred;">(As previously given by User)</p>
                    <input type="text" class="form-control" name="full_name" autocomplete="off" required>
                </div><br>

                <div class="mb-3">
                    <textarea name="text" rows="5" cols="65" placeholder=" Write the particular information you need to change" required></textarea>
                </div><br>

                <div class="mb-3 form-check">
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1">Above information is correct according to me *</label>
                </div><br><br>

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form><br>
            </div>
        </div>
        
    </div><br><br>

</body>
</html>




<?php
    include('footer.php');
?>