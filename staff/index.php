<?php
require_once __DIR__ . "/../layout/header.php";
require_once __DIR__ . "/../config.php";

// Get data dari table produk dalam database
$staff = $conn->query("SELECT * FROM staff")->fetch_all(MYSQLI_ASSOC);

?>

<h1>Ini halaman Staff</h1>

<!-- Tabel bisa diambil dari halaman bootstrap -->
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Staff</th>
            <th scope="col">Gaji Pokok</th>
            <th scope="col">Posisi</th>
            <th scope="col">Tanggal Mulai</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($staff as $key => $value): ?>
            <tr>
                <th scope="row"><?= $value['id_staff'] ?></th>
                <td><?= $value['nama_staff'] ?></td>
                <td><?= $value['gaji_pokok'] ?></td>
                <td><?= $value['posisi'] ?></td>
                <td><?= $value['tgl_mulai'] ?></td>
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