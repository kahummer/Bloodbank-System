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
<div class="nav_bg">
<div class="wrap">
		<?php require('header.php');?>
	</div>
	</div>

<div class="wrap">
<div class="main_cont">
        
          <img src="Images/camps.png" height="80px" style="margin:auto" />
            <br /><br />
            
            
            
            <table cellpadding="0" cellspacing="0" width="1100px">
            
            <?php
$cn=makeconnection();
$s="select * from camp,state,city where camp.state=state.state_id and camp.city=city.city_id";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$n=0;
	while($data=mysqli_fetch_array($result))
	{
		if($n%2==0)
		{
		?>
    
    
            <tr>
            <?php
			
		}?>
            
            <td>
            
            
            
            
    <table cellpadding="0" cellspacing="0" class="tableborder" width="500" style="border:none">
    <tr><td style="font-size:24px; font-weight:bold; padding-left:30px; padding-top:10px; padding-bottom:10px; color:#925959"><?php echo $data[1]; ?></td></tr>
 <tr>
    <td align="center"> 
    <img src="Admin/pic/<?php echo $data[5] ?>" height="250px" width="460px" style="margin:auto; padding-left:20px" />

    </td>
</tr>
   
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    
<tr>
    <td class="title"><a href="campgallary.php?cid=<?php echo $data[0];  ?>">View Camp Gallary</td>

</tr>
  



        
<tr>
<td class="title"  style="vertical-align:middle">Organised By:<?php echo $data[2]; ?></td>
<td align="left" width="50%"></td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
</tr>
        <tr>
            <td class="title" style="vertical-align:middle">State:<?php echo $data[8]; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td><td>&nbsp;</td>
        </tr>
        <tr>
            <td class="title" style="vertical-align:middle">City:<?php echo $data[10]; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td><td>&nbsp;</td>
        </tr>
		<tr>
            <td colspan="2"><p style="padding-left:30px; font-size:16px; font-weight:bold"><?php echo $data[2]; ?></p></td>
        </tr>
		</table>
        
        
        </td>
        <?php
        if($n%2==1)
	 {
	 ?>
        </tr>
        <tr><td colspan="2">&nbsp;</td></tr>
         <tr><td colspan="2">&nbsp;</td></tr>
          <tr><td colspan="2">&nbsp;</td></tr>
        <?php
	}
	$n=$n+1;
		
	}?>
    </table>
        
        
	</div></div>
    

<hr/>
     
			<p align="center">© All Rights Reserved| Designed by Pharis Kahama </p>
		

</body>
</html>