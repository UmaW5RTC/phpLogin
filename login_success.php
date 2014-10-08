<?php
session_start();
if(isset($_SESSION['user'])=="")
{
	header('location:index.php');
}
?>
<html>
<head>
	<title>login success page</title>
</head>
<body>
	<p>login is done successfully</p>
	<a href="logout.php">logOut</a>
</body>
</html>