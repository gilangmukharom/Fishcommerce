<?php
session_start();
require 'koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/style2.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="fonts/fontawesome-free/css/all.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?familyRoboto" rel="stylesheet">
    <title>Form Login</title>
</head>

<body>
    /*navbar*/
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <div class="container">
            <h3><i class="fab fa-opencart mr-2"></i></h3>
            <a class="navbar-brand font-weight-bold" href="#">Fish Store</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-4">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Profil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Hubungi Kami <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Bantuan <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <div class="icon mt-2">
                    <h5>
                        <i class="fas fa-cart-plus ml-3 mr-3"></i>
                        <i class="fas fa-envelope mr-3"></i>
                        <i class="fas fa-bell mr-3"></i>
                    </h5>
                </div>
            </div>
        </div>
    </nav>

    <div class="row mt-5 no-gutters">
        <div class="col-md-2 bg-light">
            <ul class="list-group list-group-flush p-2 pt-4">
                <li class="list-group-item bg-warning"><i class="fas fa-list mr-2"></i>Kategori</li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i> <a href="nemo.php" style="text-decoration: none;"> Nemo Fish </a></li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i> <a href="betta.php" style="text-decoration: none;"> Betta Fish </a></li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i> <a href="gold.php" style="text-decoration: none;"> Gold Fish </a></li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i> <a href="arwana.php" style="text-decoration: none;"> Arwana Fish </a></li>
            </ul>
        </div>
    </div>


    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center"> Sign Up</h1>
                <div class="card-text">
                    <form action="prosesregistrasi2.php" method="post">
                        <div class="form-group">
                            <label for="exampleInputUsername">Username : </label>
                            <input name="inputusername" type="text" class="form-control form-control-sm" id="exampleInputUsername">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail">Email : </label>

                            <input name="inputemail" type="email" class="form-control form-control-sm" id="exampleInputEmail">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword">Password : </label>

                            <input name="inputpassword" type="password" class="form-control form-control-sm" id="exampleInputPassword">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNoHP">Nomor HP : </label>

                            <input name="inputnohp" type="text" class="form-control form-control-sm" id="exampleInputNoHP">
                        </div>
                        <button name="register" type="submit" class="btn btn-primary btn-block">Register</button>
                    </form>
                </div>
                </h1>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="wthree_footer_copy">
                <p>?? 2021 Fish Store | Design by <a href="http://instagram.com/gilangmukharom">Gilang Mukharom</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>