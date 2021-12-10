<?php
session_start();
$_SESSION['sukses'] = 'Berhasil Dihapus!';
$koneksi = mysqli_connect("localhost", "root", "", "wad_modul4");

$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM booking WHERE id = '$id'");

if ($result) {
    header("location:Firenze_Bookings.php?");
}
