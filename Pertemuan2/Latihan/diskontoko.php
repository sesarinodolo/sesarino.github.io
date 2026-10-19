<?php
$total = 500000;

if ($total >= 500000) {
    $diskon = $total * 15 / 100;
} elseif ($total >= 200000) {
    $diskon = $total * 10 / 100;
} else {
    $diskon = 0;
}

$bayar = $total - $diskon;

echo "Total Awal: Rp " . number_format($total, 0, ',', '.') . "<br>";
echo "Diskon: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Total Bayar: Rp " . number_format($bayar, 0, ',', '.');
?>