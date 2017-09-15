<?php
 	function fpb($x,$y){
 		while($y!=0){
 			$c= $x%$y;
 			$x=$y;
 			$y=$c;
 		}
 		return $x;
 	}
 	function kpk($x,$y){
 		$c=$x;
 		while($c%$y!=0){
 			$c=$c+$x;
 		}
 		return $c;
 	}
 	echo "FPB(16,24) </br>";
 	echo fpb(16,24);
 	echo "</br>";
 	echo "KPK(18,16)</br>";
 	echo kpk(18,16);
 ?> 