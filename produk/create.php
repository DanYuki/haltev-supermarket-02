<?php
require_once __DIR__ . "/../layout/header.php";
require_once __DIR__ . "/../helper_produk.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil semua data dari form
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];

    store_produk($nama_produk, $harga, $stok, $kategori);
    exit();
}

?>

<form action="#" method="post">
    <h2 class="mb-2">Tambah Produk Baru</h2>
    <div>
        <label for="nama_produk" class="form-label">Nama Produk</label>
        <input type="text" name="nama_produk" class="form-control" placeholder="Masukkan nama produk...">
    </div>

    <div>
        <label for="harga" class="form-label">Harga Produk</label>
        <input type="text" name="harga" class="form-control" placeholder="Rp.xxxx">
    </div>

    <div>
        <label for="stok" class="form-label">Stok Produk</label>
        <input type="text" name="stok" class="form-control" placeholder="0">
    </div>

    <div>
        <label for="kategori" class="form-label">Kategori</label>
        <select name="kategori" class="form-select">
            <option disabled selected>--- Pilih Kategori ---</option>
            <option value="buah">Buah</option>
            <option value="sembako">Sembako</option>
            <option value="sayur">Sayur</option>
            <option value="lainnya">Lainnya</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Save</button>
</form>