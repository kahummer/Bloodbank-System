<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin_login</title>

    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

   
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>


<?php include('function.php'); ?>

 <div class="h_bg">
<div class="wrap">
<div class="header">
		<div class="logo">
			<h1><a href="Home.php"><img src="Images/logo.png" alt=""></a></h1>
		</div>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
		<ul class="nav">
			<li class="active"><a href="../index.php" target="_blank">Preview Website</a></li>	
			
            </ul>
	</div>
  
   
<div style="height:500px;">
     <form method="post" enctype="multipart/form-data">

   <table  width="600px" height="300px" style="margin-top:10px; margin-left: 390px;	 " >
    
    <tr><td colspan="2" align="center"><img src="images/adminlog.jpg"  width="380px" height="90px"></td></tr>
    
     <tr><td colspan="2">&nbsp;</td></tr>  <tr><td colspan="2">&nbsp;</td></tr> 
                <tr><td align="right"><img src="Images/login1.png" width="200px" height="150px" /></td>
                    <td style="vertical-align:top"><table height="200px">             


<tr><td >User Name &nbsp;</td><td><input type="text" name="t1" /></td></tr>
<tr><td >Password</td><td><input type="password" name="t2" /></td></tr>


<tr><td>&nbsp;</td><td><input type="submit" value="Log In" name="sbmt" style="border:0px; background-color: red; width:100px; height:30px;   color:white; font-weight:bold; font-size:14px; "></td></tr>

                       
              
</table>
</td></tr></table>


		
</form>
</div>

       



	
		<hr/>
			<p align="center">© All Rights Reserved | Design by Pharis Kahama |</p>
	
	<div class="clear"></div>


		
	
</div>


<?php
$_SESSION['loginstatus']="";
if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			

			$s="select *from users where username='" . $_POST["t1"] . "' and pwd='" .$_POST["t2"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	$data=mysqli_fetch_array($q);
	
	
	mysqli_close($cn);
	if($r>0)
	{
		$_SESSION["username"]=$_POST["t1"];
		$_SESSION["usertype"]=$data[2];
		$_SESSION['loginstatus']="yes";

header("location:index.php");
	}
	else
	{
		echo "<script>alert('Invalid User Name Or Password');</script>";
	}
		
		}	
	

?> 
</body>
</html>