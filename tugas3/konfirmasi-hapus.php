<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Hapus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 
    require("configdb.php");

    $id_gitar = $_GET['id_gitar'];

    if($id_gitar == "") {
        header("location:index.php");
        die;
    }

    $query = mysqli_query($koneksi, "SELECT * from gitar WHERE id_gitar=$id_gitar LIMIT 1;");
?>

    <div class="container-barang">
        <form action="proses-hapus.php?id_gitar=<?php echo $id_gitar ?>" method="post">
            <?php
                while($res = mysqli_fetch_assoc($query)) {
                    echo "<div class='card'>
                            <img src='img/".$res['gambar']."'/>
                            <div class='keterangan-gambar'>
                                <h2>".$res['nama_gitar']."</h2>
                                <p> ".$res['pick_up']." </p>
                                <p> ".$res['buatan']." </p>
                                <p> Rp. ".$res['harga']."</p>
                            </div>    
                        </div>";
                }       
            ?>   
        <input type="submit" value="Konfirmasi Hapus">
        </form>
    </div> 
    
</body>
</html>