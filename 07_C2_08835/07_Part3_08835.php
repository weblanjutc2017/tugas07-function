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
		
	echo FPB(6, 4);
	echo "<br>";
	echo KPK(4, 9);
?>