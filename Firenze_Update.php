<?php
include "Firenze_Connect.php";
session_start();
$id = $_GET['id'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$password = $_POST['password'];
$navb = $_POST['warna_navbar'];

$_SESSION['nav'] = $navb;



$query = "UPDATE user SET 
    nama = '$nama',
    no_hp = '$no_hp',
    password = '$password'
    
    WHERE id = '$id'
";
$result = mysqli_query($koneksi, $query);
if ($result) {
    $_SESSION['update'] = 'Berhasil Update Profile!';
    header("location:Firenze_profile.php?");
}
