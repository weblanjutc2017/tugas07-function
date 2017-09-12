<?php
	function genap($bil){	
		$total=0;
		echo "Deret bilangan Genap kurang dari $bil <br>";
		for($i=2;$i<$bil;$i+=2){
			echo"$i";
			$total+=$i;
			if($i<$bil-2){
				echo "+";
			}
		}
		echo "<br> Jumlah=$total <br>";
	}
	
	function ganjil($bil){	
		$total=0;
		echo "Deret bilangan Ganjil kurang dari $bil <br>";
		for($i=1;$i<$bil;$i+=2){
			echo"$i";
			$total+=$i;
			if($i<$bil-2){
				echo "+";
			}
		}
		echo "<br> Jumlah=$total <br>";
	}
	
	ganjil(10);
	genap(10);
	
?>