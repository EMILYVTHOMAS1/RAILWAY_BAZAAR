
<a href="../temp/offer.html"><img src="../temp/images/download.png" class="img-head" alt=""></a>
<div class="header">

		<div class="container">
			
			<div class="logo">
                            <h1 ><a href="../temp/index.html"><b>T<br>H<br>E</b>&nbsp;Railway Bazaar<span>The Best Online Supermarket</span></a></h1>
			</div>
			
			
			<div class="header-ri">
				<ul class="social-top">
					<li><a href="../temp/#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="../temp/#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="../temp/#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="../temp/#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>	
			</div>
		

				<div class="nav-top">
					<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
                                                    <li ><a href="home.php" class="hyper "><span>Home</span></a></li>	
							
                                                    <li ><a href="wishlist.php" class="hyper "><span>Wishlist</span></a></li>	
							
                                                    <li ><a href="hist.php" class="hyper "><span>Track Purchase</span></a></li>	
							
							
							
                                                        <li><a href="logout.php" class="hyper"> <span>Logout</span></a></li>
						</ul>
					</div>
					</nav>
                                    
					 <div class="cart" >
					<div class="row text-center">
      <?php
                                    
                                    if(isset($_SESSION['train']))
 {
                                        
                                        
                                    ?>
                                             <a href="#"  data-toggle="modal" data-target="#basicModal"><span style="color: green;font-size: larger" class="fa fa-shopping-cart"><span class="badge badge-notify">
                                                <?php
                                                                    
    $sel20=  mysql_query("select * from cart1 where nme='$user_name' and st='6'");
                     $se_nu=  mysql_num_rows($sel20);
                     echo "$se_nu";
                                                                    
                                                                    ?>
                                                       
                                                                     <?php
 }
 else {
     
 }
 ?>
                                            
                                                                    
                                                                    
                                                    </span></span></a>
  </div>
						
					</div>
                                   
					<div class="clearfix"></div>
				</div>
					
				</div>			
</div>
<?php
if(isset($_GET['del_cart']))
{
    $delc=mysql_query("delete from cart1 where id='".$_GET['del_cart']."'");
    //echo mysql_error();
    if($delc>0)
    {
        
}
}
                            

                            
    ?>

  <!---->
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        
        <h4 class="modal-title" id="myModalLabel">Reservation</h4>
    </div>
      
    <form action="" method="POST">
        <div class="modal-body">
            
            <?php
    $sel20=  mysql_query("select * from cart1 where nme='$user_name' and st='6'");
    if(mysql_num_rows($sel20)>0)
    {
        ?>
            
     
    
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
    $i=0;
        while ($r14=  mysql_fetch_row($sel20))
                
        {
            $pro= mysql_query("select * from add_product where product='$r14[2]' and name='$r14[5]'");
            $pro1= mysql_fetch_row($pro);
            $i++;
            ?>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="../product/<?php echo $pro1[2] ?>" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#"><?php echo $r14[2] ?></a></h4>
                                <h5 class="media-heading"> From <a href="#"><?php echo $r14[5] ?></a></h5>
                                <span>Status: </span><span class="text-success"><strong>Booked</strong></span>
                            </div>
                        </div></td>
                       <td class="col-sm-1 col-md-1 text-center"><strong><?php echo $r14[8] ?></strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?php echo $r14[3] ?>Rs/-</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?php
                        $qn=$r14[8];
                        $pr=$r14[3];
                        $tp=$pr*$qn;
                        echo "$tp";
                        ?> Rs/-</strong></td>
                        <td class="col-sm-1 col-md-1">
                            <a href="wishlist.php?del_cart=<?php echo $r14[0] ?>"<button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button></td>
                    </tr>
                    <?php
                    
        }
        ?>
                    
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
<!--                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>$31.53</strong></h3></td>-->
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td style="float: left"><button type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping</button>
                            
                        </td>
                        <td>
                        
                            <a href="me.php"><span class="btn btn-success">Place Order</span></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        <?php
    }
    ?>
        </div>
        <div class="modal-footer">
            <center>
            <h4 style="color: #009ceb">Approved Order</h4>
            </center>
        </div>
    </form>
    </div>
  </div>
</div>