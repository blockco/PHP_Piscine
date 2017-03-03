<?php
function checkday($str)
{
	$fdays = array("lundi", "mardi", "mercredi", "
jeudi")
}

$str = "Mardi 12 Novembre 2013 12:02:21";
$str1 = "Mardi 12 Novembre 2013 ";
$test = "h";
date_default_timezone_set('America/Los_Angeles');
if (preg_match("/[a-zA-Z]+ \d{2} [a-zA-Z]+ \d{4} \d{2}:\d{2}:\d{2}$/", $argv[1]))
	echo strtotime ("now");
else
	echo "Wrong Format"."\n";
?>
