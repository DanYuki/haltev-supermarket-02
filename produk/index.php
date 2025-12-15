<?php
require_once __DIR__ . "/../layout/header.php";
require_once __DIR__ . "/../config.php";

// Get data dari table produk dalam database
$produk = $conn->query("SELECT * FROM produk")->fetch_all(MYSQLI_ASSOC);

?>

<h1>Ini halaman produk</h1>

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