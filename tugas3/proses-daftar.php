<?php

    require('configdb.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if($password != $password2) {
        header("location:daftar.php?pesan=password");
        die;
    }

    $data = mysqli_query($koneksi, "SELECT * from akun WHERE username='$username'");
    $cek = mysqli_num_rows($data);

    if($cek > 0) {
        header("location:daftar.php?pesan=username");
        die;
    }

    $password_new = sha1($password);

    $result = mysqli_query($koneksi, "INSERT INTO `akun` (`username`, `password`) VALUES ('$username', '$password_new');"); 

    if($result) { 
        header("location:login.php?pesan=sukses");
    } else {
        header("location:daftar.php?pesan=gagal");
    }
?>