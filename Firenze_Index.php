<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "wad_modul4");
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
    <nav class="navbar" style="background-color: #C8E3D4;">
        <a class="navbar-brand" href="#">
            EAD TRAVEL
        </a>
        <div class="menu d-flex">
            <a class="navbar-brand" href="Firenze_Bookings.php">
                <img src="img/chart.png" width="20" height="20" alt="">
            </a>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lorem, ipsum dolor
                <span style="color: blue">
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="">Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="">Logout</a>
            </div>
        </div>
    </nav>
    <!-- end NAV -->
    <!-- Header -->
    <div class="card mx-auto" style="width:68rem;">
        <div class="card-header bg-white align-center mx-center" style="background-color: green;text-align: center;">
            <h1 class="card-title mt-3 text-center">EAD TRAVEL</h1>
        </div>
    </div>
    <!-- END HEADER -->



    <!-- Card -->
    <form action="" method="post">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                </div>

            </div>
        </div>
        <!-- END CARD -->
        <!-- The Modal -->
        <!-- MODAL PESAN -->
        <div class="modal" id="pesan">
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
                        <?php
                        if (isset($_POST['tambah'])) {
                            echo $_POST['tambah'];
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </form>
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

<?php
// $harga;
// $namaTempat;
// $lokasi;


// if (isset($_POST['tanggal'])) {
//     if (isset($_POST['add'])) {
//         $tanggal = $_POST['tanggal'];
//         switch ($_POST['tambah']) {
//             case 'raja_ampat':
//                 $harga = 7000000;
//                 $namaTempat = 'Raja Ampat';
//                 $lokasi = 'Papua';
//                 echo $harga . $namaTempat . $lokasi . $tanggal;
//                 break;
//             case 'bromo':
//                 $harga = 2000000;
//                 $namaTempat = 'Bromo';
//                 $lokasi = 'Malang';
//                 echo $harga . $namaTempat . $lokasi . $tanggal;
//                 break;
//             default:
//                 $harga = 5000000;
//                 $namaTempat = 'Tanah Lot';
//                 $lokasi = 'Bali';
//                 echo $harga . $namaTempat . $lokasi . $tanggal;
//                 break;
//         }
//     }
// }




// echo $harga.$namaTempat.$lokasi.$tanggal;
?>