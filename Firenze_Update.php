<?php
include "Firenze_Connect.php";

$id = $_GET['id'];
$email = $_POST['email'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$password = $_POST['password'];

$query = "UPDATE user SET 
    nama = '$nama',
    no_hp = '$no_hp',
    password = '$password',
    
    WHERE email = '$email'
";
$result = mysqli_query($koneksi, $query);
if ($result) {
    header("location:Firenze_profile.php?");
}
