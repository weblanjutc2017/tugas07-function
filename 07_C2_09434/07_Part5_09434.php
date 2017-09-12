<?php
	function fibonanci ($n) {
		echo "n = $n<br>";
		
		$awal = 0;
		$akhir = 1;
		
		$deret = "$awal $akhir";
		
		$jumlah = 1;
		
		if ($n==1) {
			return "Deret fibonanci : 0 <br>jumlahnya = 0 <br> nilai ke-$n adalah 0";
		} elseif ($n==2) {
			return "Deret fibonanci : 0 1 <br>jumlahnya = 1 <br> nilai ke-$n adalah 1";
		} else {
			for ($i=0; $i<$n-2; $i++) {
				$hasil = $awal + $akhir;
				$jumlah += $hasil;
				$deret = $deret . " $hasil";
				$awal = $akhir;
				$akhir = $hasil;
			}
			
			return "Deret fibonanci : " . $deret . "<br> jumlahnya = " . $jumlah. "<br> nilai ke-$n adalah $akhir";
		}
	}
	
	echo fibonanci(40);
	echo "<br>";
?>