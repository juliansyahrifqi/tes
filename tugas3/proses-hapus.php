<?php
    require("configdb.php");

    $id_gitar = $_GET['id_gitar'];

    $query = "DELETE FROM gitar WHERE id_gitar = $id_gitar";

    $result = mysqli_query($koneksi, $query);

    if($result) {
        header("location:index.php?pesan=berhasil");
        exit;
    } else {
        header("location:index.php?pesan=gagal");
    }
?>