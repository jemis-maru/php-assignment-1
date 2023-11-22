<?php

// 1. echo

echo "<h3>Reserve keywords</h3>";

// 2. Break

echo "Break: ";
for ($i = 0; $i < 5; $i++) {
  if ($i == 3) {
    break;
  }
  echo $i;
}

echo "<hr />";

// 3. Continue

for ($j = 0; $j < 5; $j++) {
  if ($j == 2) {
    continue;
  }
  echo $j;
}

echo "<hr />";

// 4. Const

const PI = 3.14;
echo "Const: " . PI;

echo "<hr />";

// 5. Return

function sum($a, $b) {
  return $a + $b;
}
echo "Return: " . sum(5, 10);

echo "<hr />";

// 6. and keyword

$result = (true and false) ? "true" : "false";
echo "and keyword: " . $result;

echo "<hr />";

// 7. or keyword

$result = (true or false) ? "true" : "false";
echo "or keyword: " . $result;

echo "<hr />";

// 8. print

print "Print";

echo "<hr />";

// 9. list

$arr = [1, 2, 3];
list($a, $b, $c) = $arr;
echo "List of: a: $a, b: $b, c: $c";

echo "<hr />";

// 10. eval

$code = 'echo "Using eval: Hello, World!";';
eval($code);

echo "<hr />";
?>