<?php

	function ft_is_sort($tab)
	{
		$cpy = $tab;
		sort($cpy);
		$i = 0;
		while ($i < count($tab))
		{
			if ($tab[$i] !== $cpy[$i])
				return false;
			$i++;
		}
		return true;
	}
?>
