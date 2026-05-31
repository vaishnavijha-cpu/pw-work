<?php

$string = "Hello PHP";
$integer = 100;
$float = 10.5;
$boolean = true;
$array = array("Apple", "Banana", "Mango");
$nullVar = null;

echo "<h2>PHP Data Types</h2>";

echo "String: " . $string . "<br>";
echo "Integer: " . $integer . "<br>";
echo "Float: " . $float . "<br>";
echo "Boolean: " . ($boolean ? "True" : "False") . "<br>";

echo "Array: ";
print_r($array);
echo "<br>";

echo "NULL Variable: ";
var_dump($nullVar);

?>