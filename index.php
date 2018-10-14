<?php
include("connection.php");
if(isset($_POST['b1']))
{
    
   $user_name=$_POST['u'];
   $p=$_POST['p'];
   $sel1=mysql_query("select * from user_reg where user_id='$user_name' and user_pass='$p'");
   if(mysql_num_rows($sel1)>0)
{
    $r=mysql_fetch_row($sel1);
    

    session_start();
    
    if($r[13]=="1")
    {
        
        
    }
   
    elseif($r[13]=="user")
    {
        if($r[14]=="1")
        {
        $_SESSION['user']=$user_name;
        header("location:user/home.php");
    }
     if($r[14]=="0")
        {
        
        header("location:index.php?error=2");
    }
    }

     else{
        header("location:index.php?error='1'"); 
    }
}
$sel6=mysql_query("select * from shop_reg where user_id='$user_name' and passwd='$p'");
if(mysql_num_rows($sel6)>0)
{
    session_start();
      $r1=mysql_fetch_row($sel6); 
    if($r1[10]=="shop_admin")
    {
        
        $_SESSION['shop_admin']=$user_name;
        header("location:shopadminhome.php");
    }
     if($r1[10]=="shop")
    {
        if($r1[11]=="1")
        {
        $_SESSION['shop']=$user_name;
        header("location:shop_admin/home.php");
    }
    }
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
<title>RAILWAY BAZAAR++</title>
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
			<h2>Login to your account if you are already Registered. </h2>
			<h3>Login Form</h3>
			<div class="login-form">			
							<form  method="post">
								<input type="text"  name="u" placeholder="Username" required="" />
								<input type="password" class="form-control"  name="p" placeholder="Password" required="" />
								
								
								<input type="submit"name="b1" value="Submit">
							</form>	
						</div>	
		</div>
	<script src="lo_temp/js/jquery.vide.min.js"></script>
	<!-- //banner --> 
	 <!--copyright-->
		<div class="copy w3ls">
                   
	    </div>
	<!--//copyright-->
	</div>	
	</div>	
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
</body>
</html>