<?php
	function FPB($a, $b) {
		while ($b != 0) {
			$c = $a % $b;
			$a = $b;
			$b = $c;
		}
		return $a;
	}
	
	function KPK($a, $b) {
		$c = $a;
		while ($c % $b != 0) {
			$c += $a;
		}
		
		return $c;
	}
	
	$a = 4;
	$b = 8;
	
	echo "FPB dari a = $a dan b = $b adalah " . FPB($a, $b);
	echo "<br>";
	echo "KPK dari a = $a dan b = $b adalah " . KPK($a, $b);
?>