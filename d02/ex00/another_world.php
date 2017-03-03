#!/usr/bin/env php
<?php
function ft_split($arg){
	$parts = preg_split('/\s+/', $arg);
	$parts = array_filter($parts);
	return $parts;
}

if ($argc > 1)
{
	$i = 0;
	$split = ft_split($argv[1]);
	foreach ($split as $value)
	{
		$i++;
		echo $value;
		if ($i < count($split))
			echo " ";
	}
	echo "\n";
}
?>
