<?php
function maks($a,$b){
	if($a > $b){
		echo "Bilangan terbesar antara $a dan $b adalah $a";
	}else{
		echo "Bilangan terbesar antara $a dan $b adalah $b";
	}
}
echo maks(10,20);
?>