<?php if(!isset($_SESSION)) {session_start();}  ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
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
	</div>
    <?php
        include('function.php');
    $cn=mysqli_connect("localhost","root","","bloodbank");
   
    $sqlt = "select * from donation";
    $qt = mysqli_query($cn, $sqlt);
    $num_rows = mysqli_num_rows($qt);
    echo "<br/><center><h2 style = 'font-weight:bolder;'>". "Total Donations" . " $num_rows\n"."</h2></center>"; 



    $sql = "select * from donation where email='" . $_SESSION["email"] . "'";
    $q = mysqli_query($cn, $sql);
    $num_rows = mysqli_num_rows($q);
    echo "<br/><center><h2 style = 'font-weight:bolder;'>". "Your Donations" . " $num_rows\n"."</h2></center>";


    


    ?>
    <br/>
    <h3 align="center" style="font-weight: bolder; color: red">Save A Life Today</h3>
<div style="height:300px; width:700px; margin:auto; margin-top:50px; margin-bottom:50px;  border:2px solid red; ">
    <img src="Images/donorpannel.png"/>
        
			
			
	</div>
	
<hr/>
      
			<p align="center">© All Rights Reserved | Design By Pharis Kahama</p>
		
</body>
</html>