<?php

    //storing data from HTML form through POST method
    $date = $_POST["date"];
    $title = $_POST["title"];
    $pdf = $_POST["pdf_file"];

    //connecting to the driving_licence database.
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "govt_notice";


    //making connection-
    $connection = mysqli_connect($servername, $username, $password, $database);
    if(!$connection)
    {
        die("Sorry..!! We failed to connect to the database.".mysqli_connect_error()); 
    }

    $push = "insert into govt_notice1 (Date, Title, PDF)

    value('$date','$title','$pdf')";

	if(mysqli_query($connection, $push))
	{
        echo "Record has inserted Successfully.";		
	}
	else
	{
		echo "Failed to insert";
	}

?>