<?php
	function cariFibonaci($angka){
		$angka1 = 0;
		$angka2 = 1;
		
		for($i=0; $i<$angka-2; $i++){
			$keluaran = $angka1 + $angka2 ;
			$angka1 = $angka2;
			$angka2 = $keluaran;
		}
		return $keluaran;
	}
	
	echo cariFibonaci(5);
	echo "<br/>";
?>