<?php
include("../connection.php");
session_start();
$user_name=$_SESSION['shop'];
 if($user_name=$_SESSION['shop'])
 {
     
 }
 else {
header("location:index.php");     
}
if(isset($_POST['Add_Product']))
{
    $pro_name=$_POST['pro_name'];
    $pro_pic=$_FILES['pro_pic']['name'];
    $pro_price=$_POST['pro_price'];
    $pro_price2=$_POST['pro_price2'];
    $pro_des=$_POST['pro_des'];

    $shop_ns=$_POST['shop_ns'];
    $sel7=  mysql_query("select * from add_product");
    $c=  mysql_num_rows($sel7);
    $c1=$c+1;
    $np=$c1."".substr($pro_pic,strrpos($pro_pic,"."));
move_uploaded_file($_FILES['pro_pic']['tmp_name'],getcwd()."\\../product\\$np");

$sel14=mysql_query("select * from shop_reg where user_id='$user_name'");
$r9=mysql_fetch_row($sel14);
   $ins4=  mysql_query("insert into add_product values('','$pro_name','$np','$pro_price','$pro_price2','$pro_des','0','$r9[4]','$shop_ns','$user_name','$r9[12]','$r9[5]','$r9[1]')");
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

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head> 
<?php


include 'menu.php';


?>
		<!-- //header-ends -->
		<!-- main content start-->
                
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
                                        <div class=" form-grids row form-grids-right">
                                            
                                            
                                            
                                            <div class="panel-body widget-shadow">
                                                
                                                
                                                <div class="container">
                                                    <h2 style="color: #ec971f; " align="center"><?php echo strtoupper($user_name); ?> Manegment portal</h2>
           <h4 style="color: #ec971f; " align="center">Add product</h4>
                                                    <div class="col-lg-1"></div>
                                                    <div class="col-lg-10">
                                                    <form method="post" enctype="multipart/form-data">
               
             
                 
                 <table class="table table-responsive table-bordered table-condensed">
                  <tr>
                      <td>Product Name :</td>
                      <td> <input type="text" name="pro_name" class="form-control"></td>
                   </tr>
                   <tr>
                      <td>Product Image :</td>
                      <td> <input type="file" name="pro_pic" class="form-control"></td>
                   </tr>
                   <tr>
                      <td>Discount Price :</td>
                      <td> <input type="text" name="pro_price" class="form-control"></td>
                   </tr>
                    <tr>
                      <td>Original Price :</td>
                      <td> <input type="text" name="pro_price2" class="form-control"></td>
                   </tr>
                   <tr>
                      <td>Product Description:</td>
                      <td> <textarea name="pro_des" class="form-control"></textarea></td>
                   </tr>
                      <tr>
                      <td>Product ID:</td>
                      <td> <input type="number" maxlength="4" name="shop_ns" class="form-control"></td>
                   </tr>
                     <tr>
                     
                         <td colspan="2" align="center"> <input type="submit" name="Add_Product" value="Add Product" class="btn btn-warning"></td>
                   </tr>
               </table>
                     
             
           </form>
                                                    </div>
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