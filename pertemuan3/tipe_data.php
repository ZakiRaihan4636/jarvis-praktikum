<?php
//String
$nama = "Zaki Raihan";

echo "Hello nama saya $nama";

echo "<br>";

echo str_replace("Zaki", "Ryurii", $nama);

echo "<br> <br>";

//Integer

$umur = 21;

echo $umur + 3 . "<br>";

var_dump($umur);

//float

$nilai = 3.92;

var_dump($nilai);

//boolean

$is_student = true;

var_dump($is_student);

// Array

$mahasiswa = ["Zaki", 20, 3.70, false];

var_dump($mahasiswa);

echo "Umur saya $mahasiswa[1]";

echo "<br> <br>";

//array assosiatif

$mahasiswa2 = [
  "nama" => "Zaki",
  "umur" => 20,
  "nilai" => 3.70,
  "is_active" => true
];

var_dump($mahasiswa2);
echo "<br>";
echo 'Hallo, Saya'.$mahasiswa2["nama"];