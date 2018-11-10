<?php
ob_start();
include("../connection.php");
session_start();
$user_name=$_SESSION['user'];
 if($user_name=$_SESSION['user'])
 {
     
 }
 else {
header("location:../index.php");     
}
?>
<?php
if(isset($_GET['pl']))
{
    $del1=mysqli_query($con,"update cart1 set qnty=qnty+1 where id='".$_GET['pl']."'");
    //echo mysql_error();
    if($del1>0)
    {
        header("location:wishlist.php");   
}
}
                            

                            
    ?>
<?php
if(isset($_GET['mi']))
{
    $del1=mysqli_query($con,"update cart1 set qnty=qnty-1 where id='".$_GET['mi']."'");
    //echo mysql_error();
    if($del1>0)
    {
        header("location:wishlist.php");   
}
}
                            

                            
    ?>
<?php
if(isset($_GET['del_cart']))
{
    $delc=mysqli_query($con,"delete from cart1 where id='".$_GET['del_cart']."'");
    //echo mysql_error();
    if($delc>0)
    {
        
}
}
                            

                            
    ?>
<?php
if(isset($_GET['upd']))
{
    $del1=mysqli_query($con,"update cart1 set st='6' where id='".$_GET['upd']."'");
    //echo mysql_error();
    if($del1>0)
    {
        header("location:wishlist.php");   
}
}
                            

                            
    ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Big store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | About :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../temp/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="../temp/css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="../temp/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../temp/js/move-top.js"></script>
<script type="text/javascript" src="../temp/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="../temp/css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="../temp/js/jstarbox.js"></script>
	<link rel="stylesheet" href="../temp/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->

</head>
<body>
    <?php
    
        include 'menu.php';
    ?>
   <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Wishlist</h3>
		<h4><a href="../temp/index.html">Home</a><label>/</label>Wishlist</h4>
		<div class="clearfix"> </div>
	</div>
</div>

	<!-- contact -->
		<div class="check-out">	 
		<div class="container">	 
	 <div class="spec ">
				<h3>Wishlist</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cross').fadeOut('slow', function(c){
							$('.cross').remove();
						});
						});	  
					});
			   </script>
			<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cross1').fadeOut('slow', function(c){
							$('.cross1').remove();
						});
						});	  
					});
			   </script>	
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cross2').fadeOut('slow', function(c){
							$('.cross2').remove();
						});
						});	  
					});
			   </script>
                            <?php
    $sel20=  mysqli_query($con,"select * from cart1 where nme='$user_name' and st='5' and qnty!='0'");
    if(mysqli_num_rows($sel20)>0)
    {
        ?>
 <table class="table ">
		  <tr>
			<th class="t-head head-it ">Products</th>
			<th class="t-head">Price</th>
		<th class="t-head">Quantity</th>

			<th class="t-head">Purchase</th>
		  </tr>
                  
                 
                   <?php
    $i=0;
        while ($r14=  mysqli_fetch_row($sel20))
                
        {
            $pro=  mysqli_query($con,"select * from add_product where product='$r14[2]' and name='$r14[5]'");
            $pro1=  mysqli_fetch_row($pro);
            $i++;
            ?>
		  <tr class="cross">
			<td class="ring-in t-data">
				<a href="#" class="at-in">
                                    <img src="../product/<?php echo $pro1[2] ?>" style="width: 130px;height: 120px"class="img-responsive" alt="">
				</a>
			<div class="sed">
				<h5><?php echo $r14[2] ?></h5>
			</div>
				<div class="clearfix"> </div>
                                <div class="close1"> <a href="wishlist.php?del_cart=<?php echo$r14[0]  ?>"><i class="fa fa-times" aria-hidden="true"></a></i></div>
			 </td>
			<td class="t-data"><?php
                        $qn=$r14[8];
                        $pr=$r14[3];
                        $tp=$pr*$qn;
                        echo "$tp";
                        ?> Rs/-</td>
			<td class="t-data"><div class="quantity"> 
								<div class="quantity-select">            
                                                                    <a href="wishlist.php?mi=<?php echo $r14[0] ?>"><div class="entry value-minus">&nbsp;</div></a>
										<div class="entry value"><span class="span-1"><?php echo $r14[8]  ?></span></div>									
                                                                                <a href="wishlist.php?pl=<?php echo $r14[0] ?>"><div class="entry value-plus active">&nbsp;</div></a>
								</div>
							</div>
			
			</td>

			<td class="t-data t-w3l"><a class=" add-1" href="wishlist.php?upd=<?php echo $r14[0] ?>">Add To Cart</a></td>
			
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
		 				
	<!--quantity-->
			<script>
			$('.value-plus').on('click', function(){
				var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
				divUpd.text(newVal);
			});

			$('.value-minus').on('click', function(){
				var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
				if(newVal>=1) divUpd.text(newVal);
			});
			</script>
			<!--quantity-->
			

<!--footer-->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grid">
			<h3>About Us</h3>
			<p>Nam libero tempore, cum soluta nobis est eligendi 
				optio cumque nihil impedit quo minus id quod maxime 
				placeat facere possimus.</p>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Menu</h3>
			<ul>
				<li><a href="../temp/index.html">Home</a></li>
				<li><a href="../temp/kitchen.html">Kitchen</a></li>
				<li><a href="../temp/care.html">Personal Care</a></li>
				<li><a href="../temp/hold.html">Household</a></li>						 
				<li><a href="../temp/codes.html">Short Codes</a></li> 
				<li><a href="../temp/contact.html">Contact</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Customer Services</h3>
			<ul>
				<li><a href="../temp/shipping.html">Shipping</a></li>
				<li><a href="../temp/terms.html">Terms & Conditions</a></li>
				<li><a href="../temp/faqs.html">Faqs</a></li>
				<li><a href="../temp/contact.html">Contact</a></li>
				<li><a href="../temp/offer.html">Online Shopping</a></li>						 
				 
			</ul>
		</div>
		<div class="col-md-3 footer-grid">
			<h3>My Account</h3>
			<ul>
				<li><a href="../temp/login.html">Login</a></li>
				<li><a href="../temp/register.html">Register</a></li>
				<li><a href="../temp/wishlist.html">Wishlist</a></li>
				
			</ul>
		</div>
		<div class="clearfix"></div>
			<div class="footer-bottom">
				<h2 ><a href="../temp/index.html"><b>T<br>H<br>E</b>Big Store<span>The Best Supermarket</span></a></h2>
				<p class="fo-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
				<ul class="social-fo">
					<li><a href="../temp/#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="../temp/#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="../temp/#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
					<li><a href="../temp/#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				</ul>
				<div class=" address">
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-home" aria-hidden="true"></i>12K Street , 45 Building Road Canada.</p>
					</div>
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-phone" aria-hidden="true"></i>+1234 758 839 , +1273 748 730</p>	
					</div>
					<div class="col-md-4 fo-grid1">
						<p><a href="../temp/mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@example1.com</a></p>
					</div>
					<div class="clearfix"></div>
					
					</div>
			</div>
		<div class="copy-right">
			<p> &copy; 2016 Big store. All Rights Reserved | Design by  <a href="../temp/http://w3layouts.com/"> W3layouts</a></p>
		</div>
	</div>
</div>
<!-- //footer-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="../temp/#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="../temp/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="../temp/js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="../temp/' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>

</body>
</html>