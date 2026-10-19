<?php
$berat = 68;     // dalam kg
$tinggi = 1.70;  // dalam meter

$bmi = $berat / ($tinggi * $tinggi);
$bmiFormat = number_format($bmi, 1, ',', '.');

if ($bmi < 18.5) {
    $kategori = "Kurus";
} elseif ($bmi < 25) {
    $kategori = "Normal";
} elseif ($bmi < 30) {
    $kategori = "Gemuk";
} else {
    $kategori = "Obesitas";
}

echo "<h3>5. Indeks Massa Tubuh (BMI)</h3>";
echo "Berat: $berat kg | Tinggi: $tinggi m <br>";
echo "BMI Anda: <strong>$bmiFormat</strong> ($kategori)";
?>