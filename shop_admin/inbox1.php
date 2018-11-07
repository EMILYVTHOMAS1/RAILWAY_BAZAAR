
<?php
include("../connection.php");
session_start();
$user_name=$_SESSION['shop'];
 if($user_name=$_SESSION['shop'])
 {
     
 }
 else {
header("location:../index.php");     
}

?>
<?php

$nm= mysql_query("select * from shop_reg where user_id='$user_name'");
        $nm1=mysql_fetch_row($nm);
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
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Inbox :: w3layouts</title>
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

</head> 
<?php
include 'menu.php';

?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<h2 class="title1">Mail Page</h2>
				<div class="col-md-4 compose-left">
					<div class="folder widget-shadow">
						<ul>
							<li class="head"><i class="fa fa-folder" aria-hidden="true"></i>Folders</li>
                                                        <li><a href="user_request.php"><i class="fa fa-inbox"></i>Order <span></span></a></li>
                                                        <li><a href="user_request1.php"><i class="fa fa fa-envelope-o"></i>Approved Order </a></li>
                                                        <li><a href="inbox1.php"><i class="fa fa-file-text-o"></i> Complaints <span></span></a> </li>
                                                        <li><a href="inbox2.php"><i class="fa fa-flag-o"></i>Feedback </a></li>
                                                        
						</ul>
					</div>
					
				</div>
				<div class="col-md-8 compose-right widget-shadow">
					<div class="panel-default">
						<div class="panel-heading">
							Inbox 
						</div>
						<div class="inbox-page">
					<h4>Today</h4>
                                        
                                        
                                        
                                        <?php
          $sel15=  mysql_query("select * from post_complient where shop='$nm1[2]'");
          if(mysql_num_rows($sel15)>0)
          {
              ?><?php
                $i=0;
              while ($r10=  mysql_fetch_row($sel15))
              {
                  $i++;
                  $dp=  mysql_query("select * from user_reg where user_id='$r10[1]'");
                  $dp1=  mysql_fetch_row($dp);
                ?>
					<div class="inbox-row widget-shadow" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
                                                <div class="mail"><img src="../user_dp/<?php echo $dp1[10] ?>" style="width: 40px;height: 40px" alt=""/></div>
						<div class="mail mail-name"> <h6><?php echo $dp1[1] ?></h6> </div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i ?>" aria-expanded="true" aria-controls="collapseOne">
							<div class="mail"><p><?php echo $r10[2] ?>--<?php echo $r10[3] ?> </p></div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#"  data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div> 
						</div>
						<div class="mail-right"><p>30th Nov</p></div>
						<div class="clearfix"> </div>
						<div id="collapse<?php echo $i ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							<div class="mail-body">
								<p><?php echo $r10[4] ?></p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
					
				<?php
              }
          }
          ?>
					
				</div>
				
				
						
			</div>
				</div>
				<div class="clearfix"> </div>	
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