<?php
	function fpb($a,$b){
		while($b!=0){
			$c=$a%$b;
			$a=$b;
			$b=$c;
		}
		return $a;
	}
	
	function kpk($a,$b){
		$hasil=($a*$b)/fpb($a,$b);
		return $hasil;
	}
	
	echo "fpb dari 24 dan 18 adalah ". fpb(24,18);
	echo "<br>";
	echo "kpk dari 8 dan 12 adalah ". kpk(8,12);
	
	
?>