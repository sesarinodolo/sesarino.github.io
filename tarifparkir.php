<?php
$jenis = "mobil";
$lamaJam = 5;

if ($jenis == "mobil") {
    $tarifAwal = 5000;
    $tarifLanjut = 1000;
} else {
    $tarifAwal = 5000;
    $tarifLanjut = 3000;
}

$total = $tarifAwal;

if ($lamaJam > 2) {
    $total = $total + ($lamaJam - 2) * $tarifLanjut;
}

echo "Jenis Kendaraan: $jenis <br>";
echo "Lama Parkir: $lamaJam jam <br>";
echo "Total Tarif: Rp " . number_format($total, 0, ',', '.');
?>