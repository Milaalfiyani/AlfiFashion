<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>AlfiFashion</title>
</head>
<style>
    body {
        background-color: skyblue;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">AlfiFashion</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent background-color: skyblue">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url() ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url('index.php/dashboard') ?>">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url('index.php/admin/dashboard') ?>">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('index.php/webme/tambahFoto') ?>">Tambah Foto</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <?php foreach ($hero as $key => $rows) : ?>
                    <div class="carousel-item <?php echo ($key == 0 ? 'active' : '') ?>">
                        <img class="d-block w-100" src="<?php echo $rows['file_foto'] ?>" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h4><?php echo $rows['label'] ?></h4>
                            <p><?php echo $rows['description'] ?>.</p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <br />
    <div class="container text-center">
        <div class="section-title">
            <h3>Produk AlfiFashion</h3>
            <br />
            <div class="row g-2">
                <div class="col-6">
                    <div class="p-3 border bg-light"><img src="<?= base_url('assets/'); ?>./img/barang/sarung salur.jpeg" width="200"" alt=""></div>
                <p>Sarung Samarinda Motif Salur</p>
                <p>Harga Rp.70.000</p>
                <div class=" btn-wrap">
                        <a href="#" class="btn-detail">Detail</a>
                    </div>
                    <br />
                </div>
                <div class=" col-6">
                    <div class="p-3 border bg-light"><img src="<?= base_url('assets/'); ?>./img/barang/sarung bunga.jpeg" width="200" alt=""></div>
                    <p>Sarung Samarinda Motif Bunga</p>
                    <p>Harga Rp.70.000</p>
                    <div class=" btn-wrap">
                        <a href="#" class="btn-detail">Detail</a>
                    </div>
                    <br />
                </div>
                <div class="col-6">
                    <div class="p-3 border bg-light"><img src="<?= base_url('assets/'); ?>./img/barang/gamis.jpeg" width="200" alt=""></div>
                    <p>Mila Gamis</p>
                    <p>Harga Rp.100.000</p>
                    <div class=" btn-wrap">
                        <a href="#" class="btn-detail">Detail</a>
                    </div>
                    <br />
                </div>
                <div class="col-6">
                    <div class="p-3 border bg-light"><img src="<?= base_url('assets/'); ?>./img/barang/dress.jpeg" width="230" alt=""></div>
                    <p>Milla Dress</p>
                    <p>Harga Rp.90.000</p>
                    <div class=" btn-wrap">
                        <a href="#" class="btn-detail">Detail</a>
                    </div>
                    <br />
                </div>
            </div>
        </div>
        <br />
        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 footer-links">
                            <h4>Our Social Networks</h4>
                            <p>Jangan lupa kunjungi juga akun sosial media kami</p>
                            <div class="social-links mt-3">
                                <a href=""><img src="<?= base_url('assets/'); ?>./img/avatar/fb.jpg" width="20" alt="">AlfiFashion</a>
                                <a href=""><img src="<?= base_url('assets/'); ?>./img/avatar/ig.jpg" width="20" alt="">AlfiFashion</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container py-4">
                <div class="credits">
                    Designed by <a>AlfiFashion</a>
                </div>
            </div>
        </footer><!-- End Footer -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $('.carousel').carousel({
                    interval: 3000
                })
            })
        </script>
</body>

</html>