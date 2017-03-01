<?php

function ft_split($arg){
	$parts = preg_split('/\s+/', $arg);
	return $parts;
}

$a = 0;
$list = [];
if ($argc > 1)
    $temp = ft_split($argv[1]);
else
    exit(1);

while ($a < count($temp))
{
    if (!ctype_space($temp[$a]) && $temp[$a] != "")
        array_push($list, $temp[$a]);
    $a++;
}

$a = 1;
while ($a < count($list))
{
    print $list[$a];
    print " ";
    $a++;
}
print $list[0];
print("\n");
?>
