<?php
  function ganjil($nilai){
    $total=0;
    echo "Deret bilangan Ganjil kurang dari $nilai <br>";
    for($i=1; $i<$nilai; $i+=2){
      echo "$i";
      $total = $total + $i;
      if ($i<$nilai-2) {
        echo "+";
      }
    }
    echo "<br>";
    echo "Jumlah=$total";
    echo "<br>";
  }

  function genap($nilai){
    $total=0;
    echo "Deret bilangan Genap kurang dari $nilai <br>";
    for($i=2; $i<$nilai; $i+=2){
      echo "$i";
      $total = $total + $i;
      if ($i<$nilai-2) {
        echo "+";
      }
    }
    echo "<br>";
    echo "Jumlah=$total";
    echo "<br>";
  }

  ganjil(10);
  genap(10);
?>
