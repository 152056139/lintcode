<?php
	$input = (Integer)$argv[1];
	if($input >= 100 && $input < 1000)
	{
		$one = $input % 10;
		$ten = ($input % 100 - $one) / 10;
		$hundred = ($input % 1000 - $ten * 10 -$one * 1) / 100;
		echo $one . $ten . $hundred . PHP_EOL;
	}
	else 
	{
		exit("Error:输入范围错误，参数大于等于100，小于1000");
	}
?>