<?php
    require("configdb.php");

    $nama_gitar = $_POST['nama-gitar'];
    $pickup = $_POST['pickup'];
    $buatan = $_POST['buatan'];
    $harga = $_POST['harga'];

    $gambar = $_FILES['file']['name'];

    move_uploaded_file($_FILES['file']['tmp_name'], 'img/'.$gambar);

    $result = mysqli_query($koneksi, "INSERT INTO `gitar`(`id_gitar`, `nama_gitar`, `pick_up`, `gambar`, `buatan`, `harga`) 
                                     VALUES (NULL, '$nama_gitar' , '$pickup' , '$gambar', '$buatan' , '$harga');
                        ");

    if($result) {
        header("location:index.php?pesan=sukses");
        exit;
    } else {
        header("location:index.php?pesan=gagal");
    }

?>