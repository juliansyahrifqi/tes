<?php
    $host = "localhost";
    $username = "root";
    $pwd = "";
    $db = "gitar_db";

    $koneksi = new mysqli($host, $username, $pwd, $db);
    if($koneksi -> connect_errno) {
        echo "Koneksi ke database Gagal!". $koneksi->connect_errno;
    } 
?>