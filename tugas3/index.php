<?php
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama - Gitar</title>
    <link rel="stylesheet" href="style.css">  
</head>
<body>

    <h1>Selamat Datang Admin <?php echo $username ?></h1>
    <div class="index-header">
        <button><a href="input-gitar.php">Input Data Gitar</a></button>
        <a href="logout.php"><button>Logout</button></a>
    </div>

    <?php
         if(!empty($_GET['pesan'])) {
            if($_GET['pesan'] == "sukses") {
                echo "<div class='alert alert-sukses'>
                        <p><strong>Sukses!</strong> Data berhasil ditambahkan!</p>
                    </div>";
            } else if ($_GET['pesan'] == "berhasil") {
                echo "<div class='alert alert-sukses'>
                    <p><strong>Sukses!</strong> Data berhasil dihapus!</p>
                </div>";
            } else if ($_GET['pesan'] == "gagal") {
                echo "<div class='alert alert-gagal'>
                     <p><strong>Gagal!</strong> Data gagal dihapus!</p>
                </div>";
            }
        }
    ?>

    <div class="container-barang">
        <?php
            require("configdb.php");

            $query = mysqli_query($koneksi, "SELECT * from gitar");

            $row = mysqli_num_rows($query);

            if($row > 0) {
                while($res = mysqli_fetch_assoc($query)) {
                    echo "<div class='card'>
                            <img src='img/".$res['gambar']."'/>
                            <div class='keterangan-gambar'>
                                <h2>".$res['nama_gitar']."</h2>
                                <p> ".$res['pick_up']." </p>
                                <p> ".$res['buatan']." </p>
                                <p> ".$res['harga']."</p>
                                <button><a href='edit-gitar.php?id_gitar=".$res['id_gitar']."'>Edit Data</a></button>
                                <button><a href='konfirmasi-hapus.php?id_gitar=".$res['id_gitar']."'>Hapus Data</a></button>
                            </div>    
                        </div>";
                }
            } else {
                echo "<div class='alert alert-gagal'>
                    <p><strong>Gagal!</strong> Belum ada data !</p>
                </div>";
            }
        ?>  
    </div>
    

</body>
</html>