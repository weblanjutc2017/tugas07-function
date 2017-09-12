<?php
function Ganjil($b){
	echo "Bilangan ganjil <br/>";
	echo "Deret bilangan : ";
	$jml1=0;
	for($gjl=0; $gjl<$b; $gjl++){
		if($gjl%2==1){
			echo "$gjl";
			$jml1=$jml1+$gjl;
		}
		if($gjl%2==1 && $gjl!=99 && $gjl!=100){
			echo "+";
		}
	}
	echo "<br/>";
	echo "Jumlah = " . $jml1;
}

function Genap($a){
	echo "Bilangan genap <br/>";
	echo "Deret bilangan : ";
	$jml2=0;
	for($gnp=1; $gnp <$a; $gnp++){
		if($gnp%2==0){
			echo "$gnp";
			$jml2=$jml2+$gnp;
		}
		if($gnp%2==0 && $gnp!=98 && $gnp!=100){
			echo "+";
		}
	}
	echo "<br/>";
	echo "Jumlah = " . $jml2;
}
Ganjil(100);
echo "<br/>";
echo "<br/>";
Genap(100);
?>