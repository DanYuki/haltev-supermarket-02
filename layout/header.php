<?php
$baseURL = "http://localhost/supermarket-02";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <div class="container p-5 border my-5">
        <div class="mb-3">
            <h1>Ini aplikasi Supermarket</h1>

            <div class="mt-3">
                <a href="<?= $baseURL ?>/produk/index.php" class="btn btn-primary">Halaman Produk</a>
                <a href="<?= $baseURL ?>/staff/index.php" class="btn btn-warning">Halaman Staff</a>
                <a href="<?= $baseURL ?>/order/index.php" class="btn btn-success">Halaman Order</a>
            </div>
        </div>
    </div>

    <main class="container p-5 border my-2">


        <!-- Content -->