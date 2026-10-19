<?php
$nomorHari = 3;

$namaHari = match ($nomorHari) {
    1 => "Senin",
    2 => "Selasa",
    3 => "Rabu",
    4 => "Kamis",
    5 => "Jumat",
    6 => "Sabtu",
    7 => "Minggu",
    default => "Nomor hari tidak valid"
};

echo "<h3>4. Nama Hari</h3>";
echo "Nomor Hari ($nomorHari): <strong>$namaHari</strong>";
?>