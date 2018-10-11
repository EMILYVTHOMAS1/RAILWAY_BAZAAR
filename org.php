<?php
include("connection.php");

if(isset($_POST['shop']))
{
    $shop_num=$_POST['shop_num'];
    $shop_nme=$_POST['shop_nme'];
    $shop_owner=$_POST['shop_owner'];
    $shop_cat=$_POST['shop_cat'];
    $shop_ns=$_POST['shop_ns'];
    $shop_pic=$_FILES['shop_pic']['name']; 
    $shop_cont=$_POST['shop_cont'];
    $shopp=$_POST['shopp'];
    $shopuid=$_POST['shopuid'];
    $ac=$_POST['ac'];
    $sel4=  mysql_query("select * from shop_reg");
    $count=  mysql_num_rows($sel4);
    $count1=$count+1;
$npic=$count1."".substr($shop_pic,strrpos($shop_pic,"."));
move_uploaded_file($_FILES['shop_pic']['tmp_name'],getcwd()."\\shop\\$npic");
$sel24=  mysql_query("select * from bank where acnt='$ac'");
if(mysql_num_rows($sel24)>0)
{
   $shop_cont=$_POST['shop_cont'];
     $item="$shop_cont";
            $t="Please Wait for confirmation";
            echo "<script language='javascript'> var win = window.open('http://msgbox.in/httpapi/smsapi?uname=Trinity&password=trinity&sender=TRNITY&receiver=$item&route=TA&msgtype=1&sms=$t', '1366002941508',  'width=100,height=100,left=375,top=330','_blank');
           setTimeout(function(){
                win.close()
            }, 6000);</script>";
  
   $ins3=  mysql_query("insert into shop_reg values('','$shop_num','$shop_nme','$shop_owner','$shop_cat','$shop_ns','$npic','$shop_cont','$shopuid','$shopp','shop','0','$ac','0') "); 
   
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
<title>railwaybazar</title>
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

<!-- //web-fonts --> 
</head>
<body>
	<!-- banner --> 
	<div class="video" data-vide-bg="video/ship"> 
	<div class="center-container">
	    <div class="w3ls-agileinfo">
		
          <h1> RAILWAY BAZAAR</h1>	
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
			<h2> </h2>
			<h3></h3>
			<div class="login-form">			
							<form method="post" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()">
                                                            <input placeholder="Shop Number" type="text" name="shop_num" required="required" />
                                                            <input type="text"placeholder="Shop Name" name="shop_nme" required="required" />
                                                            <input type="text"Placeholder="Ownership Name" name="shop_owner" required="required"/>
                                                            
                                                            <select name="shop_cat" class="form-control" required="required"> 
                                                                  <option value="-1">--choose one--</option>
                                                                  <?php
                                                                  $sel30=  mysql_query("select * from add_cat");
                                                                  while ($r21=  mysql_fetch_row($sel30))
                                                                  {
                                                                      ?>
                                                                  <option value="<?php echo $r21[2]  ?>"><?php echo $r21[2]  ?></option>
                                                                  <?php
                                                                  }
                                                                  
                                                                  ?>
                                                              </select>
                                                            <select name="shop_ns" class="form-control" required="required" > 
                                                                     <option>---choose one---</option>
                                                                      <?php
                                                                  $sel30=  mysql_query("select * from train_mangmt");
                                                                  while ($r21=  mysql_fetch_row($sel30))
                                                                  {
                                                                      ?>
                                                                  <option value="<?php echo $r21[0] ?>"><?php echo $r21[4]."-".$r21[5]   ?></option>
                                                                  <?php
                                                                  }
                                                                  
                                                                  ?>
                                                              </select>
                                                            
                                                            <input type="file" name="shop_pic" required="required"/>
                                                            <input type="number"placeholder="Contact Number" name="shop_cont" maxlength="10" required="required" class="form-control"/>
                                                            <input placeholder="Username" type="text" name="shopuid" required="required" />
                                                            <input type="password"placeholder="Password" name="shopp" required="required" class="form-control"/>
                                                            <input type="text"placeholder="Your Account Number" name="ac" required="required"/>
                                                            <input name="shop" type="submit" value="Submit">
							</form>	
						</div>	
		</div>
	
	<!-- //banner --> 
	 <!--copyright-->
		
	<!--//copyright-->
	</div>	
	</div>	
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
</body>
</html>