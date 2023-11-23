<?php

function generateDigits($num1, $num2) {
  $digits = pow(10, $num2 - 1);

  $sum = 0;
  while ($digits >= 1) {
    $sum = $sum + $num1 * $digits;
    $digits = $digits / 10;
  }

  return $sum;
}

function checkConcatenatedSum($n, $catlength) {
  $num = $n;
  $sum = 0;
  $digitLength = $catlength > 0 ? $catlength : 1;

  while($num > 1) {
    $sum = $sum + generateDigits($num % 10, $digitLength);
    $num = $num / 10;
  }

  return $sum == $n ? "true" : "false";
}

echo "1 Result: " . checkConcatenatedSum(198, 2) . "<br />"; //1
echo "2 Result: " . checkConcatenatedSum(198, 3) . "<br />"; //0
echo "3 Result: " . checkConcatenatedSum(2997, 3) . "<br />"; //1
echo "4 Result: " . checkConcatenatedSum(2997, 2) . "<br />"; //0
echo "5 Result: " . checkConcatenatedSum(13332, 4) . "<br />"; //1
echo "6 Result: " . checkConcatenatedSum(9, 1) . "<br />"; //1
echo "7 Result: " . checkConcatenatedSum(9, 0) . "<br />"; //1
?>