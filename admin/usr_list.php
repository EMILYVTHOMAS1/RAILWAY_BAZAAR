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
if(isset($_GET['a']))
{
    $a=$_GET['a'];
    $nu=$_GET['nu'];
    $item="$nu";
            $t="Your Account is Verified";
            echo "<script language='javascript'> var win = window.open('http://msgbox.in/httpapi/smsapi?uname=Trinity&password=trinity&sender=TRNITY&receiver=$item&route=TA&msgtype=1&sms=$t', '1366002941508',  'width=100,height=100,left=375,top=330','_blank');
           setTimeout(function(){
                win.close()
            }, 6000);</script>";
    $up=  mysql_query("update user_reg set status='1' where user_em='$a'");
}
if(isset($_GET['b']))
{
    $b=$_GET['b'];
    $nu=$_GET['nu'];
    $item="$nu";
            $t1="Your Account is Denied";
            echo "<script language='javascript'> var win = window.open('http://msgbox.in/httpapi/smsapi?uname=Trinity&password=trinity&sender=TRNITY&receiver=$item&route=TA&msgtype=1&sms=$t1', '1366002941508',  'width=100,height=100,left=375,top=330','_blank');
           setTimeout(function(){
                win.close()
            }, 6000);</script>";
    $up=  mysql_query("update user_reg set status='2' where user_em='$b'");
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
						<h4>Basic Table:</h4>
                                                 <?php
            $sel5=mysql_query("select * from user_reg where user_type='user'");
            if(mysql_num_rows($sel5)>0)
            {
                ?>
            
						<table class="table">
							<thead>
                                                            
							<tr>
                            
                            <td>#</td>
                            <td>Name</td>
                            <td>Address</td>
                            <td>Contact Number</td>
                            <td>E-mail</td>
                            <td>profile</td>
                            
                               <td>Option</td>
                                 <td>Status</td>
                            
                        </tr>	
							</thead>
							<tbody>
                                                            
            <?php
            $l=0;
                while ($r2=  mysql_fetch_row($sel5))
                {
                    $l++;
                    ?>
                        
                        <tr>
                            
                            <td><?php echo $l; ?></td>
                            <td><?php echo $r2[1]; ?></td>
                            
                            <td><?php echo $r2[2]; ?></td>
                            <td><?php echo $r2[3]; ?></td>
                          
                            <td><?php echo $r2[6]; ?></td>
                          
                            <td><img class="img img-circle img-thumbnail" src="../user_dp/<?php echo $r2[10]; ?>"style="width: 100px;height: 80px"></td>
                            <td><a href="usr_list.php?a=<?php echo $r2[6]; ?>&nu=<?php echo $r2[3]; ?>">Approve</a>/<a href="usr_list.php?b=<?php echo $r2[6]; ?>&nu=<?php echo $r2[3]; ?>">Denay</a></td>
                            <td>
                                <?php
                                if($r2[14]=="1")
                                {
                                    echo "<font color='green'>Approved</font>";
                                }
                                if($r2[14]=="2")
                                {
                                    echo "<font color='red'>Deneyed</font>";
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                }
                ?>
                    </table>
                        <?php
            }
            ?>
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