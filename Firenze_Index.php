<?php
session_start();
include_once ("Firenze_connect.php");
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.css">
        <title>INDEX - MODUL4 FIRENZE</title>
    </head>
    <style>
        body{
            background-color: #F6D7A7
        }
    </style>
    <body>
        <script src= "js/bootsrap.js"></script>
        <script src="js/popper.min.js"></script>

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed top" style="background-color: #C8E3D4;">
            <div class="container-fluid">
                <h1>
                    <strong>
                        <a class="navbar-brand" href="Firenze_Index.php">EAD TRAVEL</a>
                    </strong>
                </h1>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav justify-content-end">
                <a class="navbar-brand" href="Firenze_Bookings.php">
                    <img src="chart.png" width="20" height="20" alt="">
                </a>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lorem, ipsum dolor         
                        <span style="color: blue">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="">Logout</a>
                    </div>
                </li>
        </div>
    </nav>


    <div class="flex-container">
        <br>
        <div class="card mx-auto" style="width:68rem;">

            <div class="card-header bg-white 
            align-center mx-center"
                style="background color: green text-align: center;">

                <h1 class="card-title mt-3 text-center">EAD TRAVEL</h1>

            </div>

                </div>
                 <div class="container">

                <div class="row">
                    <div class="card-body align-center  mx-auto">
                        <form action="" method="POST">
                            <div class="card-group">
                                <div class="card mx-auto">
                                    <img class="card-img-top"
                                        src="raja ampat.jpg" height="400"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title" name="nama_lokasi"><b>Raja Ampat,Papua</b></h4>
                                        <p class="card-text">Kepulauan Raja Ampat berada di bagian paling barat Papua dan membentang di area seluas kurang lebih 4,6 juta hektar. 
                                            Kabupaten Raja Ampat terdiri dari 4 pulau besar yaitu Pulau Waigeo, Batanta, Salawati dan Misool, dan 1.847 pulau-pulau kecil lainnya.</p>

                                        <div class="card-footer bg-white text-left">
                                        </div>
                                        <p class="card-text" name="harga">Rp7.000.000</p>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary btn-block" role="button" type="submit"
                                            name="tambah">Tambah Ke Keranjang
                                        </button>
                                    
                        </form>

                    </div>
                </div>
                <div class="card mx-auto">
                    <form action="" method="POST">
                        <img class="card-img-top" src="Bromo.png"
                            height="400" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" name="nama_lokasi"><b>Gunung Bromo, Malang</b></h5>
                            <p class="card-text">Gunung Bromo adalah salah satu gunung api yang masih aktif di Indonesia.
                                 Gunung yang memiliki ketinggian 2.392 meter di atas permukaan laut ini merupakan destinasi andalan Jawa Timur. 
                                 Gunung Bromo berdiri gagah dikelilingi kaldera atau lautan pasir seluas 10 kilometer persegi.</p>

                            <div class="card-footer mt-4 bg-white text-left">
                            </div>
                            <p class="card-text" name="harga">Rp2.000.000 </p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary btn-block" name="tambah" type="submit">Tambah Ke Keranjang
                            </button>
                    </form>
                </div>
                </div>
                <div class="card mx-auto">
                <form action="" method="POST">
                    <img class="card-img-top" src="tanah lot.jpg"
                        height="400" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" name="nama_lokasi"><b>Tanah Lot,Bali</b></h5>
                        <p class="card-text">Tanah Lot salah satu pura penting bagi umat Hindu Bali dan lokasi pura terletak di atas batu besar yang berada di lepas pantai. 
                            Pura Tanah Lot merupakan ikon pariwisata pulau Bali.</p>

                        <div class="card-footer mt-5 bg-white text-left">
                        </div>
                        <p class="card-text" name="harga">Rp5.000.000 </p>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary btn-block" name="tambah" type="submit">Tambah Ke Keranjang
                        </button>
                </form>
            </div>
        </nav>
        
            <!-- footer -->
            <footer class="mt-4">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg navbar-light fixed top" style="background-color: #C8E3D4;">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: auto; margin-right-auto">
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