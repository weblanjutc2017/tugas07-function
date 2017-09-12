<?php
	function ganjil($a){
		echo "<b>Menampilkan deret dan Jumlah deret Bilangan Ganjil</b><br/>";
		$jumlah1=0; 
		for($ganjil=0;$ganjil<$a;$ganjil++){
			if($ganjil % 2 == 1){
				echo "$ganjil";
				$jumlah1=$jumlah1+$ganjil;
			}
			if($ganjil % 2 == 1 && $ganjil != 99 && $ganjil !=100){
				echo "+";
			}
		}
		echo " = "."<b>$jumlah1</b>";
		echo "<br/>";
		echo "<br/>";
	}
	
	function genap($b){
		echo "<b>Menampilkan deret dan Jumlah deret Bilangan Genap</b> <br/>";
		$jumlah2=0;
		for($genap=1;$genap<=$b;$genap++){
			if($genap%2==0){
				echo "$genap";
				$jumlah2=$jumlah2+$genap;
				echo "+";
			}	
			}
		echo " = "."<b>$jumlah2</b>";
		echo "<br/>";
		}	

	ganjil(100);
	genap(100);
?>