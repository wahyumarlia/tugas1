<?php
$json_data=file_get_contents("pekerja2.json");
$obj = json_decode($json_data);
echo "Nim : "; echo $obj->nim;
echo "<br>";
echo "Nama : ";echo $obj->nama;
echo "<br>";
echo "alamat: ";echo $obj->alamat;
echo "<br>";
echo "No_hp: ";echo $obj->no_hp;
echo "<br>";
echo "Mata kuliah 1: ";echo $obj->makul[0];
echo "<br>";
echo "Mata kuliah 2: ";echo $obj->makul[1];
echo "<br>";
echo "Mata kuliah 3: ";echo $obj->makul[2];


?>