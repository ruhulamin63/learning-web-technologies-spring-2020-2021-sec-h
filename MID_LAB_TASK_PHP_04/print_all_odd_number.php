<?php
	echo "Print all odd number between 10 to 100 ?";
	echo "<br>";

	for($i=10; $i<100; $i++){
		if($i%2 != 0)
			echo $i." ";
	}
?>