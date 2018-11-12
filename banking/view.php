<?php
include("connection.php");
 session_start();
$u=$_SESSION['bank'];
?>
<html>
<head>
<title>bank</title>

                             
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />


<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/font-awesome.css" rel="stylesheet"> 

<script src="js/jquery-1.11.1.min.js"></script>
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
    <style>
        body{
            background: url("jpeg.jpg");
            background-size: cover;
        }
    </style>
    <style>
          


.wrap {
  width: 100%;
  height: 100%;
  min-height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 99;
}

p.form-title {
  font-family: 'Open Sans' , sans-serif;
  font-size: 30px;
  font-weight: 600;
  text-align: center;
  color: #FFFFFF;
  margin-top: 5%;
  text-transform: uppercase;
  letter-spacing: 4px;
}

form {
  width: 250px;
  margin: 0 auto;
}

form input[type="text"], form input[type="password"] {
  width: 100%;
  margin: 0;
  padding: 5px 10px;
  background: 0;
  border: 0;
  border-bottom: 1px solid #FFFFFF;
  outline: 0;
  font-style: italic;
  font-size: 12px;
  font-weight: 400;
  letter-spacing: 1px;
  margin-bottom: 5px;
  color: #FFFFFF;
  outline: 0;
}

form input[type="submit"] {
  width: 100%;
  font-size: 16px;
  text-transform: uppercase;
  font-weight: 500;
  margin-top: 16px;
  
  outline: 0;
  cursor: pointer;
  letter-spacing: 1px;
}
.textarea {
   width: 100%;
  margin: 0;
  padding: 5px 10px;
  background: 0;
  border: 0;
  border-bottom: 1px solid #FFFFFF;
  outline: 0;
  font-style: italic;
  font-size: 12px;
  font-weight: 400;
  letter-spacing: 1px;
  margin-bottom: 5px;
  color: #FFFFFF;
  outline: 0;
}
form  input[type="submit"]:hover {
  transition: background-color 0.5s ease;
}

form .remember-forgot {
  float: left;
  width: 100%;
  margin: 10px 0 0 0;
}

form .forgot-pass-content {
  min-height: 20px;
  margin-top: 10px;
  margin-bottom: 10px;
}

form label, form.login a {
  font-size: 12px;
  font-weight: 400;
  color: #FFFFFF;
}

form a {
  transition: color 0.5s ease;
}

form a:hover {
  color: #2ecc71;
}

.pr-wrap {
  width: 100%;
  height: 100%;
  min-height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 999;
  display: none;
}

.show-pass-reset {
  display: block !important;
}

.pass-reset {
  margin: 0 auto;
  width: 250px;
  position: relative;
  margin-top: 22%;
  z-index: 999;
  background: #FFFFFF;
  padding: 20px 15px;
}

.pass-reset label {
  font-size: 12px;
  font-weight: 400;
  margin-bottom: 15px;
}

.pass-reset input[type="email"] {
  width: 100%;
  margin: 5px 0 0 0;
  padding: 5px 10px;
  background: 0;
  border: 0;
  border-bottom: 1px solid #000000;
  outline: 0;
  font-style: italic;
  font-size: 12px;
  font-weight: 400;
  letter-spacing: 1px;
  margin-bottom: 5px;
  color: #000000;
  outline: 0;
}

.pass-reset input[type="submit"] {
  width: 100%;
  border: 0;
  font-size: 14px;
  text-transform: uppercase;
  font-weight: 500;
  margin-top: 10px;
  outline: 0;
  cursor: pointer;
  letter-spacing: 1px;
}

.pass-reset input[type="submit"]:hover {
  transition: background-color 0.5s ease;
}

.posted-by {
  position: absolute;
  bottom: 26px;
  margin: 0 auto;
  color: #FFF;
  background-color: rgba(0, 0, 0, 0.66);
  padding: 10px;
  left: 45%;
}
.n{
     width: 100%;
  margin: 0;
  padding: 5px 10px;
  background: 0;
  border: 0;
  border-bottom: 1px solid #FFFFFF;
  outline: 0;
  font-style: italic;
  font-size: 12px;
  font-weight: 400;
  letter-spacing: 1px;
  margin-bottom: 5px;
  color: #FFFFFF;
  outline: 0;
}
        </style>
        <link href="css/font-awesome.css" rel="stylesheet"> 
</head>
<body>
<div class="btm_border">

<div class="wrap">
	<div class="header">
		<div class="logo">
		
		</div>
		<div class="social-icons">
			<ul>
			     <li><a class="facebook" href="#" target="_blank"> </a></li>
			     <li><a class="twitter" href="#" target="_blank"></a></li>
			     <li><a class="googleplus" href="#" target="_blank"></a></li>
			     <li><a class="pinterest" href="#" target="_blank"></a></li>
			     <li><a class="dribbble" href="#" target="_blank"></a></li>
			     <li><a class="vimeo" href="#" target="_blank"></a></li>
		   </ul>
		</div>	
		<div class="clear"></div>
        </div>
	<div class='h_btm'>
		<div class='cssmenu'>
			<ul>
                           <li><a href="new_bank.php">Home</a></li>
					<li><a href="new_bank.php">New Account</a></li>
					<li><a href="dep_bank.php">Deposite</a></li>
                                        <li><a href="logout.php">Logout</a></li>
			 </ul>
	</div>

            
	<div class="clear"></div>
</div>
<div class="col-lg-12 admin-bottom-left">
    <div class="col-md-3 admi-main-left"></div>
    <div class="col-md-5 admi-main-left">
        <p align="center">
            <?php
                                        $a=$_GET['a'];
                                        $b=$_GET['b'];
                                       $sel23=  mysql_query("select * from bank where acnt='$a' and aadar='$b'");
                                       if(mysql_num_rows($sel23)>0)
                                       {
                                         $r1=mysql_fetch_row($sel23);
                                         ?>
                                           
                                            <table class="table table-responsive table-condensed table-bordered table-hover">
                                                <tr>
                                                    <td colspan="2"><p align="center"><img src="user/<?php echo $r1[4] ?>" class="img img-responsive"/></p></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Name</td>
                                                    <td><?php echo $r1[1] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    <td><?php echo $r1[2] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Contact</td>
                                                    <td><?php echo $r1[3] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Ac number</td>
                                                    <td><?php echo $r1[6] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Aadar number</td>
                                                    <td><?php echo $r1[7] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Ammount</td>
                                                    <td><?php echo $r1[8] ?><span class="fa  fa-inr"></span></td>
                                                </tr>
                                            </table>
                                            
                                            <?php
                                       }
                                      
                                        ?>
        </p>
			    </div>
			    <div class="clearfix"> </div>
					</div>
    </div>
			</div>
</div>

    <div class="clear"></div>
    

</body>
</html>