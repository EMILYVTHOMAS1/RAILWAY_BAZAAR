<?php
include("../connection.php");
session_start();
$user_name=$_SESSION['admin'];

  if(!isset($_SESSION['admin']))
 {
header("location:index.php");     
}
if(isset($_GET['a']))
{
    $a=$_GET['a'];
  
            $t="Your Account is Verified";
            echo "<script language='javascript'> var win = window.open('http://msgbox.in/httpapi/smsapi?uname=Trinity&password=trinity&sender=TRNITY&receiver=$item&route=TA&msgtype=1&sms=$t', '1366002941508',  'width=100,height=100,left=375,top=330','_blank');
           setTimeout(function(){
                win.close()
            }, 6000);</script>";
    $up=  mysql_query("update shop_reg set status='1' where shop_num='$a'");
}
if(isset($_GET['b']))
{
    $b=$_GET['b'];
    
            $t1="Your Account is Denied";
            echo "<script language='javascript'> var win = window.open('http://msgbox.in/httpapi/smsapi?uname=Trinity&password=trinity&sender=TRNITY&receiver=$item&route=TA&msgtype=1&sms=$t1', '1366002941508',  'width=100,height=100,left=375,top=330','_blank');
           setTimeout(function(){
                win.close()
            }, 6000);</script>";
    $up=  mysql_query("update shop_reg set status='2' where shop_num='$b'");
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
            $sel5=mysql_query("select * from shop_reg where type='shop' and status='0'");
            if(mysql_num_rows($sel5)>0)
            {
                ?>
						<table class="table">
							<thead>
                                                            
								<tr>
                            
                            <td>#</td>
                            <td>Shop image</td>
                            <td>Shop Number</td>
                            <td>Shop Name</td>
                            <td>Shop Owner</td>
                            <td>Shop Category</td>
                            <td>Nearest Station</td>
                            <td>Contact with shop</td>
                              
                               <td>Option</td>
                            
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
                            <td><img class="img img-circle img-thumbnail " src="../shop/<?php echo $r2[6]; ?>" width="50px"></td>
                            <td><?php echo $r2[1]; ?></td>
                            
                            <td><?php echo $r2[2]; ?></td>
                            <td><?php echo $r2[3]; ?></td>
                          
                            <td><?php echo $r2[4]; ?></td>
                            <td>
                            <?php
                            $sel=  mysql_query("select * from train_mangmt where id='$r2[5]'");
                            $r=  mysql_fetch_row($sel);
                            echo $r[4]."-".$r[5];
                            ?>
                            
                            </td>
                            <td><?php echo $r2[7]; ?></td>
                            
                            <td><a href="st_enq.php?a=<?php echo $r2[1]; ?>&nu=<?php echo $r2[7]; ?>">Approve</a>/<a href="st_enq.php?b=<?php echo $r2[1]; ?>&nu=<?php echo $r2[7]; ?>">Denay</a></td>
                            
                        </tr>
								<?php
           
        }
        ?>
							</tbody>
						</table>
                                                <?php
    }
 else {
    ?>
                                                <img style="width: 100%;height: 500px" src="images/empty-state-illustrations.gif">
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