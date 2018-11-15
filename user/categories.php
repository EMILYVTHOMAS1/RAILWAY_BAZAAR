<?php
ob_start();
include("../connection.php");
session_start();
$user_name=$_SESSION['user'];
 if($user_name=$_SESSION['user'])
 {
     
 }
 else {
header("location:index.php");     
}
$trt=$_SESSION['train'];

$station=$_SESSION['station'];
  if (isset($_GET['b']))
    {
        $b=$_GET['b'];
    }
        
      if (isset($_GET['c']))
    {
        $c=$_GET['c'];
    }
        
      if (isset($_GET['d']))
    {
        $d=$_GET['d'];
    }
        
    if (isset($_GET['star']))
    {
        $star=$_GET['star'];
            if (isset($_GET['shop']))
    {
        $shop=$_GET['shop'];
            if (isset($_GET['name']))
    {
        $name=$_GET['name'];
        $ins9=  mysqli_query($con,"insert into rate values('','$star','$shop','$name','0')");
        if($ins9>0)
        {
            $up=  mysqli_query($con,"update shop_reg set rat=rat+$star where shop_num='$shop'");
         
        }
            }
    }
    }
?>

<?php
    $sel12=mysqli_query($con,"select * from user_reg where user_id='$user_name'");
    
       $r7=  mysqli_fetch_row($sel12);
       ?>

