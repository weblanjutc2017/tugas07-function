<?php
function fpb($x, $y){
	while($y!=0){
		$z=$x%$y;
		$x=$y;
		$y=$z;
	}
	return $x;
}

function kpk($x, $y){
	$z=$x;
	while($z%$y!=0){
		$z=$z+$x;
	}
	return $z;
}

echo "fpb :" . fpb(32, 60) . "<br/>";
echo "kpk :" . kpk(9, 7);
?>