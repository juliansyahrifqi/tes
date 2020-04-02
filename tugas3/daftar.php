<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>  
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        html {
            background-image: url(bgdaftar.jpg);
            background-size: cover;
        }
    </style>

    <div class="container-register">
        


        <form action="proses-daftar.php" method="post">
            <h1>DAFTAR AKUN</h1>
            <?php
                if(!empty($_GET['pesan'])) {
                    if($_GET['pesan'] == "username") {
                        echo "<div class='alert alert-gagal'>
                                <p><strong> Gagal!</strong> Username sudah terdaftar !</p> 
                            </div>";
                    } else if($_GET['pesan'] == "password") {
                        echo "<div class='alert alert-gagal'> 
                            <p><strong>Gagal!</strong> Password tidak sama !</p>
                        </div>";
                    } else if($_GET['pesan'] == "gagal") {
                        echo "<div class='alert alert-gagal'> 
                                    <p><strong>Gagal!</strong> Data gagal diinput!</p>
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
                <label for="password2">Ulangi Password</label>
                <input type="password" name="password2" required>
            </div>
            <div class="element-form">
                <input type="submit" value="Daftar">
            </div>
            <div class="element-form">
                <p>Sudah punya akun ? <strong><a href="login.php">Login</a></strong></p>
            </div>
        </form>
    </div>
</body>
</html>