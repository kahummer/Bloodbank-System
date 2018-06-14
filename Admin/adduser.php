<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add User</title>
<link href="StyleSheet.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>

<?php
if($_SESSION["loginstatus"]=="")
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
	$s="insert into users values('" . $_POST["t1"] . "','" .$_POST["t2"] . "','". $_POST["s1"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}

?>

       <form method="post">
<table  align="center" width="400" height="300px" >
<tr><td colspan="2" align="center"><span style="font-weight: bolder;"> Add User </span></td></tr>

<tr><td class="lefttd">User Name</td><td><input type="text" name="t1" required="required" pattern="[a-zA-Z _]{3,15}" title="please enter only character between 3 to 15 for user name"/></td></tr>
<tr><td class="lefttd">Password</td><td><input type="password" name="t2"  required="required" pattern="[a-zA-Z0-9]{3,10}" title="please enter only character and numbers between 3 to 10 for password" /></td></tr>
<tr><td class="lefttd">Confirm Password</td><td><input type="password" name="t3" required="required" pattern="[a-zA-Z0-9]{3,10}" title="please enter only character and numbers between 3 to 10 for password" /></td></tr>
<tr><td class="lefttd">Type Of User</td><td><select name="s1" required><option value="">Select</option>
<option value="Admin">Admin</option>
<option value="General">General</option>
</select></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="SAVE" name="sbmt"></td></tr>
</table>
</form>
       </div>

   </div>
    </center>
<?php include('bottom.php'); ?>
   
</body>
</html>