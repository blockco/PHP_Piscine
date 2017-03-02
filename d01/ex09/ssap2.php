<?php
function ft_split($arg)
{
	$parts = preg_split('/\s+/', $arg);
	return $parts;
}

function ft_arrayprint($arg)
{
	foreach ($arg as $key => $value)
	{
		echo $value;
		echo "\n";
	}
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

	$num = [];
	$alpha = [];
	$sym = [];

	foreach ($list as $arr)
	{
		if (is_numeric($arr))
			array_push($num, $arr);
		else if (ctype_alpha($arr))
			array_push($alpha, $arr);
		else
			array_push($sym, $arr);
	}
	natsort($alpha);
	rsort($num);
	sort($sym);
	ft_arrayprint($alpha);
	ft_arrayprint($num);
	ft_arrayprint($sym);
?>
