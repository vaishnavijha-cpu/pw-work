<?php

echo "<h2>For Loop</h2>";
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}

echo "<h2>While Loop</h2>";
$j = 1;
while ($j <= 5) {
    echo $j . "<br>";
    $j++;
}

echo "<h2>Do-While Loop</h2>";
$k = 1;
do {
    echo $k . "<br>";
    $k++;
} while ($k <= 5);

echo "<h2>Foreach Loop</h2>";
$roles = array("Student", "Teacher", "Admin");

foreach ($roles as $role) {
    echo $role . "<br>";
}

?>