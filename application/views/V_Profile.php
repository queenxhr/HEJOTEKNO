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
                    <a href="<?= site_url('C_Hejotekno/index2'); ?>" class="nav-item nav-link">Home</a>
                    <a href="<?= site_url('C_Hejotekno/linkabout2'); ?>" class="nav-item nav-link">About Us</a>
                    <a href="<?= site_url('C_Hejotekno/linkproduct2'); ?>" class="nav-item nav-link">Product</a>
                    <a href="<?= site_url('C_Hejotekno/linkprogram2'); ?>" class="nav-item nav-link">Program</a>
                    <a href="<?= site_url('C_Hejotekno/linktrolley'); ?>" class="nav-item nav-link">Trolley</a>
                    <a href="<?= site_url('C_Hejotekno/linkhistory'); ?>" class="nav-item nav-link">History Order</a>
                    <a href="<?= site_url('C_Hejotekno/linkcontact2'); ?>" class="nav-item nav-link">Contact</a>
                    <a href="<?= site_url('C_Hejotekno/linkprofil'); ?>" class="nav-item nav-link">Profile</a>
                </div>
                <a href="<?= site_url('C_Hejotekno/linksignout'); ?>" class="btn btn-light rounded-pill py-2 px-4">Sign
                    Out</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">User Profile</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">User Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- User Profile Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded p-5">
                        <h3 class="text-center mb-4">User Information</h3>
                        <?php if ($user): ?>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?= $user->username ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="nama_user" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama_user" name="nama_user" value="<?= $user->nama_user ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="email_user" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email_user" name="email_user" value="<?= $user->email_user ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="telp_user" class="form-label">No Telepon</label>
                                <input type="text" class="form-control" id="telp_user" name="telp_user" value="<?= $user->telp_user ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="alamat_user" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat_user" name="alamat_user" value="<?= $user->alamat_user ?>" readonly>
                            </div>
                            <!-- Edit Profile Button -->
                            <div class="text-center mt-4">
                                <a href="<?= site_url('C_Hejotekno/edit_profile'); ?>" class="btn btn-primary">Edit Profile</a>
                            </div>
                        <?php else: ?>
                            <p class="text-center text-danger">User data not found.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- User Profile End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link" href="<?php echo site_url('C_Hejotekno/linkabout2'); ?>">About Us</a>
                    <a class="btn btn-link" href="<?php echo site_url('C_Hejotekno/linkproduct2'); ?>">Product</a>
                    <a class="btn btn-link" href="<?php echo site_url('C_Hejotekno/linkprogram2'); ?>">Program</a>
                    <a class="btn btn-link" href="<?php echo site_url('C_Hejotekno/linktrolley'); ?>">Trolley</a>
                    <a class="btn btn-link" href="<?php echo site_url('C_Hejotekno/linkhistory'); ?>">History Order</a>
                    <a class="btn btn-link" href="<?php echo site_url('C_Hejotekno/linkcontact2'); ?>">Contact</a>
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
