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
                if(isset($_POST['m']))
{
                    
  $t1=$_POST['t1'];
  $t2=$_POST['t2'];
  $t3=$_POST['t3'];
  
      $ins7=  mysql_query("insert into train values('','$t1','$t2','$t3','0')");
      
}
?>
<?php
if(isset($_GET['del']))
{
    $del1=mysql_query("delete from train where id='".$_GET['del']."'");
    //echo mysql_error();
    if($del1>0)
    {
       header("location:ma_station.php");
}
}
                            

                            
    ?>
<?php
if(isset($_GET['del']))
{
    $del1=mysql_query("delete from add_cat where id='".$_GET['del']."'");
    //echo mysql_error();
    if($del1>0)
    {
       header("location:cate.php");
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

</head> 
<?php
include 'menu.php';

?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">Train</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Add Train :</h4>
						</div>
						<div class="form-body">-->
							<form method="post" enctype="multipart/form-data"> 
                                                            <div class="form-group"> <label for="exampleInputEmail1">Train No:</label> <input type="text" name="t1" class="form-control" id="exampleInputEmail1" placeholder="Id..."> </div>
                                                            <div class="form-group"> <label for="exampleInputPassword1">From</label> 
                                                           <select name="t2"  class="form-control" required="required">
                                        <option value="">Choose Stating</option>
                                        <?php
                                        $sel_state=mysql_query("select * from  train_mangmt");
                                        while($r_state=mysql_fetch_row($sel_state))
                                        {
                                            ?>
                                        <option value="<?php echo $r_state[0] ?>"><?php echo $r_state[4] ?></option>
                                       <?php
                                        }
                                        ?>
                                    </select>
                                                            </div>
                                                            
                            <div class="form-group"> <label for="exampleInputPassword1">Destination</label> 
                            <select name="t3" class="form-control" required="required">
                                        <option value="">Choose Destination</option>
                                        <?php
                                        $sel_state=mysql_query("select * from  train_mangmt");
                                        while($r_state=mysql_fetch_row($sel_state))
                                        {
                                            ?>
                                        <option value="<?php echo $r_state[0] ?>"><?php echo $r_state[4] ?></option>
                                       <?php
                                        }
                                        ?>
                                    </select>
                            
                            </div>
                                                            
                            <input type="submit" value="Add Now"name="m" class="btn btn-success"> </form> 
						</div>
					</div>
                                        <div class=" form-grids row form-grids-right">
                                            
                                            
                                            
                                            <div class="panel-body widget-shadow">
						<h4>Train Details:</h4>
                                                <?php 
    $sel11=  mysql_query("select * from train order by id desc");
    if (mysql_num_rows($sel11)>0)
    {
           ?>
						<table class="table">
							<thead>
                                                            
								<tr>
            <td>#</td>
            <td>Train id</td>
             <td>From</td>
              
               <td>To</td>
                
                 <td>More</td>
        </tr>
							</thead>
							<tbody>
                                                            <?php
    $i=0;
        while($r6=  mysql_fetch_row($sel11))
        {
            $i++;
           ?>
 
								<tr>
            <td><?php echo $i ?></td>
             <td><?php echo $r6[1] ?></td>
              <td>
                  <?php 
              $sel41=  mysql_query("select * from  train_mangmt where id='$r6[2]'");
              if(mysql_num_rows($sel41)>0)
              {
                  $r30=  mysql_fetch_row($sel41);
                  echo $r30[4];
              }
              
              ?></td>
               <td><?php 
              $sel42=  mysql_query("select * from  train_mangmt where id='$r6[3]'");
              if(mysql_num_rows($sel42)>0)
              {
                  $r30=  mysql_fetch_row($sel42);
                  echo $r30[4];
              }
              ?></td>
                
               <td><a href="ma_stop.php?mid=<?php echo $r6[0]; ?>&tid=<?php echo $r6[1]; ?>"<span style="color: #008DE7" class="glyphicon glyphicon-plus"></span>&nbsp;<a href="ma_station.php?del=<?php echo $r6[0]; ?>"<span style="color: red" class="glyphicon glyphicon-trash"></span></td>
                 
								
        </tr>
								<?php
           
        }
        ?>
							</tbody>
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
		   <p> <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
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