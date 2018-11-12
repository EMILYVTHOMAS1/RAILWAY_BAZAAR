<?php
include("connection.php");
session_start();
$u=$_SESSION['bank'];
 if($u=$_SESSION['bank'])
 {
     
 }
 else {
header("location:index.php");     
}
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
 
    <div class="col-lg-4 col-md-4">
          <form method="post">
              <h3 style="color:  #FFFFFF"><p align="center">Deposit cash</p></h3>
                                        <table class="table table-condensed table-responsive">
                                            <tr>
                                                <td>Account number</td>
                                                <td><input type="text" name="ac" class="n form-control"  required="required" /></td>
                                            </tr>
                                             <tr>
                                                 <td>Adar Number</td>
                                                 <td><input type="text" name="ad" id="adar" maxlength="19"  required="required" class="form-control" onkeyup="checkadhar()" /></td>
                                            </tr>
                                             <tr>
                                                 <td>Deposit</td>
                                                 <td><input type="text"  name="dc" class="n form-control"  required="required" /></td>
                                            </tr>
                                             <tr>
                                                 <td colspan="2" align="center"><input type="submit" name="bank" value="Deposit" class="btn btn-default"/></td>
                                            </tr>
                                        </table>
                                        <?php
                                        
                                        if (isset($_POST['bank']))
                                        {
                                            $ac=$_POST['ac'];
                                            $ad=$_POST['ad'];
                                            $dc=$_POST['dc'];
                                            $ins2=  mysql_query("insert into cash_dep values('','$ac','$ad','$dc')");
                                            if($ins2>0)
                                            {
                                                
                                                $up=mysql_query("update bank set amount=amount+$dc where acnt='$ac' and aadar='$ad'");
                                                if($up>0)
                                                {
                                                    echo "cash Deposited";
                                                }
                                            }
                                        }
                                        ?>
                                    </form>
				
			</div>
					
		
				                                  <script>
    
     function checkadhar(){
     
     var adar=document.getElementById("adar").value;
     var len=adar.length;
     if(len==4)
     {
         document.getElementById("adar").value=adar+"-";
     }
      if(len==9)
     {
         document.getElementById("adar").value=adar+"-";
     }
      if(len==14)
     {
         document.getElementById("adar").value=adar+"-";
     }
 }
    </script>
    <div class="col-md-7 admi-main-left">
           <form>
             
               <input type="text" placeholder="Search with Account number" onkeyup="loadname(this.value)">
             <script type="text/javascript">
                               function loadname(x)
                               {
                                   var xmlhttp = new XMLHttpRequest();
                                    xmlhttp.onreadystatechange = function() {
                                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                                            document.getElementById("dis").innerHTML = xmlhttp.responseText;
                                        }
                                    };
                                    xmlhttp.open("GET", "load_acnt.php?x=" + x, true);
                                    xmlhttp.send();
                               }
                               
                            </script>
        </p>
    </form>
						<div  id="top" class="callbacks_container">
			      		<ul class="rslides" id="slider4">
                                              <h3 style="color:  #FFFFFF"><p align="center">Account Details</p></h3>
			        	<?php
                                       $sel23=  mysql_query("select * from bank");
                                       if(mysql_num_rows($sel23)>0)
                                       {
                                           ?>
                                            <table class="table table-responsive table-condensed table-bordered table-hover">
                                                <tr>
                                                    <td>#</td>
                                                    <td>Name</td>
                                                    <td>Address</td>
                                                    <td>A/C Number</td>
                                                    <td>Contact</td>
                                                    <td>View More</td>
                                                </tr>
                                            
                                            <?php
                                            $i=0;
                                           while ($r1=  mysql_fetch_row($sel23))
                                           {
                                               $i++;
                                               ?>
                                                <div id="dis"></div>
                                                <tr ></tr>
                                                <tr>
                                                    <td><?php echo $i ?></td>
                                                    <td><?php echo $r1[1] ?></td>
                                                    <td><?php echo $r1[2] ?></td>
                                                    <td><?php echo $r1[6] ?></td>
                                                    <td><?php echo $r1[3] ?></td>
                                                    <td><a href="view.php?a=<?php echo$r1[6] ?>&b=<?php echo$r1[7] ?>">view more</a><span class="glyphicon glyphicon-search"</span></td>
                                                </tr>
                                                <?php
                                           }
                                           ?>
                                            </table>
                                                <?php
                                       }
                                        ?>
						
			      </ul>
			    </div>
			    <div class="clearfix"> </div>
					</div>
    </div>
			</div>
</div>

    <div class="clear"></div>
    

</body>
</html>