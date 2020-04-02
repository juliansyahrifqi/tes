<?php
    require("configdb.php");

    $id_gitar = $_GET['id_gitar'];
    $nama_gitar = $_POST['nama-gitar'];
    $pickup = $_POST['pickup'];
    $buatan = $_POST['buatan'];
    $harga = $_POST['harga'];

    $gambar = $_FILES['file']['name'];

    move_uploaded_file($_FILES['file']['tmp_name'], 'img/'.$gambar);

    $result = mysqli_query($koneksi, "UPDATE gitar SET nama_gitar= '$nama_gitar',
                        `pick_up`= '$pickup',`gambar`= '$gambar', `buatan`= '$buatan', `harga`= '$harga' 
                        WHERE id_gitar = $id_gitar;");

    if($result) {
        header("location:index.php?pesan=berhasil");
    } else {
        header("location:index.php?pesan=gagal");
    }
?>  
