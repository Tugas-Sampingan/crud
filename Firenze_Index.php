<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "wad_modul4");
$selected = mysqli_query($koneksi, "SELECT * FROM tiket");
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
        <a href="Firenze_Index.php">
            <strong>EAD TRAVEL</strong>
        </a>
        <div class="menu d-flex">
            <a class="navbar-brand" href="Firenze_Bookings.php">
                <img src="img/chart.png" width="20" height="20" alt="">
            </a>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . $nama . '<span style="color: blue">
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="Firenze_Profile.php">Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="destroysession.php">Logout</a>
            </div>
        </div>
        </div>
    </nav>';
    } else {
        echo '<nav class="navbar navbar-expand-lg navbar-light fixed top" style="background-color: ' . $_SESSION['warna'] . ';">
        <div class="container-fluid">
            <h1>
                <strong>
                    <a class="navbar-brand" href="Firenze_Index.php">EAD TRAVEL</a>
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
    <!-- end NAV -->
    <!-- Header -->
    <div class="container">
        <div class="card mx-auto">
            <div class=" card-header bg-white align-center mx-center" style="background-color: green;text-align: center;">
                <h1 class="card-title mt-3 text-center">EAD TRAVEL</h1>
            </div>
        </div>
    </div>

    <!-- END HEADER -->

    <!-- Card -->
    <div class="container">
        <div class="row">
            <?php
            foreach ($selected as $row) {
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="img/<?php echo $row['gambar'] . '.jpg' ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['nama'] . ', ' . $row['tempat'] ?></h5>
                            <p class="card-text"><?php echo $row['deskripsi'] ?></p>
                            <hr>
                            <strong>Rp. <?php echo $row['harga'] ?></strong>
                            <hr>
                            <?php
                            $idtiket =  $row['id_tiket'];
                            if (isset($_SESSION['nama'])) {

                                echo '<button class="btn btn-primary" data-toggle="modal" data-target="#pesan' . $idtiket . '">
                                    Pesan Tiket
                                    </button>';
                            } else {
                                echo '<button class="btn btn-primary" data-toggle="modal" data-target="#pesan' . $idtiket . '" disabled>
                                Pesan Tiket
                            </button>';
                            }
                            ?>

                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <!-- END CARD -->

    <!-- The Modal -->
    <!-- MODAL PESAN -->
    <?php
    foreach ($selected as $row) {
    ?>
        <form method="post" action="Firenze_tambahkan.php?id=<?php echo $row['id_tiket'] ?>">
            <div class="modal fade" id="pesan<?php echo $row['id_tiket'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p>Tanggal Perjalanan.</p>
                            <input type="date" name="tanggal" style="width: 100%;" class="p-2">

                        </div>
                        <div class=" modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="tambah">Tambahkan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <?php
    }
    ?>
    <!-- END MODAL PESAN -->


    <!-- MODAL PROFILE -->
    <div class="modal" id="profileModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Created By</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-header">
                    Nama : Firenze Sukmaning Diefta <br>
                    NIM : 1202194019
                </div>

            </div>
        </div>
    </div>
    <!-- END MODAL PROFILE -->
    <!-- END MODAL -->

    <!-- footer -->
    <footer class=" mt-4" data-toggle="modal" data-target="#profileModal">
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