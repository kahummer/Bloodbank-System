<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Logout</title>
</head>

<body>
<?php

$_SESSION["username"]="";
	$_SESSION["usertype"]="";
		$_SESSION['loginstatus']="";
		header("location:adminlogin.php");
?>
</body>
</html>