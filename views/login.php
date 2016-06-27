<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Login</title>
<style type="text/css">
label {
	display: block;
}
</style>
</head>

<body>
<h1>Login</h1>
	<form action="index.php?page=validate" method="post">
		<fieldset>
			<label for="userid">User Id:</label>
			<input name="userid" id="userid" type="text" size="20" maxlength="10">
			<label for="password">Password</label>
			<input name="password" id="password" type="password" size="20" maxlength="10">
			<label for="submit"></label>
			<input type="submit" name="submit" id="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>