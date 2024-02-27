<?php

require('connection.php');




$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$apartment = $_POST['apartment'];
$pin = $_POST['pin'];
$city = $_POST['city'];
$state = $_POST['stt'];
$country = $_POST['country'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

$sql ="INSERT INTO regestration(first_name, last_name, address, apartment,pin,city, state, country, mobile,email)
VALUES ('$first_name','$last_name','$address','$apartment','$pin','$city','$state','$country','$mobile','$email')";
if(mysqli_query($conn,$sql))
{
	echo "Registerd Successfully";
}
else
{
	echo mysqli_error($conn);
}
?>