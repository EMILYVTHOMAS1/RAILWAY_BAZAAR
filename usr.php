<?php
if(isset($_GET['del']))
{
        $item="9037542464";
            $t="Your Resume has been accepted,We will contact you Shortly";
            echo "<script language='javascript'> var win = window.open('http://msgbox.in/httpapi/smsapi?uname=Trinity&password=trinity&sender=TRNITY&receiver=$item&route=TA&msgtype=1&sms=$t', '1366002941508',  'width=100,height=100,left=375,top=330','_blank');
           setTimeout(function(){
                win.close()
            }, 6000);</script>";
            
        
       //header("location:enq_job

}
?>
<?php
include("connection.php");
if(isset($_POST['reg']))
{
 $nme=$_POST['nme'];
$addr=$_POST['addr'];
$mobno=$_POST['mobno'];
$adhr_no=$_POST['adr_no'];
$ac_no=$_POST['ac_no'];
$gender=$_POST['gender'];
$em=$_POST['em'];
$dob=$_POST['dob'];
$selloc=$_POST['stat'];
$dist=$_POST['dist'];
$updp=$_FILES['updp']['name'];
$unme=$_POST['unme'];
$p=$_POST['p'];
$nupdp=$unme."".substr($updp,strrpos($updp,"."));
move_uploaded_file($_FILES['updp']['tmp_name'],getcwd()."\\user_dp\\$nupdp");
$sel24=  mysqli_query($con,"select * from bank where acnt='$ac_no'");
if(mysqli_num_rows($sel24)>0)
{
    $r=mysqli_fetch_row($sel24);
    $mobno=$_POST['mobno'];
     $item="$mobno";
            
  
    $ins=mysqli_query($con,"insert into user_reg values('','$nme','$addr','$mobno','$adhr_no','$ac_no','$em','$gender','$dob','$selloc','$nupdp','$unme','$p','user','0','$dist')");
echo mysqli_error();
    if ($ins>0)
    {
    
    header("location:usr.php?suss=1");
    }
    
}

}
 else {
    echo mysqli_error($con); 
}



?>
 
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Railway Bazaar</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Freight Shipping Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<link href="lo_temp/css/font-awesome.css" rel="stylesheet">
<link href="lo_temp/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="lo_temp/js/jquery-2.2.3.min.js"></script> 
<!-- //js -->
<!-- web-fonts -->

<!-- //web-fonts --> 
<script type="text/javascript">
    
    
    function chkc(b2)
{
var k5=b2.length;
var ch2=/([0-9])$/;
if(ch2.test(b2)==false)
{
document.getElementById("o3").innerHTML="<font color='red'>*Only Numbers*</font>";
$("#btn").hide();
return false;
}
else if(k5!=10)
{
document.getElementById("o3").innerHTML="<font color='red'>*Please Check Your Mobile Number*</font>";
$("#btn").hide();
return false;
}
else
{
  document.getElementById("o3").innerHTML="";  
  $("#btn").show();
}
}
  
 function chkp(c)
{
var s=document.getElementById("p10").value;

if(s==c)
{
document.getElementById("p").innerHTML="<font color='Green'>*Password is Correct*</font>";
$("#btn").show();
return false;
}
else
{
document.getElementById("p").innerHTML="<font color='red'>*Verfy Password*</font>";
$("#btn").hide();
}
}





function validateemail(a)  
     {  
          //var a = document.myform.email.value;  
          var atposition = a.indexOf("@");  
          var dotposition = a.lastIndexOf(".");  
          if (atposition<1 || dotposition<atposition+2 || dotposition+2>=a.length) 
          {  
               document.getElementById("em").innerHTML="<font color='red'>*Please Check Your Email Address*</font>";
                $("#btn").hide();  
          }  
          else
{
                document.getElementById("em").innerHTML="";  
  $("#btn").show();
}
     }  
    </script>
</head>
<body>
	<!-- banner --> 
	<div class="video" data-vide-bg="video/ship"> 
	<div class="center-container">
	    <div class="w3ls-agileinfo">
		
          <h1> RAILWAY BAZAAR </h1>	
		  </div>
		 <div class="bg-agile">
		 <div class="top-icons-agileits-w3layouts">
                     <a href="index.php"><p><i class="fa fa-home" aria-hidden="true"></i></p></a>
			<span></span>
                        <a href="usr.php"><p class="mid-w3ls"><i class="fa fa-user" aria-hidden="true"></i></p></a>
			<span></span>
                        <a href="org.php"><p><i class="fa fa-shopping-cart" aria-hidden="true"></i></p></a>
			
			 <ul class="icons-text">
				<li>Home</li>
				<li>User</li>
				<li>Shop</li>
			 </ul>
		 </div>
                     <br>
			<h3>User Registration</h3>
			<div class="login-form">			
							<form method="post" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()">
                                                            <input type="text" name="nme"placeholder="Full Name" id="name1" class="form-control"onblur="chka(this.value)" /><span id="n3" />
                                                            <textarea placeholder="Address" name="addr" id="addr" class="form-control"></textarea>
                                                            <input type="number"placeholder="Contact" name="mobno" class="form-control"onblur="chkc(this.value)" /><span id="o3"></span>
                                                           
                                                            <input placeholder="Email" type="email" name="em" id="em" class="form-control"/>
                                                            <input type="radio" name="gender" id="gender" value="female"><span style="color: white">Female</span> <input type="radio" name="gender"  id="gender" value="male"><span style="color: white">Male</span> 
								<input type="date" name="dob" id="dob" class="form-control"/>
                                                            <select name="stat" id="stat" class="form-control"  onchange="loaddistrict(this.value);loadst_hos(this.value)">
                                        <option value="">Choose State</option>
                                        <?php
                                        $sel_state=mysqli_query($con,"select * from state");
                                        while($r_state=mysqli_fetch_row($sel_state))
                                        {
                                            ?>
                                        <option value="<?php echo $r_state[0] ?>"><?php echo $r_state[1] ?></option>
                                       <?php
                                        }
                                        ?>
                                    </select>
                                                                <script type="text/javascript">
                               function loaddistrict(x)
                               {
                                   var xmlhttp = new XMLHttpRequest();
                                    xmlhttp.onreadystatechange = function() {
                                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                                            document.getElementById("dis").innerHTML = xmlhttp.responseText;
                                        }
                                    };
                                    xmlhttp.open("GET", "load_districtindex.php?x=" + x, true);
                                    xmlhttp.send();
                               }
                               
                            </script><span id="dis">
                                        <select name="dist" class="form-control" required="required">
                                        <option value="">Choose District</option>
                                        </select>
                                    </span>
                            <input type="file" name="updp" id="updp" class="form-control"/>
                                                            <h3>Account Details</h3> 
								<div class="left-w3-agile">
                                                                    <input type="text"placeholder="Aadhar Number" name="adr_no" id="adar" maxlength="19" onkeyup="return checkadhar()" class="form-control"/>
                                                                    <input type="text"placeholder="Username" name="unme" id="unme" class="form-control"/>
                                                                </div>
								<div class="right-agileits">
								
								<input type="number"placeholder="Account Number" name="ac_no" id="bank" maxlength="15" class="form-control"/>
                                                                <input type="password" name="p" id="p"placeholder="password" class="form-control"/>
                                                                </div>
								<textarea name="message" value="Address" placeholder="Street address" ></textarea>
								<input name="reg" type="submit" value="Submit">
							</form>	
						</div>	
		</div>
	
	<!-- //banner --> 
	 <!--copyright-->
		
	<!--//copyright-->
	</div>	
	</div>	
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
</body>
</html>