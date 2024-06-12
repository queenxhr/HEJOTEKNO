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
    <div class="container-fluid position-relative p-0">

        <div class="container-fluid bg-primary py-5 mb-5 ">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Sign Up</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Sign Up Form Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 style="text-align: center">Silahkan buat akun</h2>
                    <br>
                    <form class="signup-form" id="signupForm"
                        action="<?php echo site_url('C_Admin/action_signup_admin'); ?>" method="post">
                        <div class="mb-3">
                            <label for="nama_admin" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama_admin" name="nama_admin"
                                placeholder="Masukkan Nama Anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="telp_admin" class="form-label">No. HP</label>
                            <input type="text" class="form-control" id="telp_admin" name="telp_admin"
                                placeholder="Masukkan No. HP Anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="email_admin" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email_admin" name="email_admin"
                                placeholder="Masukkan Email Anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="username_admin" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username_admin" name="username_admin"
                                placeholder="Buat username" required>
                        </div>
                        <div class="mb-3">
                            <label for="pass_admin" class="form-label">Password</label>
                            <div class="input-group">

                                <input type="password" class="form-control" id="pass_admin" name="pass_admin"
                                    placeholder="Buat Password" required minlength="8">
                                <button class="btn btn-outline-secondary" type="button"
                                    id="togglePassword">Show</button>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <!-- <input type="submit" value="Kirim" class="btn btn-primary btn-lg"> -->
                            <input type="submit" value="Sign Up" class="btn btn-primary btn-lg">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up Form End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script>
        function confirmSignup() {
            if (confirm("Yakin untuk membuat akun?")) {
                // Logic untuk proses pendaftaran akun
                alert("Akun berhasil dibuat!");
            }
        }
    </script>
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('pass_admin');

        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'pass_admin' ? 'text' : 'pass_admin';
            password.setAttribute('type', type);
            this.textContent = type === 'pass_admin' ? 'Show' : 'Hide';
        });
    </script>
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