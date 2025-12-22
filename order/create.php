<?php
require_once __DIR__ . "/../layout/header.php";
require_once __DIR__ . "/../helper.php";

$produk = $conn->query("SELECT * FROM produk")->fetch_all(MYSQLI_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil semua data dari form
    $id_produk = $_POST['id_produk'];
    $quantity = $_POST['quantity'];
    $tanggal = $_POST['tanggal'];

    store_order($id_produk, $quantity, $tanggal);
    exit();
}

?>

<form action="#" method="post">
    <h2 class="mb-2">Tambah order Baru</h2>
    <div>
        <label for="id_produk" class="form-label">Nama Produk</label>
        <select name="id_produk" class="form-select">
            <option selected disabled>--- Pilih Produk ---</option>
            <?php
            foreach ($produk as $p):
            ?>
                <option value="<?= $p['id_produk'] ?>"><?= $p['nama_produk']; ?></option>
            <?php
            endforeach;
            ?>
        </select>
    </div>

    <div>
        <label for="quantity" class="form-label">Quantity</label>
        <input type="text" name="quantity" class="form-control" placeholder="0">
    </div>

    <div>
        <label for="tanggal" class="form-label">Tanggal Pesanan</label>
        <input type="date" name="tanggal" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary mt-3">Save</button>
</form>