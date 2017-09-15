<?php
	function fibo($bil){
		$fib1=0;
		$fib2=1;
		if($bil==1){
			return $fib1;
		}
		else if($bil==2){
			return $fib2;
		}
		else{
			$fib3;
			for($i=2;$i<$bil;$i++){
				$fib3=$fib1+$fib2;
				$fib1=$fib2;
				$fib2=$fib3;
			}
			return $fib3;
		}
	}
	
	$n=19;
	echo "Bilangan fibo ke $n adalah ". fibo($n);
?>