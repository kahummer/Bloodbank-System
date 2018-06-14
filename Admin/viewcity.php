<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View City</title>
<link href="StyleSheet.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<?php
if($_SESSION['loginstatus']=="")
{
	header("location:adminlogin.php");
}
?>
<?php include('topbar.php'); ?>
    <center>
   <div style="width:1000px; height:700px;">
       <div style="width:200px; float:left;">
       <?php include('left.php'); ?>
       </div>
       <div style="width:800px;float:left">
<br /><br />

<?php include('function.php'); ?>


       <form method="post">
<table border="0" align="center" width="400px" height="30px">
<tr><td colspan="2" align="center"><span style="font-weight: bolder; margin-left: -50px;"> View cities</span> </td></tr>
<tr><td align="center" style="padding-top:5px;">
<table border="1" align="center" width="60%" height="200px" >
<tr><td style=" padding-left:10px">City Id </td><td style=" padding-left:10px">City Name</td></tr>
<tr><td>
<?php
$cn=mysqli_connect("localhost","root","","bloodbank");
$s="select * from city";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		
			echo "<tr><td style=' padding-left:10px'>$data[0]</td><td style='padding-left:10px'>$data[1]</td></tr>";
		}
		
		
		
	
	mysqli_close($cn);

?>
</td></tr>
</table>
</table>


</form>
       </div>

   </div>
    </center>
<?php include('bottom.php'); ?>
   
</body>
</html>