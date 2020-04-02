<?php
    require("configdb.php");

    $id_gitar = $_GET['id_gitar'];

    $query = mysqli_query($koneksi, "DELETE FROM gitar WHERE id_gitar= $id_gitar;");

    if($query) {
        header("location=index.php?pesan=berhasil");
        exit;
    } else {
        header("location=index.php?pesan=gagal");
    }
?>