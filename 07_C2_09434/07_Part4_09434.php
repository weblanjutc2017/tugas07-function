<?php
	function deretBilangan ($a) {
		echo "Deret bilangan Ganjil kurang dari $a <br>";
		$i = 1;
		$jumlahGanjil = 0;
		
		while ($i < $a) {
			if ($i % 2 != 0) {
				echo "$i ";
				$jumlahGanjil += $i;				
			}
			$i++;
		}
		
		echo "<br>";
		echo "Jumlah = $jumlahGanjil";
		
		echo "<br>";
		
		echo "Deret bilangan Genap kurang dari $a <br>";
		
		$j = 1;
		$jumlahGenap = 0;
		
		while ($j < $a) {
			if ($j % 2 == 0) {
				echo "$j ";
				$jumlahGenap += $j;				
			}
			$j++;
		}
		
		echo "<br>";
		echo "Jumlah = $jumlahGenap";
	}
	
	$a = 10;
	deretBilangan($a);
?>