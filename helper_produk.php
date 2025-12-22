<?php
require_once __DIR__ . "/config.php";


$baseURL = "http://localhost/supermarket-02";


function store_produk(string $nama_produk, int $harga, int $stok, string $kategori)
{
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
function update_produk(string $nama_produk, int $harga, int $stok, string $kategori, int $id_produk)
{
    global $conn;
    global $baseURL;

    // Jalankan logic database disini
    $stmt = $conn->prepare("UPDATE produk SET nama_produk=?, harga=?, stok=?, kategori=? WHERE id_produk=?");
    $stmt->execute([$nama_produk, $harga, $stok, $kategori, $id_produk]);

    // Optional: Berikan pesan berhasil ke halaman depan
    $_SESSION['success'] = "Edit data produk berhasil!";

    // Jika tidak ada masalah, maka kembalikan user ke belakang/halam indeks produk
    header("Location:" . $baseURL . "/produk/index.php");
    exit();
}

function delete_produk(int $id_produk)
{
    global $conn;
    global $baseURL;

    $stmt = $conn->prepare("DELETE FROM produk WHERE id_produk = ?");
    $stmt->execute([$id_produk]);

    // Optional: Berikan pesan berhasil ke halaman depan
    $_SESSION['success'] = "Delete data produk berhasil!";

    // Jika tidak ada masalah, maka kembalikan user ke belakang/halaman indeks produk
    header("Location:" . $baseURL . "/produk/index.php");
    exit();
}