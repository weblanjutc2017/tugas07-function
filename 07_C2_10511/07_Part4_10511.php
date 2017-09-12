<?php
	function ganjil(){
 		$jml_gjl=0;
 		for($a=1;$a<=100;$a++){
 			if($a%2!=0 && $a!=99 && $a!=100){
 				echo "$a+";
 			}
 			else if($a%2!=0){
 				echo"$a";
 			}
 			if($a%2!=0){
 				$jml_gjl=$jml_gjl+$a;
 			}
 		}
 		echo "</br>Jumlah =".$jml_gjl;
 	}
	
 	function genap(){
 		$jml_gnp=0;
 		for($b=1;$b<=100;$b++){
 			if($b%2==0 && $b!=99 && $b!=100){
 				echo "$b+";
 		}
 			else if($b%2==0){
 				echo"$b";
 			}
 			if($b%2!==0){
 				$jml_gnp=$jml_gnp+$b;
 			}
 		}
 		echo "</br>Jumlah =".$jml_gnp;
 	}
 	echo "Deret bilangan ganjil kurang dari 100</br>";
 	ganjil();
 	echo "</br>Deret bilangan genap kurang dari 100</br>";
 	genap();
?>