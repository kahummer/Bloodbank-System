<!DOCTYPE html >
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
<div class="header">
		<div class="logo">
			<h1><a href="index.php"><img src="Images/logo.png" alt=""></a></h1>
		</div>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
		<?php require('header.php');?>
	</div>
	</div>
<div style="height:400px; width:100%; margin:auto; ">
    <!-- where the gallery box begins-->
    <div>
  <!-- wrap centers the main content div-->
<div class="wrap">
<!-- .main_conts margin-top the main content div-->
<div class="main_cont">

    
        
         
            <table cellpadding="0" cellspacing="0" width="1000px"  style="margin:auto" >
         <tr><td colspan="3">&nbsp;</td></tr>
        <tr><td colspan="3" align="center"><img src="Images/gallery.png" height="80px" /></td></tr>
         <tr><td colspan="3">&nbsp;</td></tr>  
            
        
             <?php
$cn=makeconnection();
$s="select * from gallary,camp where gallary.camp_id=camp.camp_id and gallary.camp_id='" . $_GET["cid"] ."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
    /*instantiate a var n starts at o modulus creating a tr and one td increments to one creating a td no tr then increments to two passes the second if statement condition to create td and close tr and create extra 3 tr and td with colspan 3 to space for the next set */
	$n=0;
	while($data=mysqli_fetch_array($result))
	{
		if($n%3==0)
		{
		?>
    
    
            <tr>
            <?php
			
		}?>
            
            
            <td>
          
            

 <img src="Admin/pic/<?php  echo $data[3] ?>" width="250px" height="200px" style="padding-left:40px" />
  
    </td>
        <?php
        if($n%3==2)
	 {
	 ?>
        </tr>
        <tr><td colspan="3">&nbsp;</td></tr>
         <tr><td colspan="3">&nbsp;</td></tr>
          <tr><td colspan="3">&nbsp;</td></tr>
        <?php
	}
	$n=$n+1;
		
	}?>
    </table>
        
        
	</div></div></div>
    



	
		<hr/>
			<p align="center">© All Rights Reserved </p>
	
	

</body>
</html>