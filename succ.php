<?php

include('reges/connection.php');
include('reges/payment_process.php');
 $pay_id="<script>document.write(payment_id);</script>";


//$sql="SELECT * FROM regestration WHERE payment_id='$pay_id'";
$qry1="select * from regestration WHERE id='".$_SESSION['OID']."'";

$res=mysqli_query($conn,$qry1);
$row=mysqli_fetch_assoc($res);
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <title>YAY! Order Placed</title>

    <link rel="icon" href="assets/images1/logo  new.png" type="image/png">

    <link rel="stylesheet" type="text/css" href="assets/css/order_success.css">

</head>
<body>
	<div class="success" align="center" id="content">
		<img src="assets/images1/tick1.png">
		<h1>Thank You For Your Order<span>!</span></h1>
		<h3><span>Order Confirmation</span><span>#<?php echo $row['payment_id']?></span>
	</h3>
		<div class="list0"align="center">
			<div class="list01"align="left">
				<strong>Billed To:</strong><br>
				<strong>email:</strong><br>
				<strong>phone:</strong>
			</div>
			<div class="list02" align="right">
				<?php echo $row['first_name']?> <?php echo $row['last_name']?><br>
				<?php echo $row['email']?><br>
				<?php echo $row['mobile']?>
			</div>
		</div>
		<br>
		<p class="list"><span><strong>Total:</strong></span><span><strong>Date of Issue:</strong></span></p>
		<!--<p class="list">Purchased Item(
			<input type="textbox" name="qty" id="QTY" placeholder="Quantity" value="5" disabled="disabled"/>)
			<input type="textbox" name="total" id="ttl" placeholder="Total" value="" disabled="disabled"/>
		</p>-->
		<p class="list1">
			 <span>₹<?php echo $row['amount']?></span><span align="right"><?php echo $row['date']?></span>
		</p><br>
		<p class="list2">
			<span><strong>Delivery Address:</strong></span><br>Apartment <?php echo $row['apartment']?><br><?php echo $row['address']?> <br><?php echo $row['city']?> <br> <?php echo $row['state']?>
		</p><br>
		<hr>
		<p class="list4">
			<span><strong>Description</strong></span><span><strong>quantity</strong></span><span><strong>Amount</strong></span>
		</p>
		<p class="list5" align="left">
			<?php 
				if($row['vinegar']>0)
				{
					echo "Apple Cider Vinegar Gummies"."<span class=\"space1\"></span>".$row['vinegar']."<span class=\"space2\"></span>"."₹1119"."<br>";
				}
				if($row['vinegar2pack']>0)
				{
					echo "Apple Cider Vinegar Gummy Pack of 2"."<span class=\"space3\"></span>".$row['vinegar2pack']."<span class=\"space4\"></span>"."₹2129"."<br>";
				}
				if($row['vinegar4pack']>0)
				{
					echo "Apple Cider Vinegar Gummy Pack of 4"."<span class=\"space5\"></span>".$row['vinegar4pack']."<span class=\"space6\"></span>"."₹4029"."<br>";
				} 
				if($row['green_tea']>0)
				{
					echo "Green Tea Gummies"."<span class=\"space7\"></span>".$row['green_tea']."<span class=\"space8\"></span>"."₹1119"."<br>";
				}
				if($row['green_tea2pack']>0)
				{
					echo "Green Tea Gummy Pack of 2"."<span class=\"space9\"></span>".$row['green_tea2pack']."<span class=\"space10\"></span>"."₹2129"."<br>";
				}
				if($row['green_tea4pack']>0)
				{
					echo "Green Tea Gummy Pack of 4"."<span class=\"space11\"></span>".$row['green_tea4pack']."<span class=\"space12\"></span>"."₹4029"."<br>";
				} 
				if($row['combo']>0)
				{
					echo "GTG and ACVG Combo"."<span class=\"space13\"></span>".$row['combo']."<span class=\"space14\"></span>"."₹2129"."<br>";
				}
				if($row['combo2']>0)
				{
					echo "GTG and ACVG Combo Pack of 2"."<span class=\"space15\"></span>".$row['combo2']."<span class=\"space16\"></span>"."₹4029"."<br>";
				}
			?>
		</p>
		<hr><br>
		<p class="list3">
			<strong>SUB TOTAL</strong> ₹<?php echo $row['amount']?>
		</p>
		<p class="list6">
			<strong>Shipping + Handling</strong> Free
		</p>
		<p class="list7">
			<strong>Sales Tax</strong> Inclusive
		</p>
		<p class="list8">
			<strong>TOTAL</strong> ₹<?php echo $row['amount']?>
		</p>
		<br>
		<hr>
		<br>
		<p class="list9">Your order will be delivered in next 7-10 business working days.</p>
		<a href="index.html">Shop Again<ion-icon name="arrow-forward-circle-sharp"></ion-icon></a>
		<button id="cmd" onclick="window.print()">Print Receipt<ion-icon name="arrow-down-circle-sharp"></ion-icon></button>
	</div>
                     
	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
	<script type="text/javascript">
		localStorage.removeItem('cartNumbers');
    	localStorage.removeItem("totalCost");
    	localStorage.removeItem('productsInCart');
    	function myFunction() {
    setTimeout(function(){ 

      window.location.href = "index.html";

}, 2* 60 *1000);
}
myFunction();	
	</script>	
