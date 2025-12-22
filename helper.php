<?php
require_once __DIR__ . "/config.php";
session_start();


$baseURL = "http://localhost/supermarket-02";

function store_produk(string $nama_produk, int $harga, int $stok, string $kategori) {
    global $conn;
    global $baseURL;

    // Jalankan logic database disini
    $stmt = $conn->prepare("INSERT INTO produk (nama_produk, harga, stok, kategori) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nama_produk, $harga, $stok, $kategori]);

    // Optional: Berikan pesan berhasil ke halaman depan
    $_SESSION['success'] = "Input produk berhasil!";

    // Jika tidak ada masalah, maka kembalikan user ke belakang/halam indeks produk
    header("Location:" . $baseURL . "/produk/index.php");
    exit();
}

function store_staff(string $nama_staff, int $gaji_pokok, string $posisi, string $tgl_mulai)
{
    global $conn;
    global $baseURL;

    // Jalankan logic database disini
    $stmt = $conn->prepare("INSERT INTO staff (nama_staff, gaji_pokok, posisi, tgl_mulai) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nama_staff, $gaji_pokok, $posisi, $tgl_mulai]);

    // Optional: Berikan pesan berhasil ke halaman depan
    $_SESSION['success'] = "Input staff berhasil!";

    // Jika tidak ada masalah, maka kembalikan user ke belakang/halam indeks produk
    header("Location:" . $baseURL . "/staff/index.php");
    exit();
}

function store_order(int $id_produk, int $quantity, string $tanggal)
{
    global $conn;
    global $baseURL;

    // Jalankan logic database disini
    $stmt = $conn->prepare("INSERT INTO `order` (id_produk, quantity, tanggal) VALUES (?, ?, ?)");
    $stmt->execute([$id_produk, $quantity, $tanggal]);

    // Optional: Berikan pesan berhasil ke halaman depan
    $_SESSION['success'] = "Input order berhasil!";

    // Jika tidak ada masalah, maka kembalikan user ke belakang/halam indeks produk
    header("Location:" . $baseURL . "/order/index.php");
    exit();
}