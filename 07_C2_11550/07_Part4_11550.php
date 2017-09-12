<?php
	function ganjil($x) {	
		$total = 0;
		$i = 1;
		echo "Deret bilangan ganjil kurang dari $x <br />";
		while($i<$x) {
			echo"$i";
			$total=$total+$i;
			if($i<$x-2) {
				echo "+";
			}
			$i=$i+2;
		}
		echo "<br /> Jumlah=$total <br />";
	}

	function genap($x) {	
		$total = 0;
		$i = 2;
		echo "Deret bilangan genap kurang dari $x <br />";
		while($i<$x) {
			echo"$i";
			$total=$total+$i;
			if($i<$x-2) {
				echo "+";
			}
			$i=$i+2;
		}
		echo "<br /> Jumlah=$total <br />";
	}
	

	
	ganjil(10);
	genap(10);
	
?>