<?php
	function ganjil(){
		$gan=0;
		for($i=1;$i<=100;$i++){
			if($i%2!=0 && $i!=99 && $i!=100){
				echo "$i+";
			}
			else if($i%2!=0){
				echo"$i";
			}
			if($i%2!=0){
				$gan=$gan+$i;
			}
		}
		echo "</br>jumlah =".$gan;
	}
	function genap(){
		$gen=0;
		for($i=1;$i<=100;$i++){
			if($i%2==0 && $i!=99 && $i!=100){
				echo "$i+";
			}
			else if($i%2==0){
				echo"$i";
			}
			if($i%2!==0){
				$gen=$gen+$i;
			}
		}
		echo "</br>jumlah =".$gen;
	}
	echo "deret bilangan ganjil kurang dari 100</br>";
	ganjil();
	echo "</br>deret bilangan genap kurang dari 100</br>";
	genap();
?>