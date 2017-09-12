<?php
	function fibonanci ($n) {
		$awal = 0;
		$akhir = 1;
		
		$deret = "$awal $akhir";
		
		$jumlah = 1;
		
		for ($i=0; $i<$n-2; $i++) {
			$hasil = $awal + $akhir;
			$jumlah += $hasil;
			$deret = $deret . " $hasil";
			$awal = $akhir;
			$akhir = $hasil;
		}
		
		return "Deret fibonanci : " . $deret . "<br> jumlahnya = " . $jumlah. "<br> nilai ke-$n adalah $akhir";
	}
	
	echo fibonanci(1);
	echo "<br>";
?>