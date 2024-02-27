<?php
require('top.inc.php');
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='delivery_status'){
		$operation=get_safe_value($con,$_GET['operation']);
		$id=get_safe_value($con,$_GET['id']);
		if($operation=='active'){
			$delivery_status='1';
			$id=get_safe_value($con,$_GET['id']);
		$mailsql="SELECT * FROM regestration WHERE id='$id'";
		$mailres=mysqli_query($con,$mailsql);
		$mailrow=mysqli_fetch_assoc($mailres);
			if ($mailrow['status']=='complete')
			{$to = $mailrow['email'];
$subject = 'Delivered';
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
	font-family: \'Dancing \', cursive;
	font-weight: 700;
	font-size: 100px;
	text-shadow: 2px 2px #151729;
}
.success h3{
	background: #7fd2a4;
	color: #fff;
	margin-top: 2%;
	width: 30%;
	margin-bottom: 20px;
	font-size: 15px;
}
.success h3 span:first-child{
	margin-right: 10%;
	font-size: 20px;
}
.list0{
	width: 30%;
	margin-bottom: 5px;
	margin-left: 1%;
	display: flex;
	flex-direction: row;
}
.list01{
	width: 20%;
	color: #7fd2a4;
}
.list02{
	width: 78%;
}
.list{
	width: 30%;
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
	margin-left: 62%;
}
.list1 {
	width: 30%;
	margin-left: 0px;
	margin-bottom: 5px;
}
.list1 span{
	width: 10%;
}
.list1 span:nth-child(1){
	margin-left: 0%;
}
.list1 span:nth-child(2){
	margin-left: 50%;
}
.list2{
	margin-left: 10px;
	margin-bottom: 5px;
}
.list2 span{
	color: #7fd2a4;
}
.list3{
	width: 30%;
	margin-bottom: 5px;
	margin-left: 0px;
}
.list3 strong{
	color: #7fd2a4;
	margin-right: 60%;
}
.list6{
	width: 30%;
	margin-bottom: 5px;
	margin-left: 0px;
}
.list6 strong{
	color: #7fd2a4;
	margin-left: -4%;
	margin-right: 43%;
}
.list7{
	width: 30%;
	margin-bottom: 5px;
	margin-left: 0px;
}
.list7 strong{
	color: #7fd2a4;
	margin-left: 4%;
	margin-right: 62%;
}
.list8{
	width: 30%;
	margin-bottom: 5px;
	margin-left: 0px;
}
.list8 strong{
	color: #7fd2a4;
	margin-left: 0%;
	margin-right: 68%;
}
hr{
	width: 30%;
	height: 2px; 
	background: #7fd2a4;
	border: none;
}
.list4 span{
	color: #7fd2a4;
}
.list4{
	width: 30%;
	margin-left: 0px;
	margin-top: 15px;
}
.list4 span:nth-child(1){
	margin-left: 0%;
}
.list4 span:nth-child(2){
	margin-left: 43%;
}
.list4 span:nth-child(3){
	margin-left: 4%;
}
.list5{
	width: 30%;
	margin-left: 1%;
	margin-top: 2%;
	margin-bottom: 2%;
}
.space1{
	margin-left: 20%;
}
.space2,.space4,.space6,.space8,.space10,.space12,.space14,.space16{
	margin-right: 12%;
}
.space3{
	margin-left: 7.5%;
}
.space5{
	margin-left: 7.4%;
}
.space7{
	margin-left: 37.4%;
}
.space9{
	margin-left: 24.8%;
}
.space11{
	margin-left: 24.8%;
}
.space13{
	margin-left: 47.8%;
}
.space15{
	margin-left: 44.8%;
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
@media (max-width: 992px) {
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
	margin-right: 19%;
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
.space7{
	margin-left: 37%;
}
.space9{
	margin-left: 24.5%;
}
.space11{
	margin-left: 24.5%;
}
.space13{
	margin-left: 47.1%;
}
.space15{
	margin-left: 44.1%;
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
		<!--<img src="assets/images1/tick1.png">-->
		<h1>Your Order Has Been Delivered<span>!</span></h1>
		<h3><span>Order Confirmation</span><span>#'. $mailrow['payment_id'].'</span>
	</h3>
		<div class="list0"align="center">
			<div class="list01"align="left">
				<strong>Billed To:</strong><br><br><br><br>
				<strong>email:</strong> <br><br><br><br>
				<strong>phone:</strong>
			</div>
			<div class="list02" align="right">
				'. $mailrow['first_name']."". $mailrow['last_name'].'
				'.$mailrow['email'].' 
				'.$mailrow['mobile'].'
			</div>
		</div>
		<br>
		<p class="list"><span align="center"><strong>Date of Issue:</strong></span></p>
		<!--<p class="list">Purchased Item(
			<input type="textbox" name="qty" id="QTY" placeholder="Quantity" value="5" disabled="disabled"/>)
			<input type="textbox" name="total" id="ttl" placeholder="Total" value="" disabled="disabled"/>
		</p>-->
		<p class="list1">
			 <span align="center">'.$mailrow['date'].'</span>
		</p><br>
		<p class="list2">
			<span><strong>Delivery Address:</strong></span><br>Apartment '. $mailrow['apartment'].'<br>'. $mailrow['address'].' <br>'. $mailrow['city'].' <br> '.$mailrow['state'].'
		</p><br>
		<hr>
		<p class="list4">
			<span><strong>Description</strong></span><span><strong>quantity</strong></span><span><strong>Amount</strong></span>
		</p>
		<p class="list5" align="left">';
			 
				/*if($row['vinegar']>0)
				{
					echo "Apple Cider Vinegar Gummy"."<span class=\"space1\"></span>".$row['vinegar']."<span class=\"space2\"></span>"."₹1119"."<br>";
				}
				if($row['vinegar2pack']>0)
				{
					echo "Apple Cider Vinegar Gummy 2 pack"."<span class=\"space3\"></span>".$row['vinegar2pack']."<span class=\"space4\"></span>"."₹2129"."<br>";
				}
				if($row['vinegar4pack']>0)
				{
					echo "Apple Cider Vinegar Gummy 4 pack"."<span class=\"space5\"></span>".$row['vinegar4pack']."<span class=\"space6\"></span>"."₹4029"."<br>";
				} 
				if($row['green_tea']>0)
				{
					echo "Green Tea Gummy"."<span class=\"space7\"></span>".$row['green_tea']."<span class=\"space8\"></span>"."₹1119"."<br>";
				}
				if($row['green_tea2pack']>0)
				{
					echo "Green Tea Gummy 2 pack"."<span class=\"space9\"></span>".$row['green_tea2pack']."<span class=\"space10\"></span>"."₹2129"."<br>";
				}
				if($row['green_tea4pack']>0)
				{
					echo "Green Tea Gummy 2 pack"."<span class=\"space11\"></span>".$row['green_tea4pack']."<span class=\"space12\"></span>"."₹4029"."<br>";
				} 
				if($row['combo']>0)
				{
					echo "Combo pack"."<span class=\"space13\"></span>".$row['combo']."<span class=\"space14\"></span>"."₹2129"."<br>";
				}
				if($row['combo2']>0)
				{
					echo "Combo 2 pack"."<span class=\"space15\"></span>".$row['combo2']."<span class=\"space16\"></span>"."₹4029"."<br>";
				}*/
			
		$message.='</p>
		<hr><br>
		<p class="list3">
			<strong>SUB TOTAL</strong> ₹'. $mailrow['amount'].'
		</p>
		<p class="list6">
			<strong>Shipping + Handling</strong> Free
		</p>
		<p class="list7">
			<strong>Sales Tax</strong> Inclusive
		</p>
		<p class="list8">
			<strong>TOTAL</strong> ₹'. $mailrow['amount'].'
		</p>
		<br>
		<hr>
	</div>
                     



     <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
                     
</body>
</html>  ';
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';echo "<script>window.location = 'orders.php';</script>";
} else{
    echo 'Unable to send email. Please try again.';
}
            mail('@gmail.com', $subject, $message, $headers);}
		}else{
			$delivery_status='0';
		}
		$update_status_sql="update regestration set delivery_status='$delivery_status' where id='$id'";
		mysqli_query($con,$update_status_sql);
	}
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from regestration where id='$id'";
		mysqli_query($con,$delete_sql);
	}


}

