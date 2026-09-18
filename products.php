<?php
// Data Layer: Menampung data komoditas produk kosmetik
$katalog = [
    [
        "id" => "KOS-001",
        "nama" => "Serum Vitamin C Brightening",
        "kategori" => "Skin Care",
        "harga" => 135000,
        "stok" => 8,
        "deskripsi" => "Serum pencerah wajah dengan ekstrak citrus."
    ],
    [
        "id" => "KOS-002",
        "nama" => "Matte Lip Cream Red Velvet",
        "kategori" => "Make Up",
        "harga" => 75000,
        "stok" => 2, // Stok Kritis (< 3)
        "deskripsi" => "Lip cream dengan hasil akhir matte dan tahan lama."
    ],
    [
        "id" => "KOS-003",
        "nama" => "Sunscreen SPF 50 PA++++",
        "kategori" => "Skin Care",
        "harga" => 95000,
        "stok" => 1, // Stok Kritis (< 3)
        "deskripsi" => "Tabir surya ringan tanpa whitecast."
    ],
    [
        "id" => "KOS-004",
        "nama" => "Micellar Water Cleansing 250ml",
        "kategori" => "Cleanser",
        "harga" => 55000,
        "stok" => 12,
        "deskripsi" => "Pembersih make up lembut untuk kulit sensitif."
    ],
    [
        "id" => "KOS-005",
        "nama" => "Hair Serum Argan Oil",
        "kategori" => "Hair Care",
        "harga" => 110000,
        "stok" => 0, // Stok Kritis (< 3) / Habis
        "deskripsi" => "Vitamin rambut untuk mengatasi rambut kering dan bercabang."
    ]
];
?>