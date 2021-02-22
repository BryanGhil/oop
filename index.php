<?php

require 'animal.php';
$sheep = new Animal("shaun","2","false");

echo $sheep->name; // "shaun"
echo '<br>';
echo $sheep->legs; // 2
echo '<br>';
echo $sheep->cold_blooded; // false
echo '<br>';
// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
// index.php
$sungokong = new Ape("kera sakti");
$sungokong->yell();// "Auooo"
echo '<br>';

$kodok = new Frog("buduk");
$kodok->jump(); // "hop hop"
echo '<br>';
?>
