<?php
session_start();
include 'koneksi1.php';
$username = $_POST['username'];
$password = $_POST['password'];


$query = $koneksi->query("SELECT * FROM masyarakat WHERE username='$username' AND password='$password'");

$jumlahbaris = $query->rowCount();

if($jumlahbaris > 0){

    $data = $query->fetch();

    $_SESSION['nik'] = $data['nik'];
    

    header("location:halaman.php");
}else{
    header("location:login.php");
}