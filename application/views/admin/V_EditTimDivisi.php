<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HEJOTEKNO - PT ATI</title>
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
    <div class="container-fluid bg-primary position-relative p-2 py-5 mb-5">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <img src="<?= base_url('img/logo.png') ?>" alt="Logo" style="max-height: 30px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="<?php echo site_url('C_Admin/admin_dashboard'); ?>" class="nav-item nav-link hover">Admin</a>
                    <a href="<?php echo site_url('C_Admin/cruduser'); ?>" class="nav-item nav-link">User</a>
                    <a href="<?php echo site_url('C_Admin/crudproduk'); ?>" class="nav-item nav-link">Produk</a>
                    <a href="<?php echo site_url('C_Admin/crudtim'); ?>" class="nav-item nav-link">Tim</a>
                    <a href="<?php echo site_url('C_Admin/crudtimdivisi'); ?>" class="nav-item nav-link">Tim Divisi</a>
                    <a href="<?php echo site_url('C_Admin/crudcontact'); ?>" class="nav-item nav-link">Contact</a>
                    <a href="<?php echo site_url('C_Admin/crudinvoice'); ?>" class="nav-item nav-link">Invoice</a>
                </div>
                <a href="<?php echo site_url('C_Admin/signoutadmin'); ?>" class="btn btn-light rounded-pill py-2 px-4">Sign Out</a>
            </div>
        </nav>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Edit Form Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 style="text-align: center">Edit Tim Divisi</h2>
                    <br>
                    <form class="signup-form" id="signupForm"
                        action="<?php echo site_url('C_Admin/updatetimdivisi/' . $timdivisi->id_timdivisi); ?>" method="post">
                        <input type="hidden" name="id_timdivisi" value="<?php echo $timdivisi->id_timdivisi; ?>">
                        <div class="mb-3">
                            <label for="nama_timdivisi" class="form-label">Nama Tim Divisi</label>
                            <input type="text" class="form-control" id="nama_timdivisi" name="nama_timdivisi"
                                placeholder="Edit Nama Tim Divisi" value="<?php echo $timdivisi->nama_timdivisi; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="jabatan_timdivisi" class="form-label">Jabatan User</label>
                            <input type="text" class="form-control" id="jabatan_timdivisi" name="jabatan_timdivisi"
                                placeholder="Edit Jabatan Tim Divisi" value="<?php echo $timdivisi->jabatan_timdivisi; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="foto_timdivisi" class="form-label">Foto Tim Divisi</label>
                            <input type="file" class="form-control" id="foto_timdivisi" name="foto_timdivisi" required>
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="submit" value="Edit Tim Divisi" class="btn btn-primary btn-lg">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Edit Form End -->

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