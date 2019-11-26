<?php 
/* 

<--------- DEFINISI ARRAY --------->

Array adalah variabel yang dapat memiliki banyak nilai.
Definisi lain array adalah pasangan antara key dan value , key nya adalah index yang dimulai dari 0

<--------- ELEMEN PADA ARRAY -------->
elemen pada array boleh memiliki tipe data yang berbeda.
*/ 

// cara membuat array

// cara lama

$hari = array("Senin", "Selasa", "Rabu");

// cara baru 

$bulan = ["Januari","Februari", "Maret", "April"];

$arr1 = [1,"String",true];

// cara menampilkan array

// var_dump / print_r 
var_dump ($hari);
echo '<br>';
print_r($bulan);
echo "<br>";

// menampilkan 1 elemen pada array 
echo $hari[2];
echo "<br>";
echo $bulan[1];
echo "<br><br>";

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
echo "<br>";
var_dump($hari);


?>