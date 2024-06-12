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
                <a href="<?= site_url('C_Hejotekno/linksignout'); ?>" class="btn btn-light rounded-pill py-2 px-4">Sign Out</a>

            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 ">
			<div class="container py-5">
				<div class="row justify-content-center py-5">
					<div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
						<h1 class="display-3 text-white animated slideInDown">Program</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb justify-content-center">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item text-white active" aria-current="page">Program</li>
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
                        <img class="img-fluid position-absolute w-100 h-100" src="<?= base_url('img/jagaraksa1.PNG') ?>" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="bg-white text-start text-primary pe-3">Tentang JAGARAKSA</h6>
                    <p class="mb-4">Project atau program yang dimiliki oleh PT ATI bernama JAGARAKSA (Jagung Garapan Rakyat Desa), yaitu salah satu program solusi produktivitas pertanian jagung yang diselenggarakan oleh Hejotekno dan stakeholder terkait.</p>
                    <p class="mb-4">JAGARAKSA sendiri memiliki arti  bahwa ketahanan negara berasal dari desa, desa kuat, negara kuat. Program tersebut memiliki tujuan utama untuk mengatasi beberapa kendala pertanian jagung yang mengakibatkan tidak terpenuhinya kebutuhan jagung nasional.</p>
                    
                </div>
            </div>
            <br><br><br>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <!-- <h6 class="bg-white text-start text-primary pe-3">Tentang JAGARAKSA</h6> -->
                    <p class="mb-4">Kendalanya adalah cuaca atau iklim, teknologi pertanian, kualitas benih, penanganan pasca panen, komunikasi dan distribusi. Maka dari itu PT ATI ingin mengatasi masalah tersebut dengan membuat cara menaikkan para petani kembali dengan menggunakan teknologi. </p>
                    <p class="mb-4">Teknologi yang ingin dikembangkan berupa aplikasi untuk tracking petani, penyiraman pertanian, dan penanganan pasca panen serta website yang menjual hasil produk panen. Informasi lebih lanjut, dapat di akses pada situs resmi mereka</p>
                    
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 450px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="<?= base_url('img/prod_jagung.PNG') ?>" alt="" style="object-fit: cover;">
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row g-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="bg-white text-center text-primary px-3">Siklus Ladang</h3>
                    <!-- <h3 class="mb-5">Pihak- pihak yang mendapatkan manfaat :</h3> -->
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <br>
                    <div class="position-relative h-100">
                        <img class="img-fluid" src="<?= base_url('img/siklus.PNG') ?>" alt="" style="max-width: 100%; max-height: 400px; object-fit: cover; display: block; margin-left: auto; margin-right: auto;">
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row g-5" style="margin-left: auto; margin-right: auto;">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 260px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-150 h-100" src="<?= base_url('img/jadwal.PNG') ?>" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="bg-white text-start text-primary pe-3">Program Solusi JAGARAKSA</h6>
                    <p class="mb-4">1 Jagaraksa = 50 Hektar</p>
                    <p class="mb-4">1 Blockchain = 4 Jagaraksa ( Setiap BulanTanam, Setiap Bulan Panen )</p>
                    <p class="mb-4">1 Estate = 30 Blockchain = 120 Jagaraksa ( Setiap Hari Tanam, Setiap Panen )</p>
                    
                </div>
            </div>
            <br><br>
            <div class="container-xxl py-5">
                <div class="container" >
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h3 class="bg-white text-center text-primary px-3">Skema Kerjasama</h3>
                        <h5 class="mb-5">Pihak- pihak yang mendapatkan manfaat :</h5>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                                    <h5>Pemilik Lahan </h5>
                                    <p>Sewa Lahan & Sharing Profit</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                                    <h5>Petani & Komunitas Lokal</h5>
                                    <p>Lahan Pekerjaan & Pasar Hasil Pertanian</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <i class="fa fa-3x fa-user text-primary mb-4"></i>
                                    <h5>Pemerintah Lokal</h5>
                                    <p>Pemasukan Pajak & Pengembangan Daerah</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                                    <h5>Manajemen Ladang</h5>
                                    <p>Sharing Profit</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                                    <h5>Investor</h5>
                                    <p>Keuntungan / Profit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row g-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="bg-white text-center text-primary px-3">Teknologi Pertanian JAGARAKSA</h3>
                    <!-- <h3 class="mb-5">Pihak- pihak yang mendapatkan manfaat :</h3> -->
                </div>
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="<?= base_url('img/rumah_tani.PNG') ?>" alt="" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h6 class="bg-white text-start text-primary pe-3">Kawasan Rumah Tani</h6>
                        <p class="mb-4">Rumah Tani JAGARAKSA yang akan dilengkapi solar panel sebagai “Supply Power” mandiri, Rumah Tani ini berfungsi sebagai sarana intergrasi dari seluruh kesatuan system dalam Program JAGARAKSA, yang di dalamnya akan berfungsi sebagai Mess, Kantor, Gudang, Pusat Pelatihan Jagung, Lab, Sumber air dsb.</p>
                        
                    </div>
                </div>
                <br>
                <div class="row g-5">
                    <div class="col g-5">
                        <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.3s">
                            <h6 class="bg-white text-start text-primary pe-3">Pengolahan Tanah</h6>
                            <p class="mb-4">Rumah Tani JAGARAKSA yang akan dilengkapi solar panel sebagai “Supply Power” mandiri, Rumah Tani ini berfungsi sebagai sarana intergrasi dari seluruh kesatuan system dalam Program JAGARAKSA, yang di dalamnya akan berfungsi sebagai Mess, Kantor, Gudang, Pusat Pelatihan Jagung, Lab, Sumber air dsb.</p>
                            <img class="img-fluid d-block mx-auto mt-3" src="<?= base_url('img/traktor_elektrik.PNG') ?>" alt="Logo" style="max-width:200px;">
                        </div>

                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="<?= base_url('img/traktor.PNG') ?>" alt="" style="object-fit: cover; ">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="<?= base_url('img/rotatanam.PNG') ?>" alt="" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h6 class="bg-white text-start text-primary pe-3">Pengolahan Tanah, Penanaman Bibit & Panen</h6>
                        <p class="mb-4">ROTATANAM merupakan mesin produksi PT Pindad (Persero) yang berfungsi untuk mengolah tanah sekaligus mencacah sisa jagung, dan gulma, serta mencampurnya dengan tanah, sehingga dapat meningkatkan kandungan bahan organik tanah. Rota Tanam ini juga dilengkapi dengan penyemprot decomposer.</p>
                        <p class="mb-4">Mesin rota tanam memiliki fungsi dan keunggulan sebagai berikut :
                        Pengolahan Tanah,
                        Penanaman biji-bijian (jagung, kedelai, dll),
                        Aplikasi pupuk cair (opsional),
                        Pelaksanaan pengolahan tanah, penanaman dan pemupukan    dapat dilakukan   secara bersamaan
                        </p>
                        
                    </div>
                </div>
                <br>
                <div class="row g-5">
                    <div class="col g-5">
                        <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.3s">
                            <h6 class="bg-white text-start text-primary pe-3">Perawatan</h6>
                            <p class="mb-4">Sistem irigasi tetes adalah jenis sistem irigasi mikro yang berpotensi menghemat air dan unsur hara dengan membiarkan air menetes secara perlahan ke akar tanaman, baik dari atas permukaan tanah maupun terpendam di bawah permukaan. Irigasi tetes melibatkan penempatan tabung dengan penghasil emisi di tanah di sepanjang sisi tanaman. Emitor perlahan-lahan meneteskan air ke tanah di zona akar. Karena tingkat kelembapan dijaga pada kisaran optimal, produktivitas dan kualitas tanaman meningkat. Selain itu, irigasi tetes:</p>
                            <ul>
                                <li>Mencegah penyakit dengan meminimalkan kontak air dengan daun, batang, dan buah tanaman.</li>
                                <li>Memungkinkan baris di antara tanaman tetap kering.</li>
                                <li>Meningkatkan akses dan mengurangi pertumbuhan gulma.</li>
                                <li>Menghemat waktu, uang, dan air karena sistemnya sangat efisien.</li>
                                <li>Mengurangi tenaga kerja, meningkatkan efektivitas di tanah yang tidak rata.</li>
                                <li>Mengurangi pencucian air dan nutrisi di bawah zona akar.</li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="<?= base_url('img/irigasi.PNG') ?>" alt="" style="object-fit: cover; ">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="<?= base_url('img/drone.PNG') ?>" alt="" style="object-fit: cover; ">
                        </div>
                    </div>
                    <div class="col g-5">
                        <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.3s">
                            <h6 class="bg-white text-start text-primary pe-3">Perawatan</h6>
                            <p class="mb-4">DR.ONE FARM, adalah Drone yang sedang kami kembangkan sebagai sistem kontrol perkebunan jagung yang dapat mengetahui laju pertumbuhan jagung. Apabila ada masalah pertumbuhan, maka drone akan melakukan penyiraman area jagung dengan cara yang tepat dan cepat.</p>
                            <img class="img-fluid d-block mx-auto mt-3" src="<?= base_url('img/drone_farm.PNG') ?>" alt="Logo" style="max-width:200px;">
                        </div>

                    </div>
                    
                </div>
                <br>
                <div class="row g-5">
                    <div class="col g-5">
                        <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.3s">
                            <h6 class="bg-white text-start text-primary pe-3">Penanganan Pasca Panen</h6>
                            <p class="mb-4">SYLO DRYER /ROTARY DRYER, teknologi pengering dan penyimpanan jagung pasca panen yang baik dan dapat mengondisikan tingkat kadar air jagung sesuai dengan permintaan konsumen.</p>
                        </div>

                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="<?= base_url('img/sylo_dryer.PNG') ?>" alt="" style="object-fit: cover; ">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="<?= base_url('img/taniheroes.PNG') ?>" alt="" style="object-fit: cover; max-width:300px ">
                        </div>
                    </div>
                    <div class="col g-5">
                        <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.3s">
                            <h6 class="bg-white text-start text-primary pe-3">Semua Tahapan Penanaman Hingga Panen Termonitor Dalam Satu Aplikasi</h6>
                            <p class="mb-4">Aplikasi Pertanian TaniHeroes adalah program notifikasi seluruh stakeholder terkait berbasis aplikasi untuk sistem pelaksanaan tugas dan pelaporan yang memastikan seluruh program rencana kerja berjalan baik dan tepat waktu.</p>
                            <img class="img-fluid d-block mx-auto mt-3" src="<?= base_url('img/taniheroes_logo.PNG') ?>" alt="Logo" style="max-width:200px;">
                        </div>

                    </div>
                    
                </div>
                <br>
                <div class="row g-5">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h3 class="bg-white text-center text-primary px-3">Sumber Energi Independent ENERGI BARU TERBARUKAN</h3>
                        <!-- <h3 class="mb-5">Pihak- pihak yang mendapatkan manfaat :</h3> -->
                    </div>
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                        <br>
                        <div class="position-relative h-100">
                            <img class="img-fluid" src="<?= base_url('img/sumber_energi_terbarukan.PNG') ?>" alt="" style="max-width: 100%; max-height: 400px; object-fit: cover; display: block; margin-left: auto; margin-right: auto;">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row g-5">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h3 class="bg-white text-center text-primary px-3">Pasar</h3>
                        <h6>Jagung adalah Komoditas Pertanian Utama, Karena Peraturan Pemerintah Zero Import</h6>
                        <!-- <h3 class="mb-5">Pihak- pihak yang mendapatkan manfaat :</h3> -->
                    </div>
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                        <br>
                        <div class="position-relative h-100">
                            <img class="img-fluid" src="<?= base_url('img/pasar.PNG') ?>" alt="" style="max-width: 100%; max-height: 400px; object-fit: cover; display: block; margin-left: auto; margin-right: auto;">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row g-5">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h3 class="bg-white text-center text-primary px-3">Strategic Partners</h3>
                        
                        <!-- <h3 class="mb-5">Pihak- pihak yang mendapatkan manfaat :</h3> -->
                    </div>
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                        <br>
                        <div class="position-relative h-100">
                            <img class="img-fluid" src="<?= base_url('img/startegic_partners.PNG') ?>" alt="" style="max-width: 100%; max-height: 400px; object-fit: cover; display: block; margin-left: auto; margin-right: auto;">
                        </div>
                    </div>
                </div>
            </div>
            
            <br><br>
            <!-- YouTube Video Embed -->
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <h3 style="text-align: center;">Video mengenai JAGARAKSA</h3>
                    <br>
                    <div class="position-relative h-100">
                        <iframe width="100%" height="400" src="https://www.youtube.com/embed/0PLHfVaS5dk?si=wvAKpp6VF2_2afB_" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

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