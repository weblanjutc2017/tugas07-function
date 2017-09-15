<?php

function ganjil($a){
	$jumlah=0;
	echo "Bilangan ganjil<br/>";
	for($x=1;$x<$a;$x++){
		if($x % 2 == 1){
			echo $x . " ";
			$jumlah=$jumlah+$x;
		}
	}
	echo " = " . $jumlah;
	echo "<br/>";
}


function genap($a){
	$jumlah=0;
	echo "Bilangan genap<br/>";
	for ($y=1;$y<$a;$y++){
		if($y%2==0){
			echo $y . " ";
			$jumlah=$jumlah+$y;
		}
	}
	echo " = " . $jumlah;
}

ganjil(100);
genap(100);

?>