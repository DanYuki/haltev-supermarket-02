<?php
// Section ini bisa diambil dari halaman w3school terkait "php mysql connect to database"
// Config database
$servername = "localhost";
$username = "root";
$password = "root";
$database = "supermarket_sql_basic";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// End section
