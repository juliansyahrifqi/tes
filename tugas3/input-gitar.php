<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Gitar</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="container-input">
        <form action="proses-input-gitar.php" method="post" enctype="multipart/form-data">
            <div class="element-form">
                <label for="namagitar">Nama Gitar</label>
                <input type="text" name="nama-gitar" required>
            </div>
            <div class="element-form">
                <label for="pickup">Pick Up</label>
                <select name="pickup">
                    <option value="Singlecoil">Single Coil</option>
                    <option value="Humbucker">Humbucker </option>
                </select>
            </div>
            <div class="element-form">
                <select name="buatan">
                    <option value="Amerika">Amerika</option>
                    <option value="Jepang">Jepang</option>
                </select>
            </div>
            <div class="element-form">
                <label for="harga">Harga</label>
                <input type="text" name="harga">
            </div>
            <div class="element-form">
                <label for="file">Gambar</label>
                <input type="file" name="file">
            </div>
            <div class="element-form">
                <input type="submit" value="SUBMIT">
            </div>
        </form>
    </div>
    
</body>
</html>