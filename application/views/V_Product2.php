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
        <img src="<?= base_url('img/logo.png') ?>" alt="Logo" style="max-height: 30px">
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
        <a href="<?= site_url('C_Hejotekno/linksignout'); ?>" class="btn btn-light rounded-pill py-2 px-4">Sign Out</a>

      </div>
    </nav>

    <div class="container-fluid bg-primary py-5 mb-5">
      <div class="container py-5">
        <div class="row justify-content-center py-5">
          <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-3 text-white animated slideInDown">Product</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Product</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Navbar & Hero End -->

  <!-- Product Section Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Product</h6>
        <h1 class="mb-5">Our Product</h1>
      </div>
      <div class="row g-4 justify-content-center">
        <?php foreach ($produk as $item): ?>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="package-item">
              <div class="overflow-hidden">
                <img class="img-fluid" src="<?= base_url('img/' . $item->foto_produk) ?>" alt="<?= $item->nama_produk ?>">
              </div>
              <div class="text-center p-4">
                <h3 class="mb-0"><?= $item->nama_produk ?></h3>
                <h4 class="mb-0">Rp <?= number_format($item->harga_produk, 0, ',', '.') ?>/kg</h4>
                <br>
                <p class="text-justify"><?= $item->deskripsi_produk ?></p>
                <div class="d-flex justify-content-center mb-2">
                  <a href="<?= site_url('C_Hejotekno/linkproduct/' . $item->id_produk) ?>" <a href="#"
                    data-id="<?= $item->id_produk ?>" class="btn btn-sm btn-primary px-3 border-end read-more"
                    style="border-radius: 30px 0 0 30px;">Read More</a>
                  <a href="<?= site_url('C_Hejotekno/linksignin') ?>" class="btn btn-sm btn-primary px-3"
                    style="border-radius: 0 30px 30px 0;">Order Now</a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <!-- Product Section End -->

  <!-- Download PDF Section Start -->
  <!-- Download PDF Section Start -->
  <div class="container-xxl py-5 bg-light">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <!-- Menambahkan justify-content-center untuk menengahkan horizontalnya -->
        <!-- Konten teks dan gambar -->
        <div class="col-md-6 text-center wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="section-title bg-white text-center text-primary px-3">Download</h6>
          <h1 class="mb-5">Report Of Analysis</h1>
          <!-- Gambar preview PDF -->
          <div class="mb-5">
            <img src="<?= base_url('img/previewpdf.jpg') ?>" alt="Preview PDF" class="img-fluid">
          </div>
          <div class="mb-5">
            <p>Download our Report Of Analysis in PDF format.</p>
            <a href="<?= base_url('application/uploads/pdf/PDFPRODUCT.pdf') ?>" class="btn btn-primary py-3 px-5"
              download="PDFPRODUCT.pdf">Download PDF</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Download PDF Section End -->

  <!-- Modal for Product Details -->
  <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="productModalLabel">Product Detail</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6">
              <img class="img-fluid" src="" alt="">
            </div>
            <div class="col-lg-6">
              <h3></h3>
              <h4></h4>
              <p></p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal End -->


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
          <a class="btn btn-link" href="">FAQs & Help</a>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="text-white mb-3">Contact</h4>
          <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Kapur, Cibuntu, Kec. Bandung Kulon,
            Kota Bandung, Jawa Barat 40212</p>
          <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>002 9129102320 || 000 2324 39493</p>
          <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@hejotech.co.id</p>
          <div class="d-flex pt-2">
            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/hejotekno.indonesia/"><i
                class="fab fa-instagram fw-normal"></i></a>
            <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@hejoteknotechnology7514"><i
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


  <!-- Template Javascript -->
  <script src="<?= base_url('js/main.js'); ?>"></script>

  <!-- Tambahkan di bagian header -->
  <!-- Tambahkan di bagian header -->
  <script>
    $(document).ready(function () {
      $('.read-more').click(function (e) {
        e.preventDefault();
        var productId = $(this).data('id');
        $.ajax({
          type: 'GET',
          url: '<?= site_url('C_Hejotekno/getProductDetail/') ?>' + productId,
          dataType: 'json',
          success: function (response) {
            // Isi modal dengan detail produk
            $('#productModal .modal-title').text(response.nama_produk);
            $('#productModal .modal-body img').attr('src', '<?= base_url('img/') ?>' + response.foto_produk);
            $('#productModal .modal-body h3').text(response.nama_produk);
            $('#productModal .modal-body h4').text('Rp ' + new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(response.harga_produk));
            $('#productModal .modal-body p').text(response.deskripsi_produk);
            // Tampilkan modal
            $('#productModal').modal('show');
          },
          error: function (xhr, status, error) {
            console.error(error);
          }
        });
      });
    });
  </script>


</body>

</html>