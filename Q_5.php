<?php

// Given associative array
$ages = array(
    "Sara" => 31,
    "John" => 41,
    "Walaa" => 39,
    "Ramy" => 40
);

//  Ascending order sort by value
asort($ages);
echo "Ascending order sort by value:<br>";
foreach ($ages as $name => $age) {
    echo "$name: $age<br>";
}

echo "<br>";

//  Ascending order sort by Key
ksort($ages);
echo " Ascending order sort by Key:<br>";
foreach ($ages as $name => $age) {
    echo "$name: $age<br>";
}

echo "<br>";

//  Descending order sorting by Value
arsort($ages);
echo " Descending order sorting by Value:<br>";
foreach ($ages as $name => $age) {
    echo "$name: $age<br>";
}

echo "<br>";

//  Descending order sorting by Key
krsort($ages);
echo " Descending order sorting by Key:<br>";
foreach ($ages as $name => $age) {
    echo "$name: $age<br>";
}