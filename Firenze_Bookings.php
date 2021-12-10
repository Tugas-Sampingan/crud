<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "wad_modul4");
$result = mysqli_query($koneksi, "SELECT * FROM booking");
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

    footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<body>
    <!-- Navbar -->
    <nav class="navbar" style="background-color: #C8E3D4;">
        <a class="navbar-brand" href="Firenze_Index.php">
            <strong>EAD TRAVEL</strong>
        </a>
        <div class="menu d-flex">
            <a class="navbar-brand" href="Firenze_Bookings.php">
                <img src="img/chart.png" width="20" height="20" alt="">
            </a>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $_SESSION['username']; ?><span style="color: blue">
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="">Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Firenze_Login.php">Logout</a>
                <?php
                session_destroy();
                ?>
            </div>
        </div>
    </nav>
    <?php
    if (isset($_SESSION['sukses'])) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
        unset($_SESSION["sukses"]);
    }
    ?>
    <!-- Data Book -->
    <div class="container mt-5">
        <table class="table table-striped" style="background-color: white;">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Tmepat</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Tanggal Perjalanan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $index = 1;
                $total = 0;
                foreach ($result as $row) {
                ?>
                    <tr>
                        <th scope="row"><?= $index ?></th>
                        <td><?= $row['nama_tempat'] ?></td>
                        <td><?= $row['lokasi'] ?></td>
                        <td><?= $row['tanggal'] ?></td>
                        <td>RP. <?= $row['harga'] ?></td>
                        <td><a href="Firenze_hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger">Hapus</a></td>
                    </tr>
                <?php
                    $total = $total + (int)$row['harga'];
                    $index++;
                }
                ?>
                <tr>
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>RP. <?= $total ?></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- footer -->
    <footer class="mt-4">
        <nav class="navbar navbar-expand-lg navbar-light fixed top" style="background-color: #C8E3D4;">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: auto;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"> <b>©2021 Copyright : Firenze_1202194019</b></a>
                    </li>
                </ul>
            </div>
        </nav>
    </footer>
</body>

</html>