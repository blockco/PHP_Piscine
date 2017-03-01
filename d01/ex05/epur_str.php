<?php
function ft_split($arg){
	$parts = preg_split('/\s+/', $arg);
	return $parts;
}

$i = 0;
$parts = ft_split($argv[1]);
while($i < count($parts))
{
	$parts[$i] = trim($parts[$i], $character_mask = " \t\n\r\0\x0B");
	print($parts[$i]);
	if (!ctype_space($parts[$i]) && $parts[$i] != "")
		print " ";
	$i++;
}
print "\n";
?>
