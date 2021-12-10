<?php
session_start();
$tanggal = $_POST['tanggal'];
$email = $_SESSION['email'];
$id_tempat = $_GET['id'];
$harga;
$namaTempat;
$lokasi;
$id_user;

$koneksi = mysqli_connect("localhost", "root", "", "wad_modul4");

$result = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email'");
foreach ($result as $row) {
    $id_user = $row['id'];
}


$selected = mysqli_query($koneksi, "SELECT * FROM tiket WHERE id_tiket = '$id_tempat'");


foreach ($selected as $row) {
    $harga = $row['harga'];
    $namaTempat  = $row['nama'];
    $lokasi  = $row['tempat'];
}


if (isset($_POST['tambah'])) {
    mysqli_query($koneksi, "INSERT INTO booking VALUES('','$id_user', '$namaTempat', '$lokasi', '$harga', '$tanggal')");
}

header('location: Firenze_Index.php');
