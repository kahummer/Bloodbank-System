<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Section</title>
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
       <div>
      
       </div>
       <div style="width:800px;float:right;">
         <img src="images/adduser2.png" align="center" width="150" height="200px" style="margin-top: 50px;">
      <h1 align="center" style="font-weight: bolder; font-size: 30px; margin-top: 70px;"> Welcome To Admin Area </h1>
       </div>

         <?php include('function.php'); ?>
         <?php
          $cn=makeconnection();
          //grab total donors
          $sa = "select * from donarregistration";
          $qa = mysqli_query($cn, $sa);
          $all = mysqli_num_rows($qa);
          echo "<br/><center><h2 style = 'font-weight:bolder;'>". "Total Donors" . " $all\n"."</h2><br/></center>";

echo "<table ><tr><td>";
          //grab o+
          $s = "select * from donarregistration where b_id = '13' ";
          $q = mysqli_query($cn, $s);
          $oplus = mysqli_num_rows($q);
          echo "<center><span style = 'font-weight:bolder;'>". "Total O+" ."&nbsp;". " $oplus"."</span></center>";
echo "</td><td>&nbsp;</td><td>";
          //grab o-
          $sm = "select * from donarregistration where b_id = '14' ";
          $qm = mysqli_query($cn, $sm);
          $ominus = mysqli_num_rows($qm);
          echo "<center><span style = 'font-weight:bolder;'>". "Total O-" ."&nbsp;". " $ominus"."</span></center>";
echo "</td><td>&nbsp;</td><td>";
          //grab AB+
          $sab = "select * from donarregistration where b_id = '15' ";
          $qab = mysqli_query($cn, $sab);
          $oab = mysqli_num_rows($qab);
          echo "<center><span style = 'font-weight:bolder;'>". "Total AB+" ."&nbsp;". " $oab"."</span></center>";
echo "</td><td>&nbsp;</td><td>";
          //grab AB-
          $sabm = "select * from donarregistration where b_id = '16' ";
          $qabm = mysqli_query($cn, $sabm);
          $oabm = mysqli_num_rows($qabm);
          echo "<center><span style = 'font-weight:bolder;'>". "Total AB-" ."&nbsp;". " $oabm"."</span></center>";
echo "</td><td>&nbsp;</td><td></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr><td>";
          //grab A+
          $saplus = "select * from donarregistration where b_id = '17' ";
          $qaplus = mysqli_query($cn, $saplus);
          $oaplus = mysqli_num_rows($qaplus);
          echo "<center><span style = 'font-weight:bolder;'>". "Total A+" ."&nbsp;". " $oaplus"."</span></center>";
echo "</td><td>&nbsp;</td><td>";
          //grab A-

          $sam = "select * from donarregistration where b_id = '18' ";
          $qam = mysqli_query($cn, $sam);
          $oam = mysqli_num_rows($qam);
          echo "<center><span style = 'font-weight:bolder;'>". "Total A-" ."&nbsp;". " $oam"."</span></center>";
echo "</td><td>&nbsp;</td><td>";
          //grab B+
          $sbplus = "select * from donarregistration where b_id = '15' ";
          $qbplus = mysqli_query($cn, $sbplus);
          $obplus = mysqli_num_rows($qbplus);
          echo "<center><span style = 'font-weight:bolder;'>". "Total B+" ."&nbsp;". " $obplus"."</span></center>";
echo "</td><td>&nbsp;</td><td>";
          //grab B-
          $sbm = "select * from donarregistration where b_id = '15' ";
          $qbm = mysqli_query($cn, $sbm);
          $obm = mysqli_num_rows($qbm);
          echo "<center><span style = 'font-weight:bolder;'>". "Total B-" ."&nbsp;". " $obm"."</span></center>";
echo "</td><td>&nbsp;</td></tr></table>";


         ?>
</div>
   </div>
    </center>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php include('bottom.php'); ?>
   
</body>
</html>