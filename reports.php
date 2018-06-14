<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood bank Management System</title>
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<?php include('admin/function.php'); ?>

 <div class="h_bg">
<div class="wrap">

		<div class="logo">
			<h1><a href="index.php"><img src="Images/logo.png" alt=""></a></h1>
		</div>

</div>
</div>
<div class="nav_bg" style="margin-top: -10px;">
<div class="wrap">
		<?php require('header.php');?>
	</div>

    <style type="text/css">
    	table, th, td {
    border: 3px solid black;
}

th, td {
    padding: 15px;
}
th {
	background-color: pink;
	font-weight: bolder;
}

#gender {
    margin-left: 30px;
} 
#b_id {
     margin-left: 300px;
     margin-top: -157px;
}
    </style>

                   

<br/><hr/>

<br/>
<?php

	
$cn=mysqli_connect("localhost","root","","bloodbank");
$s= "SELECT * FROM `donarregistration` WHERE gender = 'male'";
$f= "SELECT * FROM `donarregistration` WHERE gender = 'female'";
      //male
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
      //female
	$resultf=mysqli_query($cn,$f);
	$fe=mysqli_num_rows($resultf);
   
   echo "<span style=\"font-weight: bolder; margin-left: 50px;\">Reports</span> by gender";
   echo "<span style=\"font-weight: bolder; margin-left: 180px;\">Reports</span> by blood_group";
	echo "<hr/>". "<table id = gender><tr><th>Sex/Gender</th> <th>Total Number</th><tr><td>Male</td><td>". $r. "</td><tr><td>female</td><td>"  .$fe. "</td></tr></table>";




$oplus = "SELECT * FROM `donarregistration` WHERE b_id = 13";
$ominus = "SELECT * FROM `donarregistration` WHERE b_id = 14";
$abplus = "SELECT * FROM `donarregistration` WHERE b_id = 15";
$abminus = "SELECT * FROM `donarregistration` WHERE b_id = 16";
$aplus = "SELECT * FROM `donarregistration` WHERE b_id = 17";
$aminus = "SELECT * FROM `donarregistration` WHERE b_id = 18";
$bplus = "SELECT * FROM `donarregistration` WHERE b_id = 19";
$bminus = "SELECT * FROM `donarregistration` WHERE b_id = 21";
      //oplus
	$resultoplus=mysqli_query($cn,$oplus);
	$roplus=mysqli_num_rows($resultoplus);
      //ominus
	$resultominus=mysqli_query($cn,$ominus);
	$rominus=mysqli_num_rows($resultominus);

	 //abplus
	$resultabplus=mysqli_query($cn,$abplus);
	$rabplus=mysqli_num_rows($resultabplus);
      //abminus
	$resultabminus=mysqli_query($cn,$abminus);
	$rabminus=mysqli_num_rows($resultabminus);

	 //aplus
	$resultaplus=mysqli_query($cn,$aplus);
	$raplus=mysqli_num_rows($resultaplus);
      //ominus
	$resultaminus=mysqli_query($cn,$aminus);
	$raminus=mysqli_num_rows($resultaminus);

	 //bplus
	$resultbplus=mysqli_query($cn,$bplus);
	$rbplus=mysqli_num_rows($resultbplus);
      //ominus
	$resultbminus=mysqli_query($cn,$bminus);
	$rbminus=mysqli_num_rows($resultbminus);

	echo "<br/>";
   
	echo "<table id = b_id><tr><th>Blood Group</th> <th>Total number</th><tr><td>O+</td><td>". $roplus. "</td><tr><td>O-</td><td>"  .$rominus. "</td></tr><tr><td>AB+</td><td>"  .$rabplus. "</td></tr></tr><tr><td>AB-</td><td>"  .$rabminus. "</td></tr></tr></tr><tr><td>A+</td><td>"  .$raplus. "</td></tr></tr></tr><tr><td>A-</td><td>"  .$raminus. "</td></tr></tr></tr><tr><td>B+</td><td>"  .$rbplus. "</td></tr></tr></tr><tr><td>B-</td><td>"  .$rbminus. "</td></tr></table>";





$totaldonarstring = 'select * from donarregistration';
$totaldonarsquery = mysqli_query($cn, $totaldonarstring);
$totaldonars = mysqli_num_rows($totaldonarsquery);

$totalcampsstring = 'select * from camp';
$totalcampsquery = mysqli_query($cn, $totalcampsstring);
$totalcamps = mysqli_num_rows($totalcampsquery);

$totalrequeststring = 'select * from requestes';
$totalrequestquery = mysqli_query($cn, $totalrequeststring);
$totalrequest = mysqli_num_rows($totalrequestquery);

$totaldonationsstring = 'select * from donation';
$totaldonationsquery = mysqli_query($cn, $totaldonationsstring);
$totaldonations = mysqli_num_rows($totaldonationsquery);


echo "<h2 style=\"margin-left: 700px; margin-top: -430px; color:#E33E4F; position:absolute; font-weight: bolder; \">General Totals Reports<h2>"."<h3 style=\"margin-left: 700px; margin-top: -400px; font-weight: bolder; \">"."Total Donors"." ".$totaldonars."<br/><br/>"."Total Camps"." ". $totalcamps."<br/><br/>". "Total Requests". " ". $totalrequest. "<br/><br/>". "Total Donations". " ". $totaldonations. "</h3>";
	
			
			?>



<div>
	<img src="img/reports.jpg" width="650" style="margin-left: 840px; margin-top: -160px">
</div>
        
          <div style="margin-top: 500px;">
         <hr/>
			<p  align="center">© All Rights Reserved | Designed By Pharis Kahama </p>


            </div>

			
			
	
</body>
</html>