<?php
// Processing Layer: Repositori fungsi/helper bisnis

/**
 * Menghitung total nilai seluruh aset stok di gudang (Harga x Stok)
 */
function hitungTotalNilaiStok($katalog) {
    $totalNilai = 0;
    foreach ($katalog as $produk) {
        $totalNilai += ($produk['harga'] * $produk['stok']);
    }
    return $totalNilai;
}

/**
 * Mengecek apakah stok produk berada dalam kondisi kritis (< 3)
 */
function isStokKritis($stok) {
    return $stok < 3;
}

/**
 * Format angka ke dalam mata uang Rupiah
 */
function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}
?>