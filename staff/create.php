<?php
require_once __DIR__ . "/../layout/header.php";
require_once __DIR__ . "/../helper.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil semua data dari form
    $nama_staff = $_POST['nama_staff'];
    $gaji_pokok = $_POST['gaji_pokok'];
    $posisi = $_POST['posisi'];
    $tgl_mulai = $_POST['tgl_mulai'];

    store_staff($nama_staff, $gaji_pokok, $posisi, $tgl_mulai);
    exit();
}

?>

<form action="#" method="post">
    <h2 class="mb-2">Tambah Staff Baru</h2>
    <div>
        <label for="nama_staff" class="form-label">Nama Staff</label>
        <input type="text" name="nama_staff" class="form-control" placeholder="Masukkan nama produk...">
    </div>

    <div>
        <label for="gaji_pokok" class="form-label">Gaji Pokok</label>
        <input type="text" name="gaji_pokok" class="form-control" placeholder="Rp.xxxx">
    </div>

    <div>
        <label for="posisi" class="form-label">Posisi</label>
        <input type="text" name="posisi" class="form-control" placeholder="0">
    </div>

    <div>
        <label for="tgl_mulai" class="form-label">Tanggal Mulai</label>
        <input type="date" name="tgl_mulai" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary mt-3">Save</button>
</form>