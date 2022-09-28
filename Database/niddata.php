<?php

$name=$_POST["Name"];
$birthdate=$_POST["birthday"];
$birthcertificate=$_POST["brth_certificate_no"];
$birthplace=$_POST["birth_place"];
$fathersname=$_POST["fathers_name"];
$mothersname=$_POST["mothers_name"];
$fathersnationality=$_POST["fathers_nationality"];
$mothersnationality=$_POST["mothers_nationality"];
$sex=$_POST["sex"];
$permanentaddress=$_POST["permanent_address"];
$presentaddress=$_POST["present_address"];

$conn=mysqli_connect("localhost","root","","nidcard");

$sql="insert into nid_registration (Name,Dob,Birth_certificate_number,place_of_birth,fathers_name,mothers_name,fathers_nationality,mothers_nationality,sex,permanent_address,present_address) value('$name','$birthdate','$birthcertificate','$birthplace','$fathersname','$mothersname','$fathersnationality','$mothersnationality','$sex','$permanentaddress','$presentaddress')";
$query=mysqli_query($conn,$sql);
if($query)
{
?>
<script type="text/javascript">
	alert('Record has inserted Successfully!!');
		</script>
	<?php
}
?>