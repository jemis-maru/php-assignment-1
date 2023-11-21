<?php

$a = 100;
$b = 8;

// Arithmetic Operators
$add = $a + $b;
echo "Addition: $add <br />";

$sub = $a - $b;
echo "Subtraction: $sub <br />";

$multiply = $a * $b;
echo "Multiplication: $multiply <br />";

$divide = $a / $b;
echo "Division: $divide <br />";

$modulus = $a % $b;
echo "Modulus: $modulus <br />";

echo "<hr />";

// Assignment Operators
$c = 50;

$d = $c;
echo "Normal Assignment: $d <br />";

$c += 5;
echo "Assignment with addition: $c <br />";

$c -= 5;
echo "Assignment with Subtraction: $c <br />";

$c *= 5;
echo "Assignment with Multiplication: $c <br />";

$c /= 5;
echo "Assignment with Division: $c <br />";

$c %= 3;
echo "Assignment with Modulus: $c <br />";

echo "<hr />";

// Comparison Operators

$e = 6;

$isEqual = $e == '6' ? "true" : "false";
echo "Equal: $isEqual <br />";

$isNotEqual = $e != 7 ? "true" : "false";
echo "Not equal: $isNotEqual <br />";

$equalWithType = $e === '6' ? "true" : "false";
echo "Equal with type: $equalWithType <br />";

$notEqualWithType = $e !== 6 ? "true" : "false";
echo "Not equal with type: $notEqualWithType <br />";

$greater = $e > 5 ? "true" : "false";
echo "Greater than: $greater <br />";

$less = $e < 6 ? "true" : "false";
echo "Less than: $less <br />";

$greater = $e >= 6 ? "true" : "false";
echo "Greater than or equal to: $greater <br />";

$less = $e <= 6 ? "true" : "false";
echo "Less than or equal to: $less <br />";

echo "<hr />";

// Logical Operators

$andCondition = (true && false) ? "true" : "false";
echo "Logical AND: $andCondition <br />";

$orCondition = (true || false) ? "true" : "false";
echo "Logical OR: $orCondition <br />";

$notCondition = !false ? "true" : "false";
echo "Logical NOT: $notCondition <br />";

?>