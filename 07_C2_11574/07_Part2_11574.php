<?php
	function maks($a,$b){
		if($a>$b){
			return $a;
		}
		else{
			return $b;
		}
	}
	
	$x=9;
	$y=8;
	
	echo "Max antara $x dan $y adalah ". maks($x,$y); 
	
?>