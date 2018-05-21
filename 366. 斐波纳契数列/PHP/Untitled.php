<?php
	$input = $argv[1];
	
	if($input == "1")
	{
		echo "0";
	}
	else if ($input == "2") 
	{
		echo "1";
	} 
	else 
	{
		echo fibonacci($input);
	}
	
	function fibonacci ($input)
	{
		$first = 0;
		$second = 1;
		$count = 3;
		
		while($count <= $input)
		{
			$first_copy = $first;
			$first = $second;
			$second = $second + $first_copy;
			$count++;
		}
		return $second;
	}
?>