<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HEJOTEKNO - PT Agro Tekno Indo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('img/logoweb.png') ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('lib/animate/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') ?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('css/style.css'); ?>" rel="stylesheet">
</head>

<body>

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <img src="<?= base_url('img/logo.png') ?>" alt="Logo" style="max-height: 30px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="<?= site_url('C_Hejotekno/index'); ?>" class="nav-item nav-link">Home</a>
                    <a href="<?= site_url('C_Hejotekno/linkabout'); ?>" class="nav-item nav-link">About Us</a>
                    <a href="<?= site_url('C_Hejotekno/linkproduct'); ?>" class="nav-item nav-link">Product</a>
                    <a href="<?= site_url('C_Hejotekno/linkprogram'); ?>" class="nav-item nav-link">Program</a>
                    <a href="<?= site_url('C_Hejotekno/linkcontact'); ?>" class="nav-item nav-link">Contact</a>
                </div>
                <a href="<?= site_url('C_Hejotekno/linksignin'); ?>" class="btn btn-light rounded-pill py-2 px-4">Sign
                    In/Sign Up</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 ">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="<?= base_url('img/team.jpg') ?>"
                            alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <br>
                    <h1 class="mb-4">Agro Tekno Indo</h1>
                    <p class="mb-4">PT AGRO TEKNO INDO (ATI) merupakan salah satu anak perusahaan yang berkecimpung di
                        bidang Agroteknologi yang menjadi partner dalam sebuah brand Hejotekno. PT ATI memiliki sebuah
                        program yang bernama JAGARAKSA (Jagung Garapan Rakyat Desa), yaitu salah satu program solusi
                        produktivitas pertanian jagung yang diselenggarakan oleh Hejotekno dan stakeholder terkait.
                    </p>
                    <h3 class="mb-4"><i>"Tanam Setiap Hari, Panen Setiap Hari"</i></h3>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Program Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Program</h6>
                <h1 class="mb-5">Jagaraksa</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <h4 class="mb-4">Kurangnya Produksi Jagung di Indonesia</h4>
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="<?= base_url('img/diagram1.png') ?>"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h4 class="mb-4">Jagaraksa Menjadi Solusi</h4>
                    <h6 class="text-primary">Rumah Tani</h6>
                    <img src="<?= base_url('img/rumah_tani.png') ?>" style="max-height: 150px">
                    <br><br>
                    <h6 class="text-primary">Agro Photovoltaic 600 Wp</h6>
                    <img src="<?= base_url('img/ap.png') ?>" style="max-height: 180px">
                </div>
            </div>
        </div>
    </div>
    <!-- Program End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Team</h6>
                <h1 class="mb-5">Meet Our Team</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <?php foreach ($tim as $person): ?>
                    <div class="col-lg-2 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="<?= base_url('img/' . $person->foto_tim) ?>" alt="<?= $person->nama_tim ?>">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                                <a class="btn btn-square mx-1" href="<?= $person->linkedin_tim ?>"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square mx-1" href="<?= $person->ig_tim ?>"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0"><?= $person->nama_tim ?></h5>
                                <small><?= $person->jabatan_tim ?></small>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <br>
            <br>
            <div class="row g-4">
                <?php foreach ($timdivisi as $divisi): ?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="<?= base_url('img/' . $divisi->foto_timdivisi) ?>" alt="<?= $divisi->nama_timdivisi ?>">
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0"><?= $divisi->nama_timdivisi ?></h5>
                                <small><?= $divisi->jabatan_timdivisi ?></small>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link" href="<?php echo site_url('C_Hejotekno/linkabout'); ?>">About Us</a>
                    <a class="btn btn-link" href="<?php echo site_url('C_Hejotekno/linkproduct'); ?>">Product</a>
                    <a class="btn btn-link" href="<?php echo site_url('C_Hejotekno/linkprogram'); ?>">Program</a>
                    <a class="btn btn-link" href="<?php echo site_url('C_Hejotekno/linkcontact'); ?>">Contact</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Kapur, Cibuntu, Kec. Bandung Kulon,
                        Kota Bandung, Jawa Barat 40212</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>002 9129102320 || 000 2324 39493</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@hejotech.co.id</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social"
                            href="https://www.instagram.com/hejotekno.indonesia/"><i
                                class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-outline-light btn-social"
                            href="https://www.youtube.com/@hejoteknotechnology7514"><i
                                class="fab fa-youtube fw-normal"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/hejotekno"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">PT AGRO TEKNO INDO</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> -->
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('lib/wow/wow.min.js'); ?>"></script>
    <script src="<?= base_url('lib/easing/easing.min.js'); ?>"></script>
    <script src="<?= base_url('lib/waypoints/waypoints.min.js'); ?>"></script>
    <script src="<?= base_url('lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?= base_url('lib/tempusdominus/js/moment.min.js'); ?>"></script>
    <script src="<?= base_url('lib/tempusdominus/js/moment-timezone.min.js'); ?>"></script>
    <script src="<?= base_url('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('js/main.js'); ?>"></script>
</body>

</html>