<?php
	function auth($login, $passwd)
	{
		$temp = unserialize(file_get_contents("../private/passwd"));
		if ($temp[$login][passwd] === hash("whirlpool", $passwd))
		{
			return true;
		}
		else
			return false;
	}
?>
