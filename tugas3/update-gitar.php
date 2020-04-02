<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Gitar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        require("configdb.php");

        $id_gitar = $_GET['id_gitar'];

        if($id_gitar == "") {
            header("location:index.html");
            die;
        }

        $query = mysqli_query($koneksi, "SELECT * FROM gitar WHERE id_gitar = $id_gitar LIMIT 1");    
    ?> 

    <div class="container-input">
    <form action="proses-update-gitar.php?id_gitar=<?php echo $id_gitar ?>" method="post" enctype="multipart/form-data">
        <h1>Update Data Gitar</h1>  
            <?php 
                while($res = mysqli_fetch_assoc($query)) {
                    echo "<div class='element-form'>
                            <label for='namagitar'>Nama Gitar</label>
                            <input type='text' name='nama-gitar' value='".$res['nama_gitar']."' required>
                        </div>
                        <div class='element-form'>
                            <label for='pickup'>Pick Up</label>
                            <select name='pickup'>
                            <option value='Singlecoil'>Single Coil</option>
                            <option value='Humbucker'>Humbucker </option>
                        </select>
                        </div>
                    <div class='element-form'>
                        <select name='buatan'>
                            <option value='Amerika'>Amerika</option>
                            <option value='Jepang'>Jepang</option>
                        </select>
                    </div>
                    <div class='element-form'>
                        <label for='harga'>Harga</label>
                        <input type='text' name='harga' value=".$res['harga']." required>
                    </div>
                    <div class='element-form'>
                        <label for='file'>Gambar</label>
                        <input type='file' name='file' value=".$res['gambar'].">
                    </div>";
                }
            ?>
            <div class="element-form">
                <input type="submit" value="UPDATE">
            </div>
        </form>
    </div>
    
</body>
</html>