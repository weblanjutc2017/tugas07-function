<?php
	function maks($a,$b){
		echo "Nilai tertinggi dari $a dan $b adalah :</br>";
		$jawab;
		if($a > $b){
			echo $a . "</br>";
		}
		else{
			echo $b . "</br>";
		}
	}
	
	maks(2,8);
	maks(6,1);
?>