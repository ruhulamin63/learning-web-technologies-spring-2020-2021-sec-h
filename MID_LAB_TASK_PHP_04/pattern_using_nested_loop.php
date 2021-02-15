<?php
	echo "Display pattern ?";
	echo "<br>";

	function display_star($n){

		for($row=1; $row<=$n; $row++){
			for($col=1; $col<=$row; $col++){
				echo "* ";
			}
			echo "<br>";
		}
	}
	echo display_star(3);
	echo "<br>";

//==============================================================

	function display_value($n){

		for($row=$n; $row>=1; $row--){
			for($col=1; $col<=$row; $col++){
				echo $col." ";
			}
			echo "<br>";
		}
	}
	echo display_value(3);
	echo "<br>";

//================================================================
	
	function display_letter($n){

		for($row=1; $row<=$n; $row++){
			for($col=1; $col<=$row; $col++){
				echo chr($col+64)." "; //convert number to char
			}
			echo "<br>";
		}
	}
	echo display_letter(3);
?>