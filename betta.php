<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="css/style2.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="fonts/fontawesome-free/css/all.min.css">

    <title>Fish Store</title>
</head>

<body>
            /*navbar*/
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <div class="container">
            <h3><i class="fab fa-opencart mr-2"></i></h3>
            <a class="navbar-brand font-weight-bold" href="home2.php">Fish Store</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-4">
                    <li class="nav-item active">
                        <a class="nav-link" href="home2.php">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Reseller <span class="sr-only">(current)</span></a>
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
                        <a href="belanjaan.php"><i class="fas fa-cart-plus ml-3 mr-3"></i></a>
                        <a><i class="fas fa-envelope mr-3"></i></a>
                        <a><i class="fas fa-bell mr-3"></i></a>
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
                <li class="list-group-item"><i class="fas fa-angle-right"></i> <a href="guppy.php" style="text-decoration: none;"> Guppy Fish </a></li>
                <!-- Button trigger modal -->
                <li class="list-group-item>"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        Logout</button></li>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Logout</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Anda yakin ingin logout?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                <button type="button" class="btn btn-primary">Yakin</button>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>

        <div class="col-md-10">

            <h4 class="text-center font-weight-bold m-4">Produk Terbaru</h4>
            <div class="row">
                <div class="card ml-5" style="width: 18rem;">
                    <img src="img/betta/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CUPANG ALBINO Rp.100.000</h5>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <p class="card-text">Adalah cupang bertipe albino yang memiliki cirikhas dengan warna albino</p>
                        <a href="#" class="btn btn-primary btncart">Add Cart</a>
                    </div>
                </div>
                <div class="card ml-5" style="width: 18rem;">
                    <img src="img/betta/2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CUPANG BLUE DRAGON Rp.200.000</h5>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <p class="card-text">Adalah cupang bertipe dragon yang memiliki cirikhas dengan warna Biru dan sedikit merah</p>
                        <a href="#" class="btn btn-primary btncart">Add Cart</a>
                    </div>
                </div>
                <div class="card ml-5" style="width: 18rem;">
                    <img src="img/betta/3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CUPANG BLACK BLUE SKY Rp.400.000</h5>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <p class="card-text">Adalah cupang bertipe Sky yang memiliki cirikhas dengan warna Hitam dan sedikit biru </p>
                        <a href="#" class="btn btn-primary btncart">Add Cart</a>
                    </div>
                </div>
                <div class="card ml-5" style="width: 18rem;">
                    <img src="img/betta/4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CUPANG BLUE RED DRAGON Rp.350.000</h5>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <p class="card-text">Adalah cupang bertipe dragon yang memiliki cirikhas dengan warna Biru dengan campuran merah</p>
                        <a href="#" class="btn btn-primary btncart">Add Cart</a>
                    </div>
                </div>
                <div class="card ml-5" style="width: 18rem;">
                    <img src="img/betta/5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CUPANG AVATAR GOLD</h5>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <p class="card-text">Adalah cupang bertipe Avatar yang memiliki cirikhas dengan warna Gold kuning dan biru</p>
                        <a href="#" class="btn btn-primary btncart">Add Cart</a>
                    </div>
                </div>
                <div class="card ml-5" style="width: 18rem;">
                    <img src="img/betta/6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CUPANG RED ALBINO Rp.500.000</h5>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <p class="card-text">Adalah cupang bertipe albino yang memiliki cirikhas dengan warna albino dan sedikit warna merah</p>
                        <a href="#" class="btn btn-primary btncart">Add Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="wthree_footer_copy">
                <p>© 2021 Fish Store | Design by <a href="http://instagram.com/gilangmukharom">Gilang Mukharom</a>
                </p>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>