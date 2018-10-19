<?php
include("../connection.php");
session_start();

$user_name=$_SESSION['admin'];

 if($user_name=$_SESSION['admin'])
 {
     
 }
 else {
header("location:index.php");     
}
?>
<?php
                if(isset($_POST['mngTrain']))
{
                    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
    $t3=$_POST['t3'];
 
   $log=mysql_query("select * from user_reg where  user_pass='$t1' and user_type='admin'");
if(mysql_num_rows($log)>0)
{   
 $up=  mysql_query("update user_reg set user_pass='$t3' where user_type='admin'");
 if($up>0)
    {
       header("location:chg.php");
}
    
}
else
{
   header("location:chg.php?fail=1"); 
}
}
?>


<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Forms :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<script type="text/javascript">
    
    
    function chkc(b2)
{
var k5=b2.length;
var ch2=/([0-9])$/;
if(ch2.test(b2)==false)
{
document.getElementById("o3").innerHTML="<font color='red'>*Only Numbers*</font>";
$("#btn").hide();
return false;
}
else if(k5!=10)
{
document.getElementById("o3").innerHTML="<font color='red'>*Please Check Your Mobile Number*</font>";
$("#btn").hide();
return false;
}
else
{
  document.getElementById("o3").innerHTML="";  
  $("#btn").show();
}
}
  
 function chkp(c)
{
var s=document.getElementById("p10").value;

if(s==c)
{
document.getElementById("p").innerHTML="<font color='Green'>*Password is Correct*</font>";
$("#btn").show();
return false;
}
else
{
document.getElementById("p").innerHTML="<font color='red'>*Verfy Password*</font>";
$("#btn").hide();
}
}





function validateemail(a)  
     {  
          //var a = document.myform.email.value;  
          var atposition = a.indexOf("@");  
          var dotposition = a.lastIndexOf(".");  
          if (atposition<1 || dotposition<atposition+2 || dotposition+2>=a.length) 
          {  
               document.getElementById("em").innerHTML="<font color='red'>*Please Check Your Email Address*</font>";
                $("#btn").hide();  
          }  
          else
{
                document.getElementById("em").innerHTML="";  
  $("#btn").show();
}
     }  
    </script>
</head> 
<?php
include 'menu.php';

?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1"></h2>
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
                                                    <h4>Change Password : 
                                                        <?php
                                                        if(isset($_GET['fail']))
                                                        
                                                        {
                                                        ?>
                                                        
                                                        <span style="color: red">Incorrect Password</span></h4>
                                                        <?php
                                                        }
                                                        ?>
						</div>
						<div class="form-body">
							<form method="post" enctype="multipart/form-data"> 
                                                            <div class="form-group"> <label for="exampleInputEmail1">Old Password</label> <input type="password" name="t1" class="form-control"  placeholder="Enter Old Password"> </div>
                                                            <div class="form-group"> <label for="exampleInputEmail1">New Password</label> <input type="password" name="t2" class="form-control"  placeholder="Enter New Password" id="p10"> </div>
                                                            <div class="form-group"> <label for="exampleInputEmail1">Re Enter Password</label> <input type="password" name="t3" class="form-control"  placeholder="Re-Enter New Password"onblur="chkp(this.value)" /><span id="p"></span></div>
                                                            </div>
                                                            
                                            <center>                 
                            <input type="submit" value="Update Now"name="mngTrain" class="btn btn-success"id="btn"> </form> 
                                                    </center>
                                            <br/>
                                                </div>
                                        
					</div>
                                        </div>
                                        
					
					
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
	   </div>
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
   
</body>
</html>