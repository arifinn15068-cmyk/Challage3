<?php
$namaBarang = "Buku Tulis";
$harga = 18000;
$jumlah = 3;

$totalHarga = $harga * $jumlah;

echo "<h3>1. Kalkulator Belanja</h3>";
echo "Nama Barang: $namaBarang <br>";
echo "Harga Satuan: Rp " . number_format($harga, 0, ',', '.') . "<br>";
echo "Jumlah: $jumlah <br>";
echo "<strong>Total Harga: Rp " . number_format($totalHarga, 0, ',', '.') . "</strong>";
?>