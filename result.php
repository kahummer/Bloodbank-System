<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Results</title>

<link href="StyleSheet.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<?php include('Admin/function.php'); ?>

 <div class="h_bg">
<div class="wrap">
		<div class="logo">
			<h1><a href="index.php"><img src="Images/logo.png" alt=""></a></h1>
		</div>
	
</div>
</div>
<div class="nav_bg">
<div class="wrap">
		<?php require('header.php');?>
	</div>
  
   
<div style=" height:auto">

     <form method="post" enctype="multipart/form-data">
      <table cellpadding="0" cellspacing="0" width="1100px" style="margin:auto">
  <tr>            
            <td>
            
            
            
  <table cellpadding="0" cellspacing="0" width="800px" height="100px" style="margin:auto; border:0px" >
        <tr><td  align="center"><img src="Images/results.png" height="80px" style="padding-top:20px" /></td></tr>
        <tr><td >&nbsp;</td></tr> 
          
            <?php
$cn=makeconnection();
$s="select * from donarregistration,bloodgroup where donarregistration.b_id='". $_REQUEST["bg"]."' and donarregistration.b_id=bloodgroup.bg_id";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$n=0;
	while($data=mysqli_fetch_array($result))
	{
?>
  <tr><td  >

            <table cellpadding="0" cellspacing="0" width="700px" height="150px" style="margin:auto; border:none;" >


                <tr><td width="100px"  align="center" style="vertical-align:middle">

  <img src="doner_pic/<?php echo $data[8] ?>" height="100px" width="100px" style="margin-left: -30px; padding-left:70px; padding-right:50px; float:left" /></td>


                    <td width="500px" height="50px" style="vertical-align:top">
                        

                        <table cellpadding="0" width="500px" height="150px" style="border:none">
           <tr><td colspan="2">&nbsp;</td></tr>
                <tr><td><span class="title"><span style="margin-left: 100px;"> Name </span></span></td><td><span style="margin-left: 50px; margin-top: -3px; position: absolute;"><center><?php echo $data[1]; ?></center></span></td><td align="left" width="50%"></td></tr>
                 <tr><td><span class="title"><span style="margin-left: 100px;">Gender</span></td><td><span style="margin-left: 50px;"><?php echo $data[2]; ?></span></td></tr>
                  <tr><td style="width:24px"><span class="title"><span style="margin-left: 100px;">Mobile</span></td><td><span style="margin-left: 50px;"><?php echo $data[4]; ?></span></td></tr>
                  <tr><td><span class="title"><span style="margin-left: 100px;">Email</span></td><td><span style="margin-left: 50px;"><?php echo $data[6]; ?></span></td></tr>
                   <tr><td><span class="title"><span style="margin-left: 100px;">Blood.G</span></td><td><span style="margin-left: 50px;"><?php echo $data[10]; ?></span></td></tr>

                     <tr><td colspan="2">&nbsp;</td></tr>
                     
                     
                      </table>

                    </td></tr></table></td></tr>
               
   <?php }
   ?>
           </table></td></tr></table></form>


		
</form>
</div>

       
       <hr/>

			<p align="center">© All Rights Reserved | Designed By Pharis Kahama |</p>

		




</body>
</html>