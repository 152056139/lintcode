<?php
	$array = [4, 2, 0, 8, 1];
	$count = 0;
	
	while($count < count($array))
	{
		$min_value = 2000;
		$min_key = 0;
		for($i = $count; $i < count($array); $i++)
		{
			if($array[$i] < $min_value)
			{
				$min_value = $array[$i];
				$min_key = $i;
			}
		}
		$temp = $array[$count];
		$array[$count] = $array[$min_key];
		$array[$min_key] = $temp;
		
		$count++;
	}
	print_r($array);