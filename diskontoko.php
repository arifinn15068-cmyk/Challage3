<?php
$totalAwal = 550000;

if ($totalAwal >= 500000) {
    $persenDiskon = 0.15; // 15%
} elseif ($totalAwal >= 200000) {
    $persenDiskon = 0.10; // 10%
} else {
    $persenDiskon = 0;    // Tidak ada diskon
}

$besarDiskon = $totalAwal * $persenDiskon;
$totalBayar = $totalAwal - $besarDiskon;

echo "<h3>3. Diskon Toko</h3>";
echo "Total Awal: Rp " . number_format($totalAwal, 0, ',', '.') . "<br>";
echo "Besar Diskon: Rp " . number_format($besarDiskon, 0, ',', '.') . "<br>";
echo "<strong>Total Bayar: Rp " . number_format($totalBayar, 0, ',', '.') . "</strong>";
?>