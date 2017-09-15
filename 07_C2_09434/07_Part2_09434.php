<?php
	function maks($a, $b) {
		if ($a > $b) {
			$max = $a;
		}else{
			$max = $b;
		}
		return $max;
	}
	
	$a = 8;
	$b = 6;
	echo "Nilai Maksnya dari a = $a dan b = $b adalah " . maks($a, $b);
?>