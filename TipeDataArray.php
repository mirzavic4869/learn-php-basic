<?php

$values = array(1, 2, 3, 4, 5);
var_dump($values);

$names = ["Mirzam", "Eko", "Budi"];
var_dump($names);
// Cek Index ke berapa
var_dump($names[1]);
// Mengubah data array
$names[0] = "Ravi";
var_dump($names);
// Menghapus data array
unset($names[2]);
var_dump($names);

$names[] = "Joni";
var_dump($names);
