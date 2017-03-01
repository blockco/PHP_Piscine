<?php
function ft_split($arg){
	$parts = preg_split('/\s+/', $arg);
	sort($parts);
	return $parts;
}
?>
