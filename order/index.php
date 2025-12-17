<?php
require_once __DIR__ . "/../layout/header.php";
require_once __DIR__ . "/../config.php";

// Get data dari table produk dalam database

$orders = $conn->query("SELECT produk.nama_produk, produk.harga, 
    (produk.harga * order.quantity) as total, order.tanggal, order.quantity
    FROM produk INNER JOIN `order` 
    ON produk.id_produk = order.id_produk")->fetch_all(MYSQLI_ASSOC);
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
    Tambah Order
</a>

<!-- Tabel bisa diambil dari halaman bootstrap -->
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $i = 0;
        foreach ($orders as $key => $value):
            $i++;
        ?>

            <tr>
                <th scope="row"><?= $i; ?></th>
                <td><?= $value['nama_produk'] ?></td>
                <td><?= $value['harga'] ?></td>
                <td><?= $value['quantity'] ?></td>
                <td><?= $value['total'] ?></td>
                <td><?= $value['tanggal'] ?></td>
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