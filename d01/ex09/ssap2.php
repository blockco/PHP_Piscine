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

function ssap2_sort($astr, $bstr)
{
	$achars = str_split($astr);
	$bchars = str_split($bstr);

	for ($i = 0; $i < count($achars); $i++)
	{
		if ($achars[$i] != $bchars[$i])
			return (ssap2_compare($achars[$i], $bchars[$i]));
	}
}

function ssap2_compare($a, $b)
{
	if (is_numeric($a))
		$a = $a + 128;
	else if (ctype_alpha($a))
		$a = strtolower($a);
	else
	{
		$a = ord($a);
		$a = $a + 256;
	}

	if (is_numeric($b))
		$b = $b + 128;
	else if (ctype_alpha($b))
		$b = strtolower($b);
	else
	{
		$b = ord($b);
		$b = $b + 256;
	}
	return ($a >= $b);

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

	usort($list, "ssap2_sort");
	foreach ($list as $val) {
		print ($val."\n");
	}
?>
