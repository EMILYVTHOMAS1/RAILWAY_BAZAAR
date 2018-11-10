<?php
include '../connection.php';
$x=$_GET['x'];
$sel_district=mysqli_query($con,"select * from stp where nme='$x'");
if(mysqli_num_rows($sel_district)>0)
{
    ?>
<select name="station" class="form-control" required="required" onchange="loadstation(this.value);">
<option value="">Choose One</option>
<?php
while($r_district=mysqli_fetch_row($sel_district))
{
    ?>
<option value="<?php echo $r_district[3] ?>"><?php

$sta=$r_district[3];
$sto=  mysqli_query($con,"select * from train_mangmt where id='$sta'");
$sto1=  mysqli_fetch_row($sto);
echo "$sto1[4]";
?>
</option>
<?php
}
?>
</select>
<?php
}
else{
    ?>
<select name="dist" class="form-control" required="required">
<option value="">Choose One</option>
  </select>
<?php
}
?>