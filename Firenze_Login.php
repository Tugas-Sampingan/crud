<?php
session_start();
setcookie('warna', 'Blue Ocean');
include_once("Firenze_connect.php");
$selected = mysqli_query($koneksi, "SELECT * FROM user");

if (isset($_POST['login'])) {
    foreach ($selected as $row) {
        if ($_POST['email'] == $row['email']) {
            $_SESSION["email"] = $row['email'];
            $_SESSION['nama'] = $row['nama'];
        }
    }
}

$_SESSION['warna'] = '#9ad7db';

if (isset($_POST['login'])) {
    login($_POST);
}

?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>LOGIN - MODUL4 FIRENZE</title>
</head>
<style>
    body {
        background-color: #F6D7A7;
    }
</style>

<body>
    <script src="js/bootsrap.js"></script>
    <script src="js/popper.min.js"></script>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed top" style="background-color: #C8E3D4;">
        <div class="container">
            <h1>
                <strong>
                    <a class="navbar-brand" href="Firenze_Index.php" style="text-decoration:none; color:black">EAD TRAVEL</a>
                </strong>
            </h1>
            <!-- Navbar Home -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Firenze_Register.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Firenze_Login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php if (isset($_SESSION['message'])) : ?>
        <div class='alert alert-warning alert-dismissible fade show fade in' role='alert'>
            <?= $_SESSION['message']; ?>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>

    <?php
        unset($_SESSION['message']);
    endif;
    ?>

    <?php if (isset($_SESSION['registered'])) : ?>
        <div class='alert alert-warning alert-dismissible fade show fade in' role='alert'>
            <?= $_SESSION['registered']; ?>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>

    <?php
        unset($_SESSION['registered']);
    endif;
    ?>

    <br>
    <div class="container felx" style="margin-top: 50px;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="container">
                        <h2 class="card-tittle text-center"><b>LOGIN</b></h2>
                        <hr>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input required type="email" class="form-control" name="email" id="email" aria-describedby="email" placeholder="Masukkan Email Anda">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input required type="password" class="form-control" id="password" name="password" aria-describedby="password" placeholder="Masukkan Password Anda">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                    <label class="form-check-label" for="remember">Remember Me</label>
                                </div>
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary" style="text-align: center" name="login">Login</button>
                                </div>
                            </form>
                            <br>
                            <p style="text-align: center;">Anda Belum Punya Akun?
                                <a href="Firenze_Register.php">Register here.</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br>
        <!-- footer -->
        <footer class="mt-4">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-light fixed bottom" style="background-color: #C8E3D4;">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: auto;">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"> <b>©2021 Copyright : Firenze_1202194019</b></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </footer>
</body>

</html>