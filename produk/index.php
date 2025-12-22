<?php
require_once __DIR__ . "/../layout/header.php";
require_once __DIR__ . "/../config.php";

// Get data dari table produk dalam database
$produk = $conn->query("SELECT * FROM produk ORDER BY id_produk DESC LIMIT 20")->fetch_all(MYSQLI_ASSOC);

?>

<?php
// Jika terdapat pesan sukses setelah input data, maka:
if (isset($_SESSION['success'])):
?>
    <div class="alert alert-success"><?= $_SESSION['success']; ?></div>

<?php
    // Setelah selesai menampilkan alert, hapus session success tadi
    unset($_SESSION['success']);
endif;
?>

<h2>Produk</h2>
<a href="./create.php" class="btn btn-primary">
    Tambah Produk
</a>

<!-- Tabel bisa diambil dari halaman bootstrap -->
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
            <th scope="col">Kategori</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($produk as $key => $value): ?>
            <tr>
                <th scope="row"><?= $value['id_produk'] ?></th>
                <td><?= $value['nama_produk'] ?></td>
                <td><?= $value['harga'] ?></td>
                <td><?= $value['stok'] ?></td>
                <td><?= $value['kategori'] ?></td>
                <td>
                    <button class="btn btn-warning">Edit</button>
                    <button class="btn btn-danger">Hapus</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
require_once __DIR__ . "/../layout/footer.php";
?>