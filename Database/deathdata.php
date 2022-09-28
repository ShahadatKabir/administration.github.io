<?php

    //storing data from HTML form through POST method
    $name = $_POST["name"];
    $name2 = $_POST["name2"];
    $ap = $_POST["ap"];
    $mail = $_POST["mail"];
    $sr = $_POST["sr"];
    $date = $_POST["date"];
    $mna= $_POST["mna"];
  
    


    //connecting to the driving_licence database.
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "death_certificate";


    //making connection-
    $connection = mysqli_connect($servername, $username, $password, $database);
    if(!$connection)
    {
        die("Sorry..!! We failed to connect to the database.".mysqli_connect_error()); 
    }


    $insert = "insert into dc_applicant_info (First_name, Last_name, Name_of_authorized_person, Mail_of_authorized_person, Relation_with_death_person, Dob, Time_of_death)
    value('$name','$name2','$ap','$mail','$sr','$date','$mna')";

	if(mysqli_query($connection, $insert))
	{
		echo "Record has inserted Successfully.";
	}
	else
	{
		echo "Failed to insert";
	}

?>