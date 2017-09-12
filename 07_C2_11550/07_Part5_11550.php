<?php
	function fibonacci($angka) {
		$a = 0;
		$b = 1;
		$c;
		if($angka == 1) {
			echo "0";
		}	
		else if($angka == 2) {
			echo "1";
		}
		else{
			for($i=0;$i<$angka-2;$i++) {
				$c=$a+$b;
				$a=$b;
				$b=$c;
			}
			echo "$c";
		}
	}
	
	echo "fibonacci ke-5 = ";
	fibonacci(5);

?>