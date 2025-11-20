<?php
    $host     = "localhost";
    $username = "root";
    $password = "";
    $database = "digiperpus";

    // Buat koneksi
    $config = new mysqli($host, $username, $password, $database);

    // Cek koneksi
    if ($config->connect_error) {
        die("Koneksi gagal: " . $config->connect_error);
    }
?>