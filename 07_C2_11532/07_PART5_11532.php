<?php
	function Fibonaci($n){
		$n1 = 0;
		$n2 = 1;
		
		for($i=0; $i<$n-2; $i++){
			$hasil = $n1 + $n2 ;
			$n1 = $n2;
			$n2 = $hasil;
		}
		return $hasil;
	}
	
	echo Fibonaci(40);
	echo "<br/>";
?>