<?php
if (isset($_GET['a1']))
{
    $a1=$_GET['a1'];
$a=$_GET['a'];

    $b1=$_GET['b1'];
$b=$_GET['b'];

    $c1=$_GET['c1'];

$c=$_GET['c'];
    $d1=$_GET['d1'];
$d=$_GET['d'];
    $e1=$_GET['e1'];

    $f1=$_GET['f1'];

    $g1=$_GET['g1'];
$r=$_GET['r'];
$ins6=mysqli_query($con,"insert into cart1 values('','$a1','$b1','$c1','$d1','$e1','0','0','1','0','5','$f1','$g1')");  
          if($ins6>0)
          {
              
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
<title>Big store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Personal Care :: w3layouts</title>
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
  <!---->

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <a href="#"><img class="first-slide" src="../temp/images/ba1.jpg" alt="First slide"></a>
       
        </div>
        <div class="item">
          <a href="#"><img class="second-slide " src="../temp/images/ba.jpg" alt="Second slide"></a>
         
        </div>
        <div class="item">
          <a href="#"><img class="third-slide " src="../temp/images/ba2.jpg" alt="Third slide"></a>
          
        </div>
      </div>
    
    </div><!-- /.carousel -->

<!--content-->
<div class="kic-top "id="asd">
	<div class="container ">
	<div class="kic ">
			<h3>Popular Categories</h3>
			
		</div>
            
            
            <?php
   $sel31=mysqli_query($con,"select * from add_cat");
   if(mysqli_num_rows($sel31)>0)
   {
       ?>
            <?php
       while ($r22=  mysqli_fetch_row($sel31))
       {
           
         ?>
            
		<div class="col-md-4 kic-top1">
                    <a href="categories.php?a=<?php  echo $r22[2]; ?>&e=<?php echo $station ?>">
                        <img  style="width: 100%;height: 220px" src="../admin/shop_logo/<?php echo $r22[3]?>" class="img-responsive" alt="">
			</a>
			<h6><?php  echo $r22[2]; ?></h6>
			<p></p>
		</div>
            
		<?php
       }
   }
       ?>
            <br/>
         <br/> 
         <br/><br/>
        </div>
         <div class="kic ">
			<h3>Popular Categories</h3>
			
		</div>
         <br/>
	<?php 
   if(isset($_GET['a']))
   {
        if(isset($_GET['e']))
   {
       $e=$_GET['e'];
       $a=$_GET['a'];
       
       $sel32=  mysqli_query($con,"select * from shop_reg where shop_typ='$a' and shop_loc='$e' and status='1' order by rat DESC");
       if(mysqli_num_rows($sel32)>0)
       {
           while ($r23=  mysqli_fetch_row($sel32))
           {
              
               ?>
    
        <?php
      $r=rand('1000000','99999');
        ?>
        
        <div class="col-md-4 kic-top1">
			<a href="categories.php?a=<?php echo $a ?>&e=<?php echo $e ?>&b=<?php  echo $r23[2]; ?>&c=<?php  echo $r23[5]; ?>&d=<?php  echo $r23[1]; ?>&r=<?php echo $r ?>">
                            <img  class="img img-responsive img-rounded img-thumbnail" style="width: 100%;height: 170px;border-color: yellow" src="../shop/<?php  echo $r23[6]; ?>" class="img-responsive" alt="">
			</a>
			<h6><?php echo $r23[2] ?></h6>
			<p></p>
		</div>
        
      
<?php
   
           }     }
       }
   }
    ?>	
	</div>
</div>

<!--content-->
<?php
                if(isset($_GET['d']))
                {
                    $d=$_GET['d'];
            $sel8=  mysqli_query($con,"select * from add_product where shop_num='$d' and st='0'");
                if(mysqli_num_rows($sel8)>0)
                {
                    $sel35=  mysqli_query($con,"select * from shop_reg where shop_num='$d'");
if (mysqli_num_rows($sel35)>0)
{

    $r26=  mysqli_fetch_row($sel35);
                    ?>
                <br/>
		<div class="product">
		<div class="container">
			<div class="spec ">
                            <br/>
				
				
			</div>
				<div class=" con-w3l agileinf">
                                    <br/>
                                    <?php
                    while ($r3=  mysqli_fetch_row($sel8))
                    {
                       ?>
                                    
							<div class="col-md-3 pro-1">
								<div class="col-m">
								<a href="#">
                                                                    <img style="width: 100%;height: 250px" src="../product/<?php echo $r3[2] ?>" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="../temp/single.html"><?php echo $r3[1];?></a></h6>							
										</div>
										<div class="mid-2">
											<p ><label>Rs/-<?php echo $r3[4];?></label><em class="item_price">Rs/-<?php echo $r3[3];?></em></p>
											  
											<div class="clearfix"></div>
										</div>
											<div class="add">
                                                                                            <a href="categories.php?a=<?php echo $a ?>&e=<?php echo $e ?>&b=<?php  echo $r23[2]; ?>&c=<?php  echo $r23[5]; ?>&d=<?php  echo $_GET['d']; ?>&r=<?php echo $r ?>&a1=<?php echo $user_name ?>&b1=<?php echo$r3[1] ?>&c1=<?php echo$r3[3] ?>&d1=<?php echo$r3[8] ?>&e1=<?php echo$r3[9] ?>&f1=<?php echo$r7[5] ?>&g1=<?php echo$r3[10] ?>">  <button class="btn btn-danger my-cart-btn my-cart-b" data-image="images/of36.png">Add to Cart</button></a>
										</div>
									</div>
								</div>
							</div>
							<?php
                    }
                    ?>
							
							
							
							<div class="clearfix"></div>
						 </div>
		</div>
	</div>

<?php
                
}
                    }
                }
                ?>
<!--footer-->
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

  
  
  
  <!-- product -->
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="../temp/images/of36.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Baby Oil(250 g)</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>$2.00</del>$1.50</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="36" data-name="Baby Oil" data-summary="summary 36" data-price="1.50" data-quantity="1" data-image="images/of36.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
<!-- product -->
			<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="../temp/images/of37.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Soap(250 g)</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>$10.00</del>$9.00</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="37" data-name="Soap" data-summary="summary 37" data-price="9.00" data-quantity="1" data-image="images/of37.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="../temp/images/of38.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Hair Gel(100 g)</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>$3.00</del>$2.00</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="38" data-name="Hair Gel" data-summary="summary 38" data-price="2.00" data-quantity="1" data-image="images/of38.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="../temp/images/of39.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Lotion (100 g)</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>$4.00</del>$3.50</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="39" data-name="Lotion " data-summary="summary 39" data-price="3.50" data-quantity="1" data-image="images/of39.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="../temp/images/of40.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Shower Gel(250 g)</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>$1.00</del>$0.70</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="40" data-name="Shower Gel" data-summary="summary 40" data-price="0.70" data-quantity="1" data-image="images/of40.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="../temp/images/of41.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Hair Color(250 g)</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>$1.00</del>$0.70</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="41" data-name="Hair Color" data-summary="summary 41" data-price="0.70" data-quantity="1" data-image="images/of41.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="../temp/images/of42.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Wipes(300 kg)</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>$2.00</del>$1.00</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="42" data-name="Wipes" data-summary="summary 42" data-price="1.00" data-quantity="1" data-image="images/of42.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="../temp/images/of43.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Essential Oils(200 g)</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>$4.00</del>$3.50</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="43" data-name="Essential Oils" data-summary="summary 43" data-price="3.50" data-quantity="1" data-image="images/of43.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="../temp/images/of44.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Cream(150 g)</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>$2.00</del>$1.50</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="44" data-name="Cream" data-summary="summary 44" data-price="1.50" data-quantity="1" data-image="images/of44.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="../temp/images/of45.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Hair Color(250 g)</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>$1.00</del>$0.70</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="45" data-name="Hair Color" data-summary="summary 45" data-price="0.70" data-quantity="1" data-image="images/of45.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="../temp/images/of46.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Baby Care(1 kg)</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>$2.00</del>$1.00</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="46" data-name="Baby Care" data-summary="summary 46" data-price="1.00" data-quantity="1" data-image="images/of46.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="../temp/images/of47.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Lotion(100 g)</h3>
									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>$4.00</del>$3.50</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="47" data-name="Lotion" data-summary="summary 47" data-price="3.50" data-quantity="1" data-image="images/of47.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				
</body>
</html>