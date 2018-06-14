<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood Donated</title>
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>

<?php

if($_SESSION['donorstatus']=="")
{
	header("location:../login.php");
}
?>
<?php include('function.php'); ?>
 <div class="h_bg">
<div class="wrap">
<div class="header">
		<div class="logo">
			<h1><a href="index.php"><img src="Images/logo.png" alt=""></a></h1>
		</div>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
		<ul class="nav">
			<li class="active"><a href="chngpwd.php">Change Password</a></li>	
			<li><a href="updateprofile.php">Update Profile</a></li>            
			<li><a href="blooddonated.php">Blood Donated</a></li>
            <li><a href="viewdonations.php">View Donations</a></li>
            <li><a href="viewrequest.php">View Requestes</a></li>
            <li><a href="logout.php">log Out</a></li>
           
            </ul>
	</
<div style="height:400px; width:600px; margin:auto; margin-top:50px; margin-bottom:50px; border:2px solid red;">
     <form method="post" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0" width="500px" class="tableborder" style="margin:auto" >

        <tr><td colspan="2" align="center"><br/><h3 style="font-weight: bolder;">Add Blood Donated</h3></td></tr>
             <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
  
   <tr><td class="lefttd">Select camp </td><td><select name="s3" required><option value="">Select</option>
<?php
$cn=makeconnection();
$s="select * from camp";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		
			echo "<option value=$data[0]>$data[1]</option>";
		
		
		
		
	}
	mysqli_close($cn);

?>



</select>

</td></tr>

         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td class="lefttd"  style="vertical-align:middle"> Date</td><td>
        <select name="month">
<option value="1">JAN</option>
<option value="2">FEB</option>
<option value="3">MARCH</option>
<option value="4">APRIL</option>
<option value="5">MAY</option>
<option value="6">JUNE</option>
<option value="7">JULY</option>
<option value="8">AUG</option>
<option value="9">SEPT</option>
<option value="10">OCT</option>
<option value="11">NOV</option>
<option value="12">DEC</option>
</select>
<select name="day">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>

<input type="text" name="year" style=" width:50px"  /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr><td class="lefttd"  style="vertical-align:middle">No Of Units</td><td><input type="number" name="t3"  required="required" pattern="[0-9]{1,10}" title="please enter only numbers between 1 to 10 for no. of units" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr><td class="lefttd"  style="vertical-align:middle"> Other Detail</td><td><textarea name="t4"></textarea></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td><td><input type="submit" value="Save" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>	
		</table></table></td></tr>	</table></form>
	</div>
     <?php
if(isset($_POST["sbmt"])) 
{
	$d=$_POST["year"]."-".$_POST["month"]."-".$_POST["day"];
	//echo $d;
$cn=makeconnection();
			$s="insert into donation(camp_id,ddate,units,detail,email) values('" . $_POST["s3"] . "','". $d ."' ,'" . $_POST["t3"] . "','" . $_POST["t4"] . "','". $_SESSION["email"] ."')";
			
			//INSERT INTO `donation`(`donation_id`, `camp_id`, `ddate`, `units`, `detail`, `email`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}
		

	

?> 	 


     
	<div style="margin-top: 170px;">
		<hr/>
			<p align="center">© All Rights Reserved | Designed By Pharis Kahama</p>
		
	</div>	
	
</body>
</html>