<?php

include 'Firenze_Connect.php';

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE email ='$email'");
    foreach ($result as $row) {
        $_SESSION['id_user'] = $row['id'];
    }
}
$id = $_SESSION['id_user'];
$selected = mysqli_query($koneksi, "SELECT * FROM user WHERE id = '$id'");
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>INDEX - MODUL4 FIRENZE</title>
</head>
<style>
    body {
        background-color: #F6D7A7
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<body>
    <script src="js/bootsrap.js"></script>
    <script src="js/popper.min.js"></script>

    <!-- navbar -->
    <?php
    if (isset($_SESSION['nama'])) {
        $nama = $_SESSION['nama'];
        echo '<nav class="navbar" style="background-color:' . $_SESSION['warna'] . ';">
        <div class="container">
        <h1>
            <strong>
                <a class="navbar-brand" href="Firenze_Index.php" style="text-decoration:none; color:black">EAD TRAVEL</a>
            </strong>
        </h1>
        <div class="menu d-flex">
            <a class="navbar-brand" href="Firenze_Bookings.php">
                <img src="img/chart.png" width="20" height="20" alt="">
            </a>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . $nama . '<span style="color: blue">
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="">Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="destroysession.php">Logout</a>
            </div>
        </div>
        </div>
        </div>
    </nav>';
    } else {
        echo '<nav class="navbar navbar-expand-lg navbar-light fixed top" style="background-color: ' . $_SESSION['warna'] . ';">
        <div class="container-fluid">
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
    </nav>';
    }
    ?>
    <?php
    if (isset($_SESSION['update'])) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>' . $_SESSION['update'] . '</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
        unset($_SESSION['update']);
    }
    ?>
    <?php
    foreach ($selected as $row) {
    ?>

        <div class="container shadow mt-5 p-5" style="background-color: #ffffff;">
            <form action="Firenze_Update.php?id=<?= $id ?>" method="post">
                <h2 class="text-center">Profile</h2>
                <div class="form-group mt-3 row">
                    <label class="col-sm-3 col-form-label" for="email"><b>Email</b> </label>
                    <label class="col-sm-9 col-form-label"><?php echo $row['email']; ?></label>
                </div>
                <div class="form-group mt-3 row">
                    <label class="col-sm-3 col-form-label" for="nama"><b>Nama</b> </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama" value=<?php echo $row['nama']; ?> name="nama">
                    </div>
                </div>
                <div class="form-group mt-3 row">
                    <label class="col-sm-3 col-form-label" for="no_hp"><b>Nomor Handphone</b> </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nohp" value=<?php echo $row['no_hp']; ?> name="no_hp">
                    </div>
                </div>
                <div class="form-group mt-3 row">
                    <label class="col-sm-3 col-form-label" for="password"><b>Kata Sandi</b> </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="password" name="password">
                    </div>
                </div>
                <div class="form-group mt-3 row">
                    <label class="col-sm-3 col-form-label" for="konfirmasi_password"><b>Konfirmasi Kata Sandi</b> </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="konfirmasi_password" name="konfirmasi_password">
                    </div>
                </div>
                <div class="form-group mt-3 row">
                    <label class="col-sm-3 col-form-label" for="warna_navbar"><b>Warna Navbar</b> </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="warna_navbar" value="" name="warna_navbar">
                    </div>
                </div>
                <div class="form-group mt-3">
                    <center>
                        <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
                        <a href="Firenze_Index.php?" type="button" class="btn btn-warning">Cancel</a>
                    </center>
                </div>
            </form>
        </div>
    <?php

    }
    ?>
    <!-- footer -->
    <footer class=" mt-4" data-toggle="modal" data-target="#profileModal">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light fixed top" style="background-color: #C8E3D4;">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: auto;">
                        <li class="nav-item">
                            <b>©2021 Copyright : Firenze_1202194019</b>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </footer>
</body>

</html>