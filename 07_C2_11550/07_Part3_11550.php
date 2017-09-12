<?php
function FPB($a, $b) {
	while ($b!=0){
		$c = $a % $b;
		$a = $b;
		$b = $c;
	}
	return $a;
}
function KPK($a, $b) {
	$c = $a;
	while ($c % $b !=0){
		$c = $c + $a;
	}
	return $c;
}

echo "FPB = " . FPB(24,18) . "<br/>";
echo "KPK = " . KPK(24,18);
?>