$sql="select * from regestration order by id desc";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Orders </h4>
				   <!--<h4 class="box-link"><a href="manage_product.php">Add Product</a> </h4>-->
				</div>
				<div>
				<form action="">
				<table id="p_table"><thead>
							<tr>
							   <th>Payment id</th>
							   <th>Payment status</th>
                              <th>City</th>
                               <th>Email</th>
							   <th>Mobile</th>
							   <th> Date</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
						     <td><input type="text" id="p_id" name="p_id"/></td>
						     <td><input type="text" id="p_status" name="p_status"/></td>
						     <td><input type="text" id="p_city" name="p_city"/></td>
                        
						     <td><input type="email" id="p_email" name="p_email"/></td>
						     <td><input type="number" id="p_mobile" name="p_mobile"/></td>
						     <td><input type="text" id="p_date" name="p_date"/></td>
						    <!-- <td><input type="date" id="p_date" name="p_date" /></td>
						     <td><input type="button" id="search" name="search" value="search"/></td>
						     <td><input type="button" id="clear" name="clear" value="clear"/></td>-->
						     
						     
						 </tbody>
						 </table>

				</form>
				
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table" id="table">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>ID</th>
							   <th>First name</th>
							   <th>Last name</th>
							   <th>email</th>
							   <th>Mobile</th>
							   <th>State</th>
							   <th>City</th>
							   <th>Address</th>
							   <th>Apartment</th>
							   <th>Pin</th>
							   <th>Vinegar</th>
							   <th>Vinegar 2 Pack</th>
							   <th>Vinegar 4 Pack</th>
							   <th>Green Tea</th>
							   <th>Green Tea 2 Pack</th>
							   <th>Green Tea 4 Pack</th>
							   <th>Combo</th>
							   <th>Combo 2</th>
							   <th>Amount</th>
							    <th>Payment Status</th>
							   <th>Transaction id</th>
							   <th>Delivery Status</th>
							   <th>Date</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=0;
						
							while($row=mysqli_fetch_assoc($res)){ $i=$i+1; ?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
						 <td><?php echo $row['id']?></td>
							   <td><?php echo $row['first_name']?></td>
							   <td><?php echo $row['last_name']?></td>
							   <td><?php echo $row['email']?></td>
							   <td><?php echo $row['mobile']?></td>
							   <td><?php echo $row['state']?></td>
							   <td><?php echo $row['city']?></td>
							   <td><?php echo $row['address']?></td>
							   <td><?php echo $row['apartment']?></td>
							   <td><?php echo $row['pin']?></td>
							   <td><?php echo $row['vinegar']?></td>
							   <td><?php echo $row['vinegar2pack']?></td>
							   <td><?php echo $row['vinegar4pack']?></td>
							   <td><?php echo $row['green_tea']?></td>
							   <td><?php echo $row['green_tea2pack']?></td>
							   <td><?php echo $row['green_tea4pack']?></td>
							   <td><?php echo $row['combo']?></td>
							   <td><?php echo $row['combo2']?></td>
							   <td><?php echo $row['amount']?></td>
							   <td><?php echo $row['status']?></td>
							   <td><?php echo $row['payment_id']?></td>
							   <td><?php if($row['delivery_status']==1 && $row['status']!="pending"){echo 'delivered';} 
							   else { echo 'pending';} ?></td>
							   <td><?php echo $row['date']?></td>
							   <td>
								<?php
								if($row['delivery_status']==1 && $row['status']!="pending"){
									echo "<span class='badge badge-complete'><a href='?type=delivery_status&operation=deactive&id=".$row['id']."'>Change status</a></span>&nbsp;";
									
									
								}else{
									echo "<span class='badge badge-pending'><a href='?type=delivery_status&operation=active&id=".$row['id']."'>Delivered</a></span>&nbsp;";
								}
								echo "<span class='badge badge-edit'><a href='manage_product.php?id=".$row['id']."'>Edit</a></span>&nbsp;";
								
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
								
								?>
							   </td>
							</tr>
							<?php } ?>
						 </tbody>
					  </table>
					  <script>
                                 $(document).ready(function(){
                                  $("#p_email").on("keyup", function() {
                                    var value = $(this).val().toLowerCase();
                                    $("#table tr").filter(function() {
                                      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                    });
                                  });$("#p_id").on("keyup", function() {
                                    var value = $(this).val().toLowerCase();
                                    $("#table tr").filter(function() {
                                      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                    });
                                  });$("#p_status").on("keyup", function() {
                                    var value = $(this).val().toLowerCase();
                                    $("#table tr").filter(function() {
                                      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                    });
                                  });$("#p_mobile").on("keyup", function() {
                                    var value = $(this).val().toLowerCase();
                                    $("#table tr").filter(function() {
                                      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                    });
                                  });$("#p_date").on("keyup", function() {
                                    var value = $(this).val().toLowerCase();
                                    $("#table tr").filter(function() {
                                      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                    });
                                  });$("#p_city").on("keyup", function() {
                                    var value = $(this).val().toLowerCase();
                                    $("#table tr").filter(function() {
                                      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                    });
                                  });
                                });
                </script>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>