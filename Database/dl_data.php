<?php

    //storing data from HTML form through POST method
    $nid = $_POST["nid_number"];
    $f_name = $_POST["fname"];
    $l_name = $_POST["lname"];
    $full_name = $_POST["fullname"];
    $sex = $_POST["gender"];
    $birthday = $_POST["dob"];
    $birth_place = $_POST["pob"];
    $country = $_POST["cob"];
    $mobile = $_POST["mob"];
    $blood = $_POST["bg"];
    $vehicle = $_POST["tv"];

    include('dl_connection.php');   //Including the connection file which is making connection to the Database.

    $insert = "insert into dl_applicant_info (NIDPassport_number, First_name, Last_name, Full_name, Gender, DOB, Place_of_birth, Country_of_birth, Mobile_number, Blood_group, Type_of_vehicles)

    value('$nid','$f_name','$l_name','$full_name','$sex','$birthday','$birth_place','$country','$mobile','$blood','$vehicle')";

	if(mysqli_query($connection, $insert))
	{
		echo "Record has inserted Successfully.";
	}
	else
	{
		echo "Failed to insert";
	}

?>