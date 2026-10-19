<?php
$namaBarang = "Beras";
$harga = 70000;
$jumlah = 3;

$total = $harga * $jumlah;

echo "Nama Barang: $namaBarang <br>";
echo "Total Harga: Rp " . number_format($total, 0, ',', '.');
?>