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
                <img src="<?= base_url('img/logo.png') ?>" alt="Logo" style="max-height: 30px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="<?php echo site_url('C_Admin/admin_dashboard'); ?>" class="nav-item nav-link">Admin</a>
                    <a href="<?php echo site_url('C_Admin/cruduser'); ?>" class="nav-item nav-link">User</a>
                    <a href="<?php echo site_url('C_Admin/crudproduk'); ?>" class="nav-item nav-link">Produk</a>
                    <a href="<?php echo site_url('C_Admin/crudtim'); ?>" class="nav-item nav-link hover">Tim</a>
                    <a href="<?php echo site_url('C_Admin/crudtimdivisi'); ?>" class="nav-item nav-link">Tim Divisi</a>
                    <a href="<?php echo site_url('C_Admin/crudcontact'); ?>" class="nav-item nav-link">Contact</a>
                    <a href="<?php echo site_url('C_Admin/crudinvoice'); ?>" class="nav-item nav-link">Invoice</a>
                </div>
                <a href="<?php echo site_url('C_Admin/signoutadmin'); ?>" class="btn btn-light rounded-pill py-2 px-4">Sign Out</a>
            </div>
        </nav>
    </div>
    <!-- Navbar & Hero End -->

    <!-- add invoice Form Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 style="text-align: center">Add Invoice</h2>
                    <br>
                    <form id="addinvoiceForm" action="<?= site_url('C_Admin/createInvoice'); ?>" method="post">
                        <input type="hidden" name="id_invoice" value="<?= $invoice->id_invoice; ?>">
                        <div class="mb-3">
                            <label for="nama_user" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_user" name="nama_user" value="<?= $invoice->nama_user; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="email_user" class="form-label">Email</label>
                            <textarea class="form-control" id="email_user" name="email_user" rows="4" required><?= $invoice->email_user; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="telp_user" class="form-label">Telepon</label>
                            <input type="text" class="form-control" id="telp_user" name="telp_user" value="<?= $invoice->telp_user; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat_user" class="form-label">Alamat</label>
                            <input type="email" class="form-control" id="alamat_user" name="alamat_user" value="<?= $invoice->alamat_user; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama_produk" class="form-label">Item</label>
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= $invoice->nama_produk; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="tgl_invoice" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tgl_invoice" name="tgl_invoice" value="<?= $invoice->tgl_invoice; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="total_invoice" class="form-label">Tanggal</label>
                            <input type="text" class="form-control" id="total_invoice" name="total_invoice" value="<?= $invoice->total_invoice; ?>" required>
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="submit" value="Add Invoice" class="btn btn-primary btn-lg">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- add invoice Form End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Program</a>
                    <a class="btn btn-link" href="">Product</a>
                    <a class="btn btn-link" href="">Trolley</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Kapur, Cibuntu, Kec. Bandung Kulon,
                        Kota Bandung, Jawa Barat 40212</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>002 9129102320 || 000 2324 39493</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@hejotech.co.id</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
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

                        <!--/*** This template is free as long as you keep the footer author’s cradd link/attribution link/backlink. If you'd like to use the template without the footer author’s cradd link/attribution link/backlink, you can purchase the Cradd Removal License from "https://htmlcodex.com/cradd-removal". Thank you for your support. ***/-->
                        <!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> -->
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

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
