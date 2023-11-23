<?php

function secondHighest($list) {
  $max = -INF;
  $secondMax = -INF;

  foreach($list as $num) {
    if($num > $max) {
      $secondMax = $max;
      $max = $num;
    }
    else if($num > $secondMax) {
      $secondMax = $num;
    }
  }

  return $secondMax !== -INF && $secondMax !== $max ? $secondMax : 0;
}

$arr = [9, 5, 2, 8, 1];

echo "Second highest number: " . secondHighest($arr);

?>