<?php
require_once __DIR__ . "/config.php";

$baseURL = "http://localhost/supermarket-02";

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

function update_staff(string $nama_staff, int $gaji_pokok, string $posisi, string $tgl_mulai, int $id_staff)
{
    global $conn;
    global $baseURL;

    // Jalankan logic database disini
    $stmt = $conn->prepare("UPDATE staff SET nama_staff=?, gaji_pokok=?, posisi=?, tgl_mulai=? WHERE id_staff = ?");
    $stmt->execute([$nama_staff, $gaji_pokok, $posisi, $tgl_mulai, $id_staff]);

    // Optional: Berikan pesan berhasil ke halaman depan
    $_SESSION['success'] = "Edit data staff berhasil!";

    // Jika tidak ada masalah, maka kembalikan user ke belakang/halam indeks produk
    header("Location:" . $baseURL . "/staff/index.php");
    exit();
}

function delete_staff(int $id_staff)
{
    global $conn;
    global $baseURL;

    $stmt = $conn->prepare("DELETE FROM staff WHERE id_staff = ?");
    $stmt->execute([$id_staff]);

    // Optional: Berikan pesan berhasil ke halaman depan
    $_SESSION['success'] = "Delete data staff berhasil!";

    // Jika tidak ada masalah, maka kembalikan user ke belakang/halaman indeks produk
    header("Location:" . $baseURL . "/staff/index.php");
    exit();
}