<?php
include 'connection.php';
$x=$_GET['x'];
$sel_ac=mysql_query("select * from bank where acnt  like '%$x%'");
if(mysql_num_rows($sel_ac)>0)
{

?>
<table class="table table-responsive table-condensed table-bordered table-hover">
  <tr>
      <tr>
                                                    <td>#</td>
                                                    <td>Name</td>
                                                    <td>Address</td>
                                                    <td>A/C Number</td>
                                                    <td>Contact</td>
                                                    <td>View More</td>
                                                </tr>
    </tr>
<?php
$i=0;
while ($r_ac=  mysql_fetch_row($sel_ac))
{
    $i++;
    ?>

    <tr>
        <td><?php echo $i ?>
                                                    <td><?php echo $r_ac[1] ?></td>
                                                    <td><?php echo $r_ac[2] ?></td>
                                                    <td><?php echo $r_ac[6] ?></td>
                                                    <td><?php echo $r_ac[3] ?></td>
                                                     <td><a href="view.php?a=<?php echo$r_ac[6] ?>&b=<?php echo$r_ac[7] ?>">view more</a><span class="glyphicon glyphicon-search"</span></td>
                                                </tr>
    

<?php
}
?>
                                                </table>
                                                <?php
}

 else {
?>

<div  style="font-family: serif;color: #FC2B5F"><h1 align="center">SORRY NO SUCH ACCOUNT</h1></div>
<?php
}
?>
