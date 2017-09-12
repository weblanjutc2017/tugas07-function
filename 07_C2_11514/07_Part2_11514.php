<?php
	function maks($a, $b){
		if($a > $b){
			return $a;
		}
		else return $b;
	}

	$x = 5;
	$y = 9;
	echo "Nilai terbesar antara $x dan $y adalah " . maks(5, 9);
?>
