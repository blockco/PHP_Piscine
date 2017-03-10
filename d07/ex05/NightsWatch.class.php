<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class NightsWatch
{
	public function recruit($person)
	{
		if (method_exists($person, "fight"))
		{
			$person->fight();
		}
	}
	public function fight()
	{
	}
}
?>
