<?php
	function fibonacci($n){
		$a=0;$b=1;
		for($i=2;$i<$n;$i++){
			$c=$a+$b;
			$a=$b;
			$b=$c;
		}
		echo $c;
	}
	echo "fibonacci(40) = ";
	fibonacci(40);
?>