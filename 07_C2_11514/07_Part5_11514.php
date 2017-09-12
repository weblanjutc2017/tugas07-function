<?php
  function fibbonaci($nilai){
    $a = 0;
    $b = 1;
    if($nilai == 1){return $a;}

    else if($nilai == 2){return $b;}

    else {return fibbonaci($nilai-1)+fibbonaci($nilai-2);}
  }
  $nilai = 10;
  echo "Deret Fibbonaci ke $nilai adalah " . fibbonaci($nilai);
?>
