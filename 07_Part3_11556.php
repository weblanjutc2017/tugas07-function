<?php

function fpb($a,$b){
	while($b!=0){
		$c=$a % $b;
		$a = $b;
		$b = $c;
	}
	return $a;
	
}

function kpk($a,$b){
	$kp = $a*$b/fpb($a,$b);
	return $kp;
}

echo "fpb= " . fpb(3,15) . "<br/>";
echo "kpk= " . kpk(3,15);


?>