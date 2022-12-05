<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>AlfiFashion</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/'); ?>./vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>./vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>./vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>./vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>./vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/'); ?>./css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: BizLand - v3.9.1
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="alfifashion@gmail.com">alfifashion@gmail.comcom</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>Ig : @AlfiFashion01</span></i>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html">AlfiFashion<span>.</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('index.php/Webme/login'); ?>">Product</a></li>
                    <li class="dropdown"><a href="#"><span>Log In</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?= base_url('index.php/webme/login'); ?>">Log In</a></li>
                            <li><a href="<?= base_url('index.php/webme/daftar'); ?>">Create Account</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1>Selamat Datang Sahabat <span>AlfiFashion</span></h1>
            <h2>Belanja Fashion Muslim Hanya di AlfiFashion</h2>
            <div class="d-flex">
                <a href="<?= base_url('index.php/webme/login'); ?>" class="btn-get-started scrollto">Log In Member</a>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Produk AlfiFashion</h2>
                    <h3>
                        <h3>Cek Produk <span>Buy Now!</span></h3>
                        <p>Kepuasan Customer Adalah Kebahagiaan Kami</p>
                </div>

                <!-- ======= Testimonials Section ======= -->
                <section id="testimonials" class="testimonials">
                    <div class="container" data-aos="zoom-in">

                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                        <h3>AlfiFashion</h3>
                                        <h4>fashion Muslim</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            AlfiFashion sudah berdiri sejak 2015 dan sudah dipercaya oleh sebagian besar masyarakat
                                            bahkan bukan hanya di dunia online akan tetapi pengiriman dan penjualan secara offline pun sudah dilakukan
                                            sebelum alfifashion terjuan di dunia online shop.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                        <h3>Nur Aiman</h3>
                                        <h4>customer</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            AlfiFashion ini sangat bagus sekali, bukan hanya dari produknya tetapi juga dari segi pelayanan da pengirimansangat responsif sekali,
                                            saya senang menjadi customer alfifashion
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                        <h3>Aisyah Farasyah</h3>
                                        <h4>customer</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Aku sebagai reseller alfifashion, suka banget karena pembeli di aku juga tidak ada yang mengembalikan produknya.
                                            mereka selalu memberikan respon positif atas produk yang mereka beli. terimakasih alfifashion
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                        <h3>Andini</h3>
                                        <h4>customer</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            pengiriman cepat, produk sesuai, ah ga banyak komentar belanja di alfifashion selalu memuaskan.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                        <h3>halimatussa'diyah</h3>
                                        <h4>customer</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            sukses terus buat alfifashion karena selalu memuaskan para customernya. thanks alfifashion
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>
                </section><!-- End Testimonials Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Jangan lupa kunjungi juga akun sosial media kami</p>
                        <div class="social-links mt-3">
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> Alfi Fashion
                            <br /><br />
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>@AlfiFashion01
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

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets/'); ?>./vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url('assets/'); ?>./vendor/aos/aos.js"></script>
    <script src="<?= base_url('assets/'); ?>./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/'); ?>./vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url('assets/'); ?>./vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('assets/'); ?>./vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url('assets/'); ?>./vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?= base_url('assets/'); ?>./vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets/'); ?>./js/main.js"></script>

</body>

</html>