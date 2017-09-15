<?php
	function FPB($a, $b){
		while ($b != 0){
			$c = $a % $b;
			$a = $b;
			$b = $c;
		}
		return $a;
	}
	function KPK($a, $b){
		$c = $a;
		while ($c % $b != 0){
			$c = $c + $a;	
		}
		return $c;
	}
	
	echo "Hasil FPB dari (24,6) adalah  ";
	echo FPB(24,6);	echo "<br/>";
	echo "Hasil KPK dari (24,6) adalah  ";
	echo KPK(24,6);
?>