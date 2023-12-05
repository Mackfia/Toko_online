<?php
session_start();
include 'koneksi.php';

if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "<script>alert('Username dan Password tidak boleh kosong!');location.href='login_toko.php';</script>";
    } else {
        include "koneksi.php";
        $qry_login = mysqli_query($koneksi, "SELECT * FROM login WHERE username = '" . $username . "' AND password = '" . md5($password) . "'");

        if (mysqli_num_rows($qry_login) > 0) {
            $dt_login = mysqli_fetch_array($qry_login);
            session_start();
            $_SESSION['id'] = $dt_login['id'];
            $_SESSION['username'] = $username;
            $_SESSION['status_login'] = true;

            if ($dt_login['jabatan'] == "Pelanggan") {
                $_SESSION['jabatan'] = "Pelanggan";
                header("location: halaman_pelanggan.php");
            } elseif ($dt_login['jabatan'] == "Pegawai") {
                $_SESSION['jabatan'] = "Pegawai";
                header("location: halaman_pegawai.php");
            } else {
                echo "<script>alert('Jabatan tidak valid!');location.href='login_toko.php';</script>";
            }
        } else {
            echo "<script>alert('Username atau Password tidak benar!');location.href='login_toko.php';</script>";
        }
    }
}
?>