</body>
</html>    	
<?php
$to = $row['email'];
$subject = 'Order Placed';
$from = '@gmail.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html lang="en">

<head>
     <style>@import url("https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900");
*{
	margin: 0;
	font-family: \'Poppins\',sans-serif;
	padding: 0;
	box-sizing: border-box;
}
body{
	overflow-x: hidden;
	background: url("../images1/logo  new.png");
	background-position: top-left;
	background-repeat: no-repeat;
	animation: back 3s ease-in-out infinite;
}
@keyframes back{
	0%{
		background-size: 400px 300px;
	}
	50%{
		background-size: 440px 340px;
	}
	100%{
		background-size: 400px 300px;
	}
}
::selection{
	background: #7fd2a4;
	color: #fff;
}
.success{
	display: block;
	width: 100%;
	height: 100%;
	justify-content: center;
	align-items: center;
	margin-top: 2%;
}
.success img{
	width: 8%;
	height: auto;
	animation: imgage 1s ease-in-out;
}
@keyframes imgage{
	0%{
		opacity: 0;
		transform: rotate(0deg);
	}
	100%{
		opacity: 1;
		transform: rotate(360deg);
	}
}
.success h1{
	font-family: \'Dancing Script\', cursive;
	font-weight: 700;
	color: #7fd2a4;
	font-size: 60px;
	text-shadow: 2px 2px green;
}
.success h1 span{
	color: red;
	font-family: \'Dancing Script\', cursive;
	font-weight: 700;
	font-size: 100px;
	text-shadow: 2px 2px #151729;
}
.success h3{
	background: #7fd2a4;
	color: #fff;
	margin-top: 2%;
	width: 40%;
	margin-bottom: 20px;
	font-size: 15px;
}
.success h3 span:first-child{
	margin-right: 30%;
	font-size: 20px;
}
.list0{
	width: 40%;
	margin-bottom: 5px;
	margin-left: 0%;
	display: flex;
	flex-direction: row;
}
.list01{
	width: 30%;
	color: #7fd2a4;
}
.list02{
	width: 80%;
}
.list{
	width: 40%;
	margin-bottom: 5px;
	margin-left: 0px;
}
.list span{
	margin-left: 0%;
	color: #7fd2a4;
}
.list span:nth-child(1){
	margin-left: 0%;
}
.list span:nth-child(2){
	margin-left: 74%;
}
.list1 {
	width: 40%;
	margin-left: 0px;
	margin-bottom: 5px;
}
.list1 span{
	width: 30%;
}
.list1 span:nth-child(1){
	margin-left: 0%;
}
.list1 span:nth-child(2){
	margin-left: 67%;
}
.list2{
	margin-left: 10px;
	margin-bottom: 5px;
}
.list2 span{
	color: #7fd2a4;
}
.list3{
	width: 40%;
	margin-bottom: 5px;
	margin-left: 0px;
}
.list3 strong{
	color: #7fd2a4;
	margin-right: 75%;
}
.list6{
	width: 40%;
	margin-bottom: 5px;
	margin-left: 0px;
}
.list6 strong{
	color: #7fd2a4;
	margin-left: -2%;
	margin-right: 63%;
}
.list7{
	width: 40%;
	margin-bottom: 5px;
	margin-left: 0px;
}
.list7 strong{
	color: #7fd2a4;
	margin-left: 0%;
	margin-right: 73.6%;
}
.list8{
	width: 40%;
	margin-bottom: 5px;
	margin-left: 0px;
}
.list8 strong{
	color: #7fd2a4;
	margin-left: 0.5%;
	margin-right: 81%;
}
hr{
	width: 40%;
	height: 2px; 
	background: #7fd2a4;
	border: none;
}
.list4 span{
	color: #7fd2a4;
}
.list4{
	width: 40%;
	margin-left: 0px;
	margin-top: 15px;
}
.list4 span:nth-child(1){
	margin-left: 0%;
}
.list4 span:nth-child(2){
	margin-left: 56%;
}
.list4 span:nth-child(3){
	margin-left: 4%;
}
.list5{
	width: 40%;
	margin-left: 1%;
	margin-top: 2%;
	margin-bottom: 2%;
}
.space1{
	margin-left: 39%;
}
.space2,.space4,.space6,.space8,.space10,.space12,.space14,.space16{
	margin-right: 11%;
}
.space3{
	margin-left: 26.6%;
}
.space5{
	margin-left: 26.5%;
}
.space7{
	margin-left: 52%;
}
.space9{
	margin-left: 39.6%;
}
.space11{
	margin-left: 39.5%;
}
.space13{
	margin-left: 46.5%;
}
.space15{
	margin-left: 34.2%;
}
.success a{
	position: relative;
	display: inline-block;
	padding: 10px 25px;
	background: #ff0562;
	color: #fff;
	text-decoration: none;
	margin-top: 25px;
	border-radius: 25px;
	border-bottom: 4px solid #d00d56;
	transition: .7s;
	padding-right: 40px;
	margin-bottom: 50px;
}
.success button{
	position: relative;
	display: inline-block;
	padding: 10px 30px;
	background: orange;
	color: #fff;
	cursor: pointer;
	text-decoration: none;
	margin-left: 15px;
	margin-top: 25px;
	border-radius: 25px;
	border-bottom: 4px solid darkorange;
	border-left: none;
	border-top: none;
	border-right: none;
	transition: .7s;
	font-size: 15px;
	padding-right: 40px;
	margin-bottom: 50px;
}
.success a ion-icon,.success button ion-icon{
	font-size: 25px;
	color: #fff;
	position: absolute;
}
.success a:hover,.success button:hover{
	transition: .7s;
	transform: scale(1.1);
}
.success a:focus,.success button:focus{
	text-decoration: none;
	outline: none;
}
@media (max-width: 767px) {
body{
	overflow-x: hidden;
	background-size: 200px 150px;
	background-position: top;
}	
@keyframes back{
	0%{
		background-size: 200px 150px;
	}
	50%{
		background-size: 210px 160px;
	}
	100%{
		background-size: 200px 150px;
	}
}
.success{
	margin-top: 50%;
}
.success img{
	width: 30%;
}
.success h1{
	font-size: 50px;
}
.success h1 span{
	font-size: 70px;
}
.success h3{
	width: 80%;
	display: flex;
	flex-direction: column;
}
.success h3 span{
	margin-right: 0%;
	font-size: 15px;
}
.success h3 span:first-child{
	margin-right: 0%;
}
.list0{
	width: 80%;
	display: flex;
	flex-direction: row;
}
.list01{
	width: 30%;
}
.list02{
	width: 68%;
}
.list{
	width: 80%;
}
.list span:nth-child(2){
	margin-left: 43%;
}
.list1{
	width: 80%;
}
.list1 span:nth-child(1){
	margin-left: 0%;
}
.list1 span:nth-child(2){
	margin-left: 25%;
}
.list3{
	width: 80%;
}
.list3 strong{
	margin-right: 45%;
}
.list6{
	width: 80%;
}
.list6 strong{
	margin-right: 22%;
}
.list7{
	width: 80%;
}
.list7 strong{
	margin-left: 2%;
	margin-right: 44%;
}
.list8{
	width: 80%;
}
.list8 strong{
	margin-left: -1%;
	margin-right: 57%;
}
hr{
	width: 80%;
}
.list4{
	width: 80%;
	font-size: 12px;
}
.list4 span:nth-child(1){
	margin-left: 0%;
}
.list4 span:nth-child(2){
	margin-left: 35%;
}
.list4 span:nth-child(3){
	margin-left: 4%;
}
.list5{
	width: 80%;
	font-size: 10px;
	margin-left: 1%;
	margin-top: 2%;
	margin-bottom: 2%;
}
.space1{
	margin-left: 20%;
}
.space2,.space4,.space6,.space8,.space10,.space12,.space14,.space16{
	margin-right: 14%;
}
.space3{
	margin-left: 3.6%;
}
.space5{
	margin-left: 3.4%;
}
.space7{
	margin-left: 37%;
}
.space9{
	margin-left: 20.5%;
}
.space11{
	margin-left: 20.5%;
}
.space13{
	margin-left: 29.7%;
}
.space15{
	margin-left: 13.5%;
}
}
@media (min-width: 767px) and (max-width: 1200px) {
body{
	overflow-x: hidden;
	background-size: 350px 260px;
	background-position: top;
}	
@keyframes back{
	0%{
		background-size: 350px 260px;
	}
	50%{
		background-size: 360px 270px;
	}
	100%{
		background-size: 350px 260px;
	}
}
.success{
	margin-top: 40%;
}
.success img{
	width: 20%;
}
.success h1{
	font-size: 50px;
}
.success h1 span{
	font-size: 70px;
}
.success h3{
	width: 80%;
	display: flex;
	flex-direction: row;
}
.success h3 span{
	margin-right: 0%;
	font-size: 15px;
}
.success h3 span:first-child{
	margin-right: 35%;
}
.list0{
	width: 80%;
	display: flex;
	flex-direction: row;
}
.list01{
	width: 30%;
}
.list02{
	width: 68%;
}
.list{
	width: 80%;
}
.list span:nth-child(2){
	margin-left: 74%;
}
.list1{
	width: 80%;
}
.list1 span:nth-child(1){
	margin-left: 0%;
}
.list1 span:nth-child(2){
	margin-left: 67%;
}
.list3{
	width: 80%;
}
.list3 strong{
	margin-right: 75%;
}
.list6{
	width: 80%;
}
.list6 strong{
	margin-right: 63%;
}
.list7{
	width: 80%;
}
.list7 strong{
	margin-left: 0%;
	margin-right: 73.7%;
}
.list8{
	width: 80%;
}
.list8 strong{
	margin-left: 0%;
	margin-right: 80%;
}
hr{
	width: 80%;
}
.list4{
	width: 80%;
	font-size: 16px;
}
.list4 span:nth-child(1){
	margin-left: 0%;
}
.list4 span:nth-child(2){
	margin-left: 58%;
}
.list4 span:nth-child(3){
	margin-left: 4%;
}
.list5{
	width: 80%;
	font-size: 14px;
	margin-left: 1%;
	margin-top: 2%;
	margin-bottom: 2%;
}
.space1{
	margin-left: 45%;
}
.space2,.space4,.space6,.space8,.space10,.space12,.space14,.space16{
	margin-right: 12%;
}
.space3{
	margin-left: 34.2%;
}
.space5{
	margin-left: 34.1%;
}
.space7{
	margin-left: 56.2%;
}
.space9{
	margin-left: 45.5%;
}
.space11{
	margin-left: 45.3%;
}
.space13{
	margin-left: 51.4%;
}
.space15{
	margin-left: 40.7%;
}
}</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <title>YAY! Order Placed</title>

    <link rel="icon" href="assets/images1/logo  new.png" type="image/png">

    <link rel="stylesheet" type="text/css" href="assets/css/order_success.css">

