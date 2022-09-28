<?php

    //storing data from HTML form through POST method
    $name = $_POST["name"];
    $dob = $_POST["dob"];
    $bp = $_POST["bp"];
    $fn = $_POST["fn"];
    $fna = $_POST["fna"];
    $mn = $_POST["mn"];
    $mna = $_POST["mna"];
    $sex = $_POST["sex"];
    $pa = $_POST["pa"];
    $pdd = $_POST["pdd"];
  
    


    //connecting to the driving_licence database.
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "birth_certificate";


    //making connection-
    $connection = mysqli_connect($servername, $username, $password, $database);
    if(!$connection)
    {
        die("Sorry..!! We failed to connect to the database.".mysqli_connect_error()); 
    }


    $insert = "insert into bc_applicant_info(name, dob, place_of_birth, fathers_name,fathers_nationality, mothers_name, mothers_nationality, sex, parmanent_address, present_address)
    value('$name','$dob','$bp','$fn','$fna','$mn','$mna','$sex','$pa','$pdd')";

	if(mysqli_query($connection, $insert))
	{
		echo "Record has inserted Successfully.";
	}
	else
	{
		echo "Failed to insert";
	}

?>