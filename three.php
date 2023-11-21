<?php

// 1. Create array
$arr = array(2, 1, 3);
print_r($arr);

// 2. length of array
print("<br /> Length: " . count($arr));

// 3. search
print("<br /> Key of 3 is " . array_search(3, $arr));

// 4. Add element at beginning
array_unshift($arr, 0);
print("<br /> New array after adding 0 at beginning: ");
print_r($arr);

// 5. Remove element at beginning
array_shift($arr);
print("<br /> New array after removing 0 from beginning: ");
print_r($arr);

// 6. Add element at end
array_push($arr, 4);
print("<br /> New array after adding 4 at end: ");
print_r($arr);

// 7. Remove element at end
array_pop($arr);
print("<br /> New array after removing 4 from end: ");
print_r($arr);

// 8. Reverse elements of array
$reverseElement = array_reverse($arr);
print("<br /> Reverse element of array: ");
print_r($reverseElement);

// 9. Sort array in ascending order
asort($arr);
print("<br /> Sorted array(ascending): ");
print_r($arr);

// 10. Sort array in descending order
arsort($arr);
print("<br /> Sorted array(descending): ");
print_r($arr);

?>