</head>
<body>
	<div class="success" align="center" id="content">
		<h1>Thank You For Your Order<span>!</span></h1>
		<h3><span>Order Confirmation</span><span>#'. $row['payment_id'].'</span>
	</h3>
		<div class="list0"align="center">
			<div class="list01"align="left">
				<strong>Billed To:</strong><br><br><br><br>
				<strong>email:</strong> <br><br><br><br>
				<strong>phone:</strong>
			</div>
			<div class="list02" align="right">
				'.$row['first_name']." ".$row['last_name'].'
				'.$row['email'].' 
				'.$row['mobile'].'
			</div>
		</div>
		<br>
		<p class="list"><span align="center"><strong>Date of Issue:</strong></span></p>
		<!--<p class="list">Purchased Item(
			<input type="textbox" name="qty" id="QTY" placeholder="Quantity" value="5" disabled="disabled"/>)
			<input type="textbox" name="total" id="ttl" placeholder="Total" value="" disabled="disabled"/>
		</p>-->
		<p class="list1">
			 <span align="center">'. $row['date'].'</span>
		</p><br>
		<p class="list2">
			<span><strong>Delivery Address:</strong></span><br>Apartment'. $row['apartment'].'<br>'.$row['address'].' <br>'. $row['city'].' <br>'. $row['state'].'
		</p><br>
		<hr>
		<p class="list4">
			<span align="left"><strong>Description</strong></span>'."    ".'<span align="center"><strong>quantity</strong></span>'."    ".'<span align="right"><strong>Amount</strong></span>
		</p>
		<p class="list5" align="left">
			'; 
				if($row['vinegar']>0)
				{
				$message.= "Apple Cider Vinegar Gummies"."<span class=\"space1\"></span>".$row['vinegar']."<span class=\"space2\"></span>"."₹1119"."<br>";
				}
				if($row['vinegar2pack']>0)
				{
					$message.= "Apple Cider Vinegar Gummy Pack of 2"."<span class=\"space3\"></span>".$row['vinegar2pack']."<span class=\"space4\"></span>"."₹2129"."<br>";
				}
				if($row['vinegar4pack']>0)
				{
					$message.= "Apple Cider Vinegar Gummy Pack of 4"."<span class=\"space5\"></span>".$row['vinegar4pack']."<span class=\"space6\"></span>"."₹4029"."<br>";
				} 
				if($row['green_tea']>0)
				{
					$message.= "Green Tea Gummies"."<span class=\"space7\"></span>".$row['green_tea']."<span class=\"space8\"></span>"."₹1119"."<br>";
				}
				if($row['green_tea2pack']>0)
				{
				$message.= "Green Tea Gummy Pack of 2"."<span class=\"space9\"></span>".$row['green_tea2pack']."<span class=\"space10\"></span>"."₹2129"."<br>";
				}
				if($row['green_tea4pack']>0)
				{
					$message.= "Green Tea Gummy Pack of 4"."<span class=\"space11\"></span>".$row['green_tea4pack']."<span class=\"space12\"></span>"."₹4029"."<br>";
				} 
				if($row['combo']>0)
				{
					$message.= "GTG and ACVG Combo"."<span class=\"space13\"></span>".$row['combo']."<span class=\"space14\"></span>"."₹2129"."<br>";
				}
				if($row['combo2']>0)
				{
					$message.= "GTG and ACVG Combo Pack of 2"."<span class=\"space15\"></span>".$row['combo2']."<span class=\"space16\"></span>"."₹4029"."<br>";
				}
			$message.='
		</p>
		<hr><br>
		<p class="list3">
			<strong>SUB TOTAL</strong> ₹'. $row['amount'].'
		</p>
		<p class="list6">
			<strong>Shipping + Handling</strong> Free
		</p>
		<p class="list7">
			<strong>Sales Tax</strong> Inclusive
		</p>
		<p class="list8">
			<strong>TOTAL</strong> ₹'.$row['amount'].'
		</p>
		<br>
		<hr>
		<br>
		<p class="list9">Your order will be delivered in next 7-10 business working days.</p>	
	</div>
                     
</body>
</html>  ';
// Sending email
if($row['mail']!=1){
mail($to, $subject, $message, $headers);
echo 'mail sent!';

mail('@gmail.com', $subject, $message, $headers);
mail('@gmail.com', $subject, $message, $headers);
mail('@gmail.com', $subject, $message, $headers);
$mail="update regestration set mail=1 WHERE id='".$_SESSION['OID']."'";
mysqli_query($conn,$mail);
}
else{echo 'mail already sent!';}

if(!$_SESSION['OID']){
	echo "<script>window.location.href='index.html'</script>";
}
?>