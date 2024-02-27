<?php
session_start();
require('connection.php');

if(isset($_POST['amt']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['address']) && isset($_POST['apartment']) && isset($_POST['pin']) && isset($_POST['city']) && isset($_POST['state']) && isset($_POST['country']) && isset($_POST['mobile']) && isset($_POST['email']) && isset($_POST['vinegar'])&& isset($_POST['green_tea'])){
	
	$amt=$_POST['amt'];
    $first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$address = $_POST['address'];
	$apartment = $_POST['apartment'];
	$pin = $_POST['pin'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$vinegar = $_POST['vinegar'];
	$vinegar2pack = $_POST['vinegar2pack'];
	$vinegar4pack = $_POST['vinegar4pack'];
	$green_tea= $_POST['green_tea'];
	$green_tea2pack= $_POST['green_tea2pack'];
	$green_tea4pack= $_POST['green_tea4pack'];
	$combo= $_POST['combo'];
	$combo2= $_POST['combo2'];
    $payment_status="pending";
	$sql="INSERT INTO regestration(first_name, last_name, address, apartment, pin, city, state, country, mobile, email, amount, status, vinegar,vinegar2pack,vinegar4pack,green_tea,green_tea2pack,green_tea4pack,combo,combo2) values('$first_name','$last_name','$address','$apartment','$pin','$city','$state','$country','$mobile','$email','$amt','$payment_status','$vinegar','$vinegar2pack','$vinegar4pack','$green_tea','$green_tea2pack','$green_tea4pack','$combo','$combo2')";
    mysqli_query($conn,$sql);
    $_SESSION['OID']=mysqli_insert_id($conn);
}

if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
    $payment_id=$_POST['payment_id'];
	$qry="UPDATE regestration SET status='complete',payment_id='$payment_id' WHERE id='".$_SESSION['OID']."'";
    mysqli_query($conn,$qry);
}
?>

