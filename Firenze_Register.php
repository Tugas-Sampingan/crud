<?php
session_start();

include_once("Firenze_connect.php");

if (isset($_POST['registered'])) { // mulai session
    registrasi($_POST);
}
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Register - MODUL4 FIRENZE</title>
</head>
<style>
    body {
        background-color: #F6D7A7
    }
</style>

<body>
    <script src="js/bootsrap.js"></script>
    <script src="js/popper.min.js"></script>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed top" style="background-color: #C8E3D4;">
        <div class="container-fluid">
            <h1>
                <strong>
                    <a class="navbar-brand" href="Firenze_Index.php">EAD TRAVEL</a>
                </strong>
            </h1>
            <!-- home navbar -->
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

    <!-- Register -->
    <div class="container " style="margin-top: 50px;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="container">
                        <h2 class="card-tittle text-center"><b>REGISTRASI</b></h2>
                        <hr>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control" id="name" name="nama" placeholder="Masukkan Nama Lengkap" required>

                                </div>
                                <div class="form-group">
                                    <label for="email">Alamat Email</label>
                                    <input type="email" class="form-control" name="email" id="email" aria-describedby="email" placeholder="Masukkan Alamat Email" required>

                                </div>
                                <div class="form-group">
                                    <label for="name">Nomor HP</label>
                                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan Nomor Handphone" required>

                                </div>
                                <div class="form-group">
                                    <label for="password">Kata Sandi</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Kata Sandi Anda" required>

                                </div>

                                <div class="form-group">
                                    <label for="password">Konfirmasi Kata Sandi</label>
                                    <input type="password" class="form-control" id="confirm_password" placeholder="Konfirmasi Kata Sandi Anda" name="passwordConfirm" required>
                                </div>
                                <br><br>
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary" style="text-align: center" name="registered">Daftar</button>
                                </div>

                                <p style="text-align: center; margin-top: 10px">Anda Sudah Punya Akun? <a href="Firenze_Login.php">Login here.</a></p>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <footer class="mt-4">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-light fixed top" style="background-color: #C8E3D4;">
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