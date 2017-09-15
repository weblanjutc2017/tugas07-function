<?php
function fibo($x)
{
  echo "Deret fibonacci ke-".$x." = ";
  $before=0;
  $now=1;
  $z = "$before $now";
 
  for ($i=0; $i<$x-2; $i++)
  {
    $output = $now + $before;
    $z = $z." $output";
  
    $before = $now;
    $now = $output;
  }
  return $z;
}

echo fibo(10);

?>  