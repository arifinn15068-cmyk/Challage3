<?php
$jenis = "Mobil"; // Pilihan: "Motor" atau "Mobil"
$lamaJam = 4;     // Lama parkir dalam jam

$jenisLower = strtolower($jenis);
$tarif = 0;

if ($jenisLower == "motor") {
    $tarif = 2000;
    if ($lamaJam > 2) {
        $tarif += ($lamaJam - 2) * 1000;
    }
} elseif ($jenisLower == "mobil") {
    $tarif = 5000;
    if ($lamaJam > 2) {
        $tarif += ($lamaJam - 2) * 3000;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarif Parkir</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 flex items-center justify-center min-h-screen p-4">

    <div class="bg-white rounded-xl shadow-lg p-6 max-w-sm w-full border border-slate-200">
        <div class="flex items-center justify-between border-b pb-3 mb-4">
            <h2 class="text-xl font-bold text-slate-800">Tiket Parkir</h2>
            <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-semibold rounded-full uppercase">
                <?= htmlspecialchars($jenis) ?>
            </span>
        </div>
        
        <div class="space-y-3 text-sm text-slate-600">
            <div class="flex justify-between">
                <span>Jenis Kendaraan:</span>
                <span class="font-medium text-slate-800"><?= htmlspecialchars($jenis) ?></span>
            </div>
            <div class="flex justify-between">
                <span>Durasi Parkir:</span>
                <span class="font-medium text-slate-800"><?= $lamaJam ?> Jam</span>
            </div>
            <div class="border-t pt-3 flex justify-between items-center text-base">
                <span class="font-semibold text-slate-800">Total Tarif:</span>
                <span class="text-lg font-bold text-emerald-600">
                    Rp <?= number_format($tarif, 0, ',', '.') ?>
                </span>
            </div>
        </div>
    </div>

</body>
</html>