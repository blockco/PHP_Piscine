<?php
function ft_split($arg){
	$parts = preg_split('/\s+/', $arg);
	return $parts;
}

    $i = 1;
    $list = [];

	while ($i < $argc)
	{
		$temp = ft_split($argv[$i]);
		$a = 0;
		while ($a < count($temp))
		{
			if (!ctype_space($temp[$a]) && $temp[$a] != "")
				array_push($list, $temp[$a]);
			$a++;
		}
	$i++;
	}
	sort($list);
	foreach ($list as $arr) {
	echo($arr);
	echo("\n");
	}
?>
