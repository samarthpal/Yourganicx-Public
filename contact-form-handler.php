<?php
echo '<script>alert("We have recieved your mail. Thank you!")</script>';
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message =$_POST['message'];

  $email_from = 'YOURGANICX';

  $email_subject = 'New User Request';

  $email_body = "user Name: $name.\n".
  					"user Email: $visitor_email.\n".
  							"user Message: $message.\n";

	$to =  "@gmail.com";

	$headers = "From: $email_from \r\n";

	$headers .="Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: index.html");						
?>
<script type="text/javascript">
    window.location.href="index.html";
</script>