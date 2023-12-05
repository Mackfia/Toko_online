<?php
if($_POST){
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $jabatan=$_POST['jabatan'];
    
    if(empty($email)){
    echo"<script>alert('Data tidak boleh ada yang kosong!');location.href='register.php';</script>";
    } elseif(empty($username)){
    echo"<script>alert('Data tidak boleh ada yang kosong!');location.href='register.php';</script>";
    } elseif(empty($password)){
        echo"<script>alert('Data tidak boleh ada yang kosong!');location.href='register.php';</script>";
    } elseif(empty($jabatan)){
        echo"<script>alert('Data tidak boleh ada yang kosong!');location.href='register.php';</script>";
    }else{
        include "koneksi.php";
        $insert=mysqli_query($koneksi,"insert into login (email,username,password,jabatan) value ('".$email."','".$username."','".md5($password)."','".$jabatan."')")or
        die(mysqli_error($koneksi));
        if($insert){
            echo "<script>alert('Berhasil!');location.href='register.php';</script>";
            header("location: login_toko.php");
        } else {
            echo "<script>alert('Gagal!');location.href='register.php';</script>";
        }
    }

}
