<?php
function ft_split($arg){
	$parts = preg_split('/\s+/', $arg);
	return $parts;
}

$i = 1;
$parts = ft_split($argv[1]);
while($i < count($parts))
{

	if (!ctype_space($parts[$i]))
		print(trim($parts[$i]));
	$i++;
	if ($i < count($parts))
		print(" ");
}
print "\n";
?>
