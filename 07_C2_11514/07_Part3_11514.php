<?php
    function FPB($a, $b){
      while ($b != 0) {
        $c = $a % $b;
        $a = $b;
        $b = $c;
      }
      return $a;
    }

    function KPK($a, $b){
      $c = $a;
      while ($c % $b != 0){
        $c += $a;
      }
      return $c;
    }

    $x = 4;
    $y = 50;

    echo "FPB dari $x dan $y adalah " . FPB($x, $y);
    echo "<br>";
    echo "KPK dari $x dan $y adalah " . KPK($x, $y);

?>
