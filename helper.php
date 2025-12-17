<?php
require_once __DIR__ . "/config.php";
session_start();


$baseURL = "http://localhost/supermarket-02";

function store_produk(string $id_produk, int $quantity, int $tanggal, string $kategori) {
    global $conn;
    global $baseURL;

    // Jalankan logic database disini
    $stmt = $conn->prepare("INSERT INTO produk (id_produk, quantity, tanggal, kategori) VALUES (?, ?, ?, ?)");
    $stmt->execute([$id_produk, $quantity, $tanggal, $kategori]);

    // Optional: Berikan pesan berhasil ke halaman depan
    $_SESSION['success'] = "Input produk berhasil!";

    // Jika tidak ada masalah, maka kembalikan user ke belakang/halam indeks produk
    header("Location:" . $baseURL . "/produk/index.php");
    exit();
}

function store_staff(string $id_produk, int $quantity, string $tanggal, string $tgl_mulai)
{
    global $conn;
    global $baseURL;

    // Jalankan logic database disini
    $stmt = $conn->prepare("INSERT INTO staff (id_produk, quantity, tanggal, ) VALUES (?, ?, ?, ?)");
    $stmt->execute([$id_produk, $quantity, $tanggal, $tgl_mulai]);

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
    $stmt = $conn->prepare("INSERT INTO order (id_produk, quantity, tanggal) VALUES (?, ?, ?)");
    $stmt->execute([$id_produk, $quantity, $tanggal]);

    // Optional: Berikan pesan berhasil ke halaman depan
    $_SESSION['success'] = "Input order berhasil!";

    // Jika tidak ada masalah, maka kembalikan user ke belakang/halam indeks produk
    header("Location:" . $baseURL . "/order/index.php");
    exit();
}