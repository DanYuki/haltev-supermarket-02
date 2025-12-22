<?php
require __DIR__ . "/../helper.php";

// Get dulu id_produk dari variabel $_GET
$id_produk = $_GET['id_produk'];

delete_produk($id_produk);
