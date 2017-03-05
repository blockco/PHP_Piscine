<?php
$error = 0;
	if ($_POST[login] === "" || $_POST[passwd] === "" || $_POST[submit] != "OK")
	{
		echo "Error\n";
	}
	else
	{
		if (!file_exists("../private"))
		mkdir("../private");
		else if (file_exists("../private/passwd"))
		{
			//more later
			$temp = unserialize(file_get_contents("../private/passwd"));
			foreach($temp as $data)
			{
				foreach ($data as $key => $value)
				{
					if ($key === "login" && $value === $_POST[login])
					{
						$error = 1;
					}
				}
			}
		}
		if ($error == 0)
		{
			$_POST[passwd] = hash("whirlpool", $_POST[passwd]);
			$info = array("login"=>$_POST[login], "passwd"=>$_POST[passwd]);
			$temp[$_POST[login]] = $info;
			// print_r($temp);
			file_put_contents("../private/passwd", serialize($temp));
			echo "OK\n";
		}
		else
		{
			echo "Error\n";
		}
	}
?>
