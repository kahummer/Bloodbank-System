<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete Town</title>
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
<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="delete from city where city_id='"  . $_POST["s2"] ."'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record delete');</script>";
}

?>

       <form method="post">
<table border="0" align="center" width="400" height="300px" >
<tr><td colspan="2" align="center"><span style="font-weight: bolder;">Delete Town</span> </td></tr>

<tr><td class="lefttd">Select County </td><td><select name="s1" required><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from state";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		
		if(isset($_POST["show"]) && $data[0]==$_POST["s1"])
		{
			echo "<option value=$data[0] selected>$data[1]</option>";
		}
		else
		{
			echo "<option value=$data[0]>$data[1]</option>";
		}
		
		
		
	}
	mysqli_close($cn);

?>



</select>
<input type="submit" value="Show" name="show" formnovalidate="formnovalidate" />


</td></tr>
<tr><td class="lefttd">Select Town </td><td><select name="s2" required><option value="">Select</option>


<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from city where state='" . $_POST["s1"] ."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		
			echo "<option value=$data[0]>$data[1]</option>";
		
		
		
		
	}
	mysqli_close($cn);
}
?>



</select>


<tr><td>&nbsp;</td><td><input type="submit" value="DELETE" name="sbmt"></td></tr>
</table>
</form>
       </div>

   </div>
    </center>
<?php include('bottom.php'); ?>
   
</body>
</html>