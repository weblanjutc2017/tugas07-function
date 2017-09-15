<?php
	function maks($x,$y){
		if($x>$y){
			return $x;
		}
		else if($x<$y){
			return$y;
		}
		else{
			return $x;
		}
	}
	echo "maks(9,99)";
	echo maks(9,99);
?>