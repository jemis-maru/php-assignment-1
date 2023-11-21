<?php

// Global and local variables

$description = "I am global";
$city = "Ahmedabad";

function testFunction() {
    $description = "I am local";
    global $city;

    $city = "Surat";

    echo "Local description: " . $description . "<br />";
    echo "Local city: " . $city . "<br />";
}

testFunction();

echo "<hr />";
echo "Global description: " . $description . "<br />";
echo "Global city: " . $city . "<br />";

echo "<br /><hr /><br />";

// static variables

function countStatic() {
    static $count = 0;

    $count++;

    echo "countStatic function called $count times.<br>";
}

for($i = 0; $i < 3; $i++) {
    countStatic();
}

echo "<hr />";

function countWithoutStatic() {
    $count = 0;

    $count++;

    echo "countWithoutStatic function called $count times.<br>";
}

for($i = 0; $i < 3; $i++) {
    countWithoutStatic();
}

?>