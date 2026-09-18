<?php
// Modular Programming: Memuat file data dan fungsi utama
require_once 'products.php';
require_once 'functions.php';

// Hitung total nilai stok aset gudang
$totalAset = hitungTotalNilaiStok($katalog);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmetics Inventory System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #faf4f6;
        }
        h1 {
            color: #882d4b;
        }
        .card {
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.08);
            border-left: 5px solid #d63384;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.08);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px;
            border: 1px solid #f1e4e8;
            text-align: left;
        }
        th {
            background-color: #882d4b;
            color: white;
        }
        /* Penanda baris jika stok kritis (< 3) */
        .stok-kritis {
            background-color: #ffe6eb;
            color: #842029;
            font-weight: bold;
        }
        .badge-kritis {
            background-color: #dc3545;
            color: white;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 12px;
        }
        .badge-aman {
            background-color: #198754;
            color: white;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 12px;
        }
    </style>
</head>
<body>

    <h1>Cosmetics & Beauty Inventory System</h1>

    <div class="card">
        <h3>Ringkasan Stok Beauty Store</h3>
        <p><strong>Total Variasi Produk:</strong> <?= count($katalog); ?> items</p>
        <p><strong>Total Nilai Aset Gudang:</strong> <?= formatRupiah($totalAset); ?></p>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Status Stok</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($katalog as $produk): ?>
                <?php 
                    // Logika conditional untuk menandai stok kritis (< 3)
                    $kritis = isStokKritis($produk['stok']); 
                    $rowClass = $kritis ? 'stok-kritis' : '';
                ?>
                <tr class="<?= $rowClass; ?>">
                    <td><?= $produk['id']; ?></td>
                    <td><?= $produk['nama']; ?></td>
                    <td><?= $produk['kategori']; ?></td>
                    <td><?= formatRupiah($produk['harga']); ?></td>
                    <td><?= $produk['stok']; ?></td>
                    <td>
                        <?php if ($kritis): ?>
                            <span class="badge-kritis">Kritis / Menipis</span>
                        <?php else: ?>
                            <span class="badge-aman">Aman</span>
                        <?php endif; ?>
                    </td>
                    <td><?= $produk['deskripsi']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>