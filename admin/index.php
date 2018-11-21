<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
   include '../connection.php';                                          
                           session_start();
if(isset($_POST['sub']))
{
$t1=$_POST['t1'];
$t2=$_POST['t2'];

$log=mysqli_query($con,"select * from user_reg where user_id='$t1' and user_pass='$t2' and user_type='admin'");
if(mysqli_num_rows($log)>0)
{
    
    $_SESSION['admin']=$t1;
    header("location:home.php");
    

}
else
{
    header("location:index.php?Fail=1");
}
    

}
                                    ?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Railway Bazaar</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Effect Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="temp/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="temp/css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="temp///fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="temp///fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<!-- bg effect -->
	<div id="bg">
		<canvas></canvas>
		<canvas></canvas>
		<canvas></canvas>
	</div>
	<!-- //bg effect -->
	<!-- title -->
	<h1>Indian Railway </h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		<form method="post">
                    
			<h2>Login Now
				<i class="fas fa-level-down-alt"></i>
			</h2>
                    
			<div class="form-style-agile">
				<label>
					<i class="fas fa-user"></i>
					Username
				</label>
				<input placeholder="Username" name="t1" type="text" required="">
			</div>
                    <?php
                                            if(isset($_GET['Fail']))
                                            {
                                            
                                            ?>
                            <center>
                                            <h4 style="color: red">Incorrect Username/Password</h4>
                            </center>
                                                <?php
                                            }
                                            ?>
			<div class="form-style-agile">
				<label>
					<i class="fas fa-unlock-alt"></i>
					Password
				</label>
				<input placeholder="Password" name="t2" type="password" required="">
			</div>
			<!-- checkbox -->
			<div class="wthree-text">
				<ul>
					<li>
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>Stay Signed In</span>
						</label>
					</li>
					<li>
						<a href="temp/#"></a>
					</li>
				</ul>
			</div>
			<!-- //checkbox -->
			<input type="submit" value="Log In"name="sub">
		</form>
	</div>
	<!-- //content -->

	<!-- copyright -->
	<div class="footer">
		<p>&copy; 2018 Effect Login Form. All rights reserved | Design by
			<a href="temp/http://w3layouts.com">W3layouts</a>
		</p>
	</div>
	<!-- //copyright -->

	<!-- Jquery -->
	<script src="temp/js/jquery-3.3.1.min.js"></script>
	<!-- //Jquery -->

	<!-- effect js -->
	<script src="temp/js/canva_moving_effect.js"></script>
	<!-- //effect js -->

</body>

</html>