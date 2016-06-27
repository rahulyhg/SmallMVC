<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>Hello from the home view</h1>
<p>First Name: <?php echo $first;?></p>
<p>Last Name: <?php echo $last;?></p>
<?php
	if (isset($userid) && isset($password))
	{
?>
<p>Logged in</p>
<?php
	}
	else
	{
?>
<p>Not Logged in</p>
<?php } ?>

<p><a href="index.php?page=contact">Contact Us</a></p>
<p><a href="index.php?page=login">Log In</a></p>
</body>
</html>