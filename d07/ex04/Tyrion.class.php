<?php
class Tyrion extends Lannister
{
	function sleepWith($person)
	{
		if ("Lannister" === get_parent_class($person)){
			echo "Not even if I'm drunk !\n";
		}
		elseif ("Lannister" != get_parent_class($person)) {
			echo "Let's do this.\n";
		}
	}
}
 ?>
