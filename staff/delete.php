<?php
require __DIR__ . "/../helper_staff.php";

// Get dulu id_produk dari variabel $_GET
$id_staff = $_GET['id_staff'];

delete_produk($id_staff);
