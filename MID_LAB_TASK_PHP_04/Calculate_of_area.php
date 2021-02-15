<?php
	echo "Calculate the area of rectangle & premeter ?";
	echo "<br>";

	function calculate_area($length, $width){
		return $length * $width;
		return 2*($length+$width);
	}
	echo "Area of rectangle = ".calculate_area(4,2);
	echo "<br>";
	echo "Area of perimeter = ".calculate_area(8,4);
?>