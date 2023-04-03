<?php

$name = "Mirzam";
$name = null;

$age = null;

echo "Name :";
echo "\n";
echo "Age :";
echo $name;
echo "\n";

echo $age;

// Mengecek variabel null atau tidak

var_dump(is_null($name));

// Menghilangkan variabel

$contoh = "Ravi";
unset($contoh);

// Mengecek null atau tidak lebih aman menggunakan isset
var_dump(isset($contoh));
