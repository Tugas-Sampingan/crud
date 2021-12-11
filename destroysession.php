<?php
session_start();
session_destroy();
session_start();
$_SESSION['logout']="Berhasil logout!";
header('location: Firenze_Login.php');
