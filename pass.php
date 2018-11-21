<?php
include("connection.php");

if(isset($_POST['b1']))
{
    $em=$_POST['t1'];
    
$log=mysqli_query($con,"select * from user_reg where user_em='$em'");
if(mysqli_num_rows($log)>0)
{
    $r1=  mysqli_fetch_row($log);
    $em1=$r1[11];
    $pas=$r1[12];
    
    
date_default_timezone_set('America/Toronto');
require_once('class.phpmailer.php');
$mail             = new PHPMailer();
$body             = "Your Username is <b>$em1</b> and Password is <b>$pas</b>";
$mail->IsSMTP(); 
$mail->SMTPDebug  =1;                    
$mail->SMTPAuth   = true;                 
$mail->CharSet="UTF-8";
//$mail->SMTPSecure = "tls";                 
$mail->Host       = "mail.trinitytechnology.in"; 
$mail->Port       = 25;
$mail->Username   = "web@trinitytechnology.in";  
$mail->Password   = "abc123!@#";          
$mail->SetFrom('web@trinitytechnology.in', "Railway Bazaar"); 
$mail->Subject    = "Password Recovery";
$mail->MsgHTML($body);
$address = "$em";
$mail->AddAddress($address, "Railway Bazaar");

if($mail->Send()) {
    echo"success";
}


}
else
{
    echo"invalid Email";
}
    

}
                                    ?>

<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
<title>Railway Bazaar</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Freight Shipping Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<link href="lo_temp/css/font-awesome.css" rel="stylesheet">
<link href="lo_temp/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="lo_temp/js/jquery-2.2.3.min.js"></script> 
<!-- //js -->
<!-- web-fonts -->
<link href="lo_temp///fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="lo_temp///fonts.googleapis.com/css?family=Poller+One" rel="stylesheet">
<!-- //web-fonts --> 
</head>
<body>
	<!-- banner --> 
	<div class="video" data-vide-bg="video/ship"> 
	<div class="center-container">
	    <div class="w3ls-agileinfo">
		
          <h1> Railway Bazaar</h1>	
		  </div>
		 <div class="bg-agile">
		 <div class="top-icons-agileits-w3layouts">
                         <a href="index.php"><p><i class="fa fa-home" aria-hidden="true"></i></p></a>
			<span></span>
                        <a href="usr.php"><p class="mid-w3ls"><i class="fa fa-user" aria-hidden="true"></i></p></a>
			<span></span>
                        <a href="org.php"><p><i class="fa fa-shopping-cart" aria-hidden="true"></i></p></a>
			
			 <ul class="icons-text">
				<li>Home</li>
				<li>User</li>
				<li>Shop</li>
			 </ul>
		 </div>
			<h2>Enter your Email which is used to register your account. </h2>
			<h3>Password Recovery</h3>
			<div class="login-form">			
							<form  method="post">
								<input type="text"  name="t1" placeholder="Enter Your Registered Email" required="" />
								
                                                                
								<input type="submit"name="b1" value="Send Mail">
							</form>	
						</div>	
		</div>
	<script src="lo_temp/js/jquery.vide.min.js"></script>
	<!-- //banner --> 
	 <!--copyright-->
		<div class="copy w3ls">
		    <p></p>
	    </div>
	<!--//copyright-->
	</div>	
	</div>	
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
</body>
</html>