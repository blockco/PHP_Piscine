<?php
	function printcookie($val)
	{
		echo $_COOKIE[$val];
	}
	if ($_GET["action"] === "set")
		setcookie($_GET["name"], $_GET["value"]);
	else if ($_GET["action"] === "get")
		printcookie($_GET["name"]);
	else if ($_GET["action"] === "del")
		setcookie($_GET["name"], $_GET["value"], time() - 1);
?>
