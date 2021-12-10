<?php
include "Firenze_Connect.php";
session_start();
$id = $_GET['id'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$password = $_POST['password'];
$navb = $_POST['warna_navbar'];
$kode;
if ($navb == 'Dark Boba') {
    $kode = '#1B1E23';
} else {
    $kode = '#9ad7db';
}

$_SESSION['warna'] = $kode;


$query = "UPDATE user SET 
    nama = '$nama',
    no_hp = '$no_hp',
    password = '$password'
    
    WHERE id = '$id'
";
$result = mysqli_query($koneksi, $query);
if ($result) {
    $_SESSION['update'] = 'Berhasil Update Profile!';
    if (isset($_COOKIE['warna'])) {
        setcookie('warna', $navb);
    } else {
        setcookie('warna', 'Blue Ocean');
    }

    header("location:Firenze_profile.php?");
}
