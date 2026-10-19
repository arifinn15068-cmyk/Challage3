<?php
$angka = 27;

// Menggunakan operator modulo (%) dan ternary (? :)
$hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";

echo "<h3>2. Genap atau Ganjil</h3>";
echo "Angka $angka adalah bilangan <strong>$hasil</strong>.";
?>