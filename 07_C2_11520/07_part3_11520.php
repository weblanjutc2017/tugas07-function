<?php
	function fpb($a,$b){
		while($b !=0){
			$c= $a%$b;
			$a=$b;
			$b=$c;
		}
		return $a;
	}
	function kpk($a,$b){
		$c=$a;
		while ($c%$b !=0){
			$c=$c+$a;
		}
		return $c;
	}
	echo "fpb(16,24) </br>";
	echo fpb(16,24);
	echo "</br>";
	echo "kpk(18,16)</br>";
	echo kpk(18,16);
?>