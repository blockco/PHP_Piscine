<?php

class Jaime extends Lannister
{
	function sleepWith($person)
	{
		if ("Lannister" === get_parent_class($person) && "Cersei" != get_class($person)){
			echo "Not even if I'm drunk !\n";
		}
		elseif ("Lannister" != get_parent_class($person)) {
			echo "Let's do this.\n";
		}
		elseif ("Cersei" === get_class($person)) {
			echo "With pleasure, but only in a tower in Winterfell, then.\n";
		}
	}
}

?>
