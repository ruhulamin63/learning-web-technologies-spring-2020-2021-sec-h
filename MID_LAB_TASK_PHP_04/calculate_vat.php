<?php
	echo "Calculate the vat ?";
	echo "<br>";

	function calculate_vat($amount){
		return $amount*(15/100);
	}
	echo "Amount of 15% vat = ".calculate_vat(70)." taka";
?>