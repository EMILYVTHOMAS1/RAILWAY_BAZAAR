<?php
include("../connection.php");
session_start();
$user_name=$_SESSION['admin'];
 if($user_name=$_SESSION['admin']) {
     
 } else {
    header("location:index.php");     
}
if(isset($_POST['addcat'])) {
    $num=$_POST['num'];
    $type=$_POST['type'];
    $up=$_FILES['up']['name'];
    $nup=$type."".substr($up,strrpos($up,"."));
    move_uploaded_file($_FILES['up']['tmp_name'],getcwd()."\\shop_logo\\$nup");

    $ins1=mysql_query("insert into add_cat values('','$num','$type','$nup')");
    if($ins1>0){
        header("location:cate.php?suss=1");
    }
             
}
if(isset($_GET['del']))
{
    $del1=mysql_query("delete from add_cat where id='".$_GET['del']."'");
    //echo mysql_error();
   
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
<title>Railway Bazaar</title>
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
					<h2 class="title1">Forms</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Basic Form1 :</h4>
						</div>
						<div class="form-body">
							<form method="post" enctype="multipart/form-data"> <div class="form-group"> <label for="exampleInputEmail1">Category Id</label> <input type="text" name="num" class="form-control" id="exampleInputEmail1" placeholder="Id..."> </div> <div class="form-group"> <label for="exampleInputPassword1">Type</label> <input type="text"name="type" class="form-control" id="exampleInputPassword1" placeholder="name..."> </div> <div class="form-group"> <label for="exampleInputFile">File input</label> <input type="file"name="up" id="exampleInputFile">  </div> <div class="checkbox">  </div> <input type="submit" value="Add Now"name="addcat" class="btn btn-success"> </form> 
						</div>
					</div>
                                        <div class=" form-grids row form-grids-right">
                                            
                                            
                                            
                                            <div class="panel-body widget-shadow">
						<h4>Basic Table:</h4>
                                                <?php
    $sel2=mysql_query("select * from add_cat");
    if(mysql_num_rows($sel2)>0)
    {
        ?>
						<table class="table">
							<thead>
                                                            
								<tr>
								  <th>#</th>
								  <th>Category</th>
								  <th>Image/th>
								  <th>More</th>
								</tr>
							</thead>
							<tbody>
                                                             <?php
        $i=0;
        while ($r1=  mysql_fetch_row($sel2))
        {
            $i++;
            ?>
								<tr>
								  <th><?php echo $i; ?></th>
								  <td><?php echo $r1[2]; ?></td>
								  
                                                                  <td><a target="_blank" href="shop_logo/<?php echo $r1[3]; ?>">
                                                                         <span style="color: lightskyblue" class="glyphicon glyphicon-picture"></span></a></td>
                                                                  <td><a href="cate.php?del=<?php echo $r1[0]; ?>">
                                                                          <span style="color: red" class="glyphicon glyphicon-trash"></span></a></td>
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
		   <p></p>
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