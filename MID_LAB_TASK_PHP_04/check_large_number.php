<?php
		
	echo "Choice your three number?";
	echo "<br>";

	function check_large_number($a, $b, $c){
		if($a>=$b && $a>=$c){
			echo "First value is a large number.";
		}
		else if($b>=$a && $b>=$c){
			echo "Second value is a large number.";
		}
		else{
			echo "Third value is a large number.";
		}
	}
	echo check_large_number(10,1,9);
?>