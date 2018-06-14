<?php if(!isset($_SESSION)) {session_start();}  ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Left pane Admin</title>
<link href="StyleSheet.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>

 
   <div style="width:1000px; height:700px;">
      
       <div style="width:800px;float:left; height:500px">
<table style="width:100%; height:600px">
<tr><td style="font-size:24px; color:black; font-weight:bold">Admin Links</td></tr>
<br />
<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td ><a href="adduser.php">Add User</a></td></tr>
<tr><td ><a href="upuser.php">Update User</a></td></tr>
<tr><td ><a href="deluser.php">Delete User</a></td></tr>

<?php }?>

<tr><td ><a href="addcity.php">Add Town</a></td></tr>
<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td ><a href="updatecity.php">Update Town</a></td></tr>
<tr><td ><a href="deletecity.php">Delete Town</a></td></tr>

<?php }?>

<tr><td ><a href="addstate.php">Add County</a></td></tr>
<?php if($_SESSION["usertype"]=="Admin")
{?>

<tr><td ><a href="updatestate.php">Update County</a></td></tr>
<tr><td ><a href="deletestate.php">Delete County</a></td></tr>

<?php }?>

<tr><td><a href="addcamp.php">Add Camp</a></td></tr>
<?php if($_SESSION["usertype"]=="Admin")
{?>

<tr><td><a href="updatecamp.php">Update Camp</a></td></tr>
<tr><td><a href="deletecamp.php">Delete Camp</a></td></tr>

<?php }?>

<tr><td><a href="addbloodgroup.php">Add Blood Group</a></td></tr>

<?php if($_SESSION["usertype"]=="Admin")
{?>

<tr><td><a href="upbloodgroup.php">Update Blood Group</a></td></tr>
<tr><td><a href="deletebloodgroup.php">Delete Blood Group</a></td></tr>

<?php }?>

<tr><td><a href="addgallery.php">Add Gallery</a></td></tr>

<?php if($_SESSION["usertype"]=="Admin")
{?>

<tr><td><a href="deletegallery.php">Delete Gallery</a></td></tr>

<?php }?>


<tr><td><a href="viewcity.php">View City</a></td></tr>
<tr><td><a href="viewstate.php">View State</a></td></tr>



<tr><td><a href="viewbloodgroup.php">View Blood Group</a></td></tr>
<tr><td><a href="viewcamp.php">View camps</a></td></tr>
<tr><td><a href="viewmessage.php">View Messages</a></td></tr>
<tr><td><a href="deleterequest.php">Delete Request</a></td></tr>

</table></div></div>

</body>
</html>