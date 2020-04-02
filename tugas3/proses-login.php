<?php
    require("configdb.php");

    $username = $_POST['username'];
    $password = sha1($_POST['password']);

    $query = mysqli_query($koneksi, "SELECT * from akun WHERE username='$username' AND password='$password'");

    $cek = mysqli_num_rows($query);

    if($cek == 0) {
        header("location:login.php?pesan=gagal");
    } else {
        $row = mysqli_fetch_assoc($query);

        session_start();
        $_SESSION['username'] = $row['username'];

        header("location:index.php");
    }

?>