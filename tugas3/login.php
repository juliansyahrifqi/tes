<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css" >  
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <style>
        html {
            background-image: url(img/bg.jpg);
            background-size: cover;
        }
    </style>

    <div class="container-login">
        <form action="proses-login.php" method="post">
            <h1>LOGIN</h1>
            <?php
                if(!empty($_GET['pesan'])) {
                    if($_GET['pesan'] == "sukses") {
                        echo "<div class='alert alert-sukses'>
                            <p><strong>Sukses!</strong> Anda sudah terdaftar! Silahkan login</p>
                        </div>";
                    } else if($_GET['pesan'] == "gagal") {
                        echo "<div class='alert alert-gagal'> 
                                <p><strong>Gagal!</strong> Username atau password salah!</p>
                            </div>";
                    }
                }
            ?>
            <div class="element-form">
                <label for="username">Username</label>
                <input type="text" name="username" required>
            </div>
            <div class="element-form">
                <label for="password">Password</label>
                <input type="password" name="password" required>
            </div>
            <div class="element-form">
                <input type="submit" value="LOGIN">
            </div>
            <div class="element-form">
                <p>Belum punya akun ? <strong><a href="daftar.php">Daftar dulu!</a></strong></p>
            </div>`
        </form>
    </div>
</body>
</html>