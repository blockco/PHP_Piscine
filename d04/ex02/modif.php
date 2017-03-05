<?php
	$found = 0;
	if ($_POST[login] === "" || $_POST[oldpw] === "" || $_POST[submit] != "OK" || $_POST[newpw] === "")
	{
		echo "Error\n";
	}
	else
	{
		if (file_exists("../private/passwd"))
		{
			$temp = unserialize(file_get_contents("../private/passwd"));
			if ($temp[$_POST[login]][passwd] === hash("whirlpool", $_POST[oldpw]))
			{
				$temp[$_POST[login]][passwd] = hash("whirlpool", $_POST[newpw]);
				$found = 1;
			}
		}
		if ($found == 1)
		{
			file_put_contents("../private/passwd", serialize($temp));
			echo "OK\n";
		}
		else
		{
			echo "Error\n";
		}
	}
?>
