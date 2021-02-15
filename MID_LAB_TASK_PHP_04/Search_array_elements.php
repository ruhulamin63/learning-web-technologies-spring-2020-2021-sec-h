<?php
	echo "Search for array elements ?";
	echo "<br>";

	$array=[1,2,3,4,5,7,8,3];

	$search_value=3;
	$f=0;

	echo "Search value ".$search_value;
	echo "<br>";

	for($i=0; $i<count($array); $i++){
		if($array[$i]==$search_value)
			$f=1;
	}
	if($f)
		echo $search_value." is a present in this array.";
	else
		echo "Is not present in this array.";
?>