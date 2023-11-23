<?php 

function pattern1() {
  for($i = 1; $i <= 5; $i++) {
    for($j = 1; $j <= 5; $j++) {
      if($j <= $i) {
        echo "*";
      }
    }
    echo "<br />";
  }
}

function pattern2() {
  for($i = 0; $i < 5; $i++) {
    for($j = 0; $j < 5; $j++) {
      if($j < 5 - $i) {
        echo "*";
      }
    }
    echo "<br />";
  }
}

function pattern3() {
  for($i = 0; $i < 5; $i++) {
    $flag = true;
    for($j = 0; $j < 9; $j++) {
      if(($j <= floor((9/2) + $i)) && ($j >= floor((9/2) - $i)) && $flag) {
        echo "*";
        $flag = false;
      }
      else {
        echo "&nbsp;";
        $flag = true;
      }
    }
    echo "<br />";
  }
}

function fibonacci($num) {
  $previous = 0;
  $next = 0;
  for($i = 0; $next < $num; $i++) {
    if($i == 0) {
      $previous = 0;
      echo "$previous ";
    }
    else if($i == 1) {
      $next = 1;
      echo "$next ";
    }
    else {
      $temp = $next;
      $next = $previous + $temp;
      $previous = $temp;
      echo "$next ";
    }
  }
}

echo "1. <br /><br />";
pattern1();

echo "<hr />";

echo "2. <br /><br />";
pattern2();

echo "<hr />";

echo "3. <br /><br />";
pattern3();

echo "<hr />";

echo "4. <br /><br />";
fibonacci(55);

?>