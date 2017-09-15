<?php
	function fibonacci($angka) {
		$awal = 0;
		$akhir = 1;
		if($angka == 1) {
			echo "0";
		}	
		else if($angka == 2) {
			echo "1";
		}
		else{
			for($i=0;$i<$angka-2;$i++) {
				$hasil=$awal+$akhir;
				$awal=$akhir;
				$akhir=$hasil;
			}
			echo "Fibonacci ke-$angka adalah $hasil";
		}
	}
	
	fibonacci(10);

?> 