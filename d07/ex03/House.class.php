<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class House{
	// public function introduce{
	// 	print "House ".getHouseName()." ".getHouseSeat()." : ".getHouseMotto().PHP_EOL;
	// }
	public function introduce()
	{
			echo "House ". $this->getHouseName()." of ".$this->getHouseSeat().' : "'.$this->getHouseMotto().'"'."\n";
	}
}
?>
