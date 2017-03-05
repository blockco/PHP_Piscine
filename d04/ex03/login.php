<?php
include("auth.php");
session_start();
if ($_GET[login] === "" || $_GET[passwd] === "" || $_GET[submit] != "OK")
{
	echo "Error\n";
}
else
{
	if (auth($_GET[login], $_GET[passwd]))
	{
		$_SESSION[loggued_on_user] = $_GET[login];
		echo "Ok\n";
	}
	else
	{
		$_SESSION[loggued_on_user] = "";
		echo "Error\n";
	}
}
?>

<html>
<body>

<form action="login.php" method="get">
Name: <input type="text" name="login" value="">
Password: <input type="password" name="passwd" value="">
<input type="submit" name="submit" value="OK">
</form>
</body>
</html>
