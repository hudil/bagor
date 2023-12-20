<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sate Komoh - Home Page</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets/web/assets/img/') ?>satekomohico.png" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/web/') ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('assets/web/') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/web/') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/web/') ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/web/') ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('assets/web/') ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/web/') ?>assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/web/') ?>assets/dflip/css/dflip.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/web/') ?>assets/dflip/css/themify-icons.min.css" type="text/css">
    <style>
        .df-ui-custom-button1 {
            width: max-content;
        }

        ._df_thumb {
            width: 240px;
            height: 300px;
        }
    </style>

    <!-- =======================================================
  * Template Name: Bagor
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Author: Miftahul Huda, A.Md.T
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="<?= base_url('assets/web/') ?>assets/img/sate komoh.png" alt="">
                <span>Sate Komoh</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#books">Books</a></li>
                    <li><a class="nav-link scrollto" href="#galeri">Galeri</a></li>
                    <li><a class="nav-link scrollto" href="#team">Tim</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    <li><a class="getstarted scrollto" href="<?= base_url('auth') ?>"><i
                                class="bi bi-shield-lock-fill"></i>&nbsp;Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/web/') ?>assets/img/slider/payung.jpeg" class="d-block w-100">
            </div>
        </div>
    </div>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Selamat Datang di Website Sate Komoh</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Website Sate Komoh menyajikan berbagai informasi pelayanan Bagian Organisasi kepada Perangkat Daerah di Pemerintah Kota Pasuruan.</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="<?= base_url('auth') ?>"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Get Started</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="<?= base_url('assets/web/') ?>assets/img/features.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h3>Apasih sate komoh itu?</h3>
                            <h2>Sate Komoh merupakan singkatan dari Sistem pelAyanan Terpadu, Kolaboratif, Masih dan
                                Holistik.</h2>
                            <p>
                                Sistem ini dibuat untuk memudahkan pelayanan bagian organisasi terhadap halayak umum
                                maupun perangkat daerah.
                            </p>
                            <!-- <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div> -->
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="<?= base_url('assets/web/') ?>assets/img/about.png" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

        <section id="books" class="books">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Books</p>
                </header>

                <div class="row gx-0">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="hero-content">
                            <div class="_df_thumb" source="<?= base_url('assets/web/') ?>ebook/kematangan.pdf"
                                thumb="<?= base_url('assets/web/') ?>ebook/cover/kematangan.jpg">
                                Tingkat Kematangan Organisasi
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="hero-content">
                            <div class="_df_thumb" source="<?= base_url('assets/web/') ?>ebook/anjab.pdf"
                                thumb="<?= base_url('assets/web/') ?>ebook/cover/anjab.jpg">
                                Analisis Jabatan
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="hero-content">
                            <div class="_df_thumb" source="<?= base_url('assets/web/') ?>ebook/sotk.pdf"
                                thumb="<?= base_url('assets/web/') ?>ebook/cover/sotk.jpg">
                                Susunan Perangkat Daerah
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section><!-- End Books Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="galeri" class="portfolio">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Kegiatan Bagian Organisasi</p>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <!-- <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li> -->
                        </ul>
                    </div>
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('assets/web/') ?>uploads/kegiatan/pertama.jpeg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Rapat</h4>
                                <p>Awal Pembahasan Sistem Kerja</p>
                                <div class="portfolio-links">
                                    <a href="<?= base_url('assets/web/') ?>uploads/kegiatan/pertama.jpeg" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Rapat Awal Pembahasan Sistem Kerja"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('assets/web/') ?>uploads/kegiatan/kedua.jpeg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Rapat</h4>
                                <p>PermenPAN RB 45 Tahun 2022 tentang Jabatan Pelaksana</p>
                                <div class="portfolio-links">
                                    <a href="<?= base_url('assets/web/') ?>uploads/kegiatan/kedua.jpeg" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Rapat PermenPAN RB 45 Tahun 2022 tentang Jabatan Pelaksana"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('assets/web/') ?>uploads/kegiatan/ketiga.jpeg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Rapat</h4>
                                <p>Pembahasan Pembentukan UPTD</p>
                                <div class="portfolio-links">
                                    <a href="<?= base_url('assets/web/') ?>uploads/kegiatan/ketiga.jpeg" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Rapat Pembahasan Pembentukan UPTD"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('assets/web/') ?>uploads/kegiatan/keempat.jpeg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Rapat</h4>
                                <p>Evaluasi SPBE Pemerintah Kota Pasuruan Tahun 2023</p>
                                <div class="portfolio-links">
                                    <a href="<?= base_url('assets/web/') ?>uploads/kegiatan/keempat.jpeg" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Rapat Evaluasi SPBE Pemerintah Kota Pasuruan Tahun 2023"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('assets/web/') ?>uploads/kegiatan/kelima.jpeg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Rapat</h4>
                                <p>Evaluasi RB</p>
                                <div class="portfolio-links">
                                    <a href="<?= base_url('assets/web/') ?>uploads/kegiatan/kelima.jpeg" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Rapat Evaluasi RB"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('assets/web/') ?>uploads/kegiatan/keenam.jpeg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Rapat</h4>
                                <p>FEKPPP</p>
                                <div class="portfolio-links">
                                    <a href="<?= base_url('assets/web/') ?>uploads/kegiatan/keenam.jpeg" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Rapat FEKPPP"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('assets/web/') ?>uploads/kegiatan/ketuju.jpeg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Workshop</h4>
                                <p>Aktivasi Budaya Kerja Core Values ASN Berakhlak</p>
                                <div class="portfolio-links">
                                    <a href="<?= base_url('assets/web/') ?>uploads/kegiatan/ketuju.jpeg" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Wotkshop Aktivasi Budaya Kerja Core Values ASN Berakhlak"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('assets/web/') ?>uploads/kegiatan/kedelapan.jpeg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Penghargaan</h4>
                                <p>Sebagai Lembaga Terbina</p>
                                <div class="portfolio-links">
                                    <a href="<?= base_url('assets/web/') ?>uploads/kegiatan/kedelapan.jpeg" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Penghargaan Sebagai Lembaga Terbina"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('assets/web/') ?>uploads/kegiatan/kesembilan.jpeg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Sosialisasi</h4>
                                <p>Kolabik 2023</p>
                                <div class="portfolio-links">
                                    <a href="<?= base_url('assets/web/') ?>uploads/kegiatan/kesembilan2.jpeg" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Sosialisasi Kolabik 2023"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Tim Bagor</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?= base_url('assets/web/') ?>uploads/tim/cindy.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <!-- <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a> -->
                                    <a href="https://www.instagram.com/cindytrisiwiyanti/"><i class="bi bi-instagram"></i></a>
                                    <!-- <a href=""><i class="bi bi-linkedin"></i></a> -->
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Cindy Tri Siwiyanti, S.H., M.Hum.</h4>
                                <span>Kepala Bagian</span>
                                <!-- <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima
                                    suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?= base_url('assets/web/') ?>uploads/tim/dwiki.jpeg" class="img-fluid" alt="">
                                <div class="social">
                                    <!-- <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a> -->
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Dwiki Raisaty, S.H.</h4>
                                <span>Kepala Subag Kelembagaan dan Analisis Jabatan</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?= base_url('assets/web/') ?>uploads/tim/bu dini.jpeg" class="img-fluid" alt="">
                                <div class="social">
                                    <!-- <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a> -->
                                    <a href="https://www.instagram.com/dini_a_lukman/"><i class="bi bi-instagram"></i></a>
                                    <!-- <a href=""><i class="bi bi-linkedin"></i></a> -->
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Dini Apriliani, S.E.</h4>
                                <span>Kepala Subag Kinerja dan Reformasi Birokrasi</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?= base_url('assets/web/') ?>uploads/tim/pak fudi.jpeg" class="img-fluid" alt="">
                                <div class="social">
                                    <!-- <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a> -->
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Wakhfudi Hidayat, S.Sos.</h4>
                                <span>Kepala Subag Pelayanan Publik dan Tata Laksana</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?= base_url('assets/web/') ?>uploads/tim/shela.jpeg" class="img-fluid" alt="">
                                <div class="social">
                                    <!-- <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a> -->
                                    <a href="https://www.instagram.com/shellawahyuu/"><i class="bi bi-instagram"></i></a>
                                    <!-- <a href=""><i class="bi bi-linkedin"></i></a> -->
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Shella W.Tyas., S.STP</h4>
                                <span>Analisis Akuntabilitas Kinerja Aparatur</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?= base_url('assets/web/') ?>uploads/tim/susi.jpeg" class="img-fluid" alt="">
                                <div class="social">
                                    <!-- <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a> -->
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Susy Rahayu, S.H.</h4>
                                <span>Pengadministrasi Umum</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?= base_url('assets/web/') ?>uploads/tim/bu sari.jpeg" class="img-fluid" alt="">
                                <div class="social">
                                    <!-- <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a> -->
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Wiwin Djohansari</h4>
                                <span>Analis Jabatan</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?= base_url('assets/web/') ?>uploads/tim/nophoto.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <!-- <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a> -->
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Amat Amir</h4>
                                <span>Pengadministrasi Umum</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">

                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?= base_url('assets/web/') ?>uploads/tim/nophoto.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <!-- <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a> -->
                                    <a href="https://www.instagram.com/agoengfirmansyah13/"><i class="bi bi-instagram"></i></a>
                                    <!-- <a href=""><i class="bi bi-linkedin"></i></a> -->
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Agung Firmansyah</h4>
                                <span>Pengadministrasian Umum</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?= base_url('assets/web/') ?>assets/img/team/hudil.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="https://www.instagram.com/mfthul.hd/" target="_blank"><i
                                            class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Miftahul Huda, A.Md.T</h4>
                                <span>Pranata Komputer</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">

                    </div>
                </div>

            </div>

        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Kontak Kami</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-12">

                        <div class="row gy-4">
                            <div class="col-md-3">
                                <div class="info-box">
                                    <i class="bi bi-geo-fill" style="color: red"></i>
                                    <h3 style="color: #700000">Alamat</h3>
                                    <p>Jalan Pahlawan No. 28,<br>Pasuruan, 67122<br>Jawa Timur</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="info-box">
                                    <i class="bi bi-telephone-fill" style="color: red"></i>
                                    <h3 style="color: #700000">Telpon</h3>
                                    <p>(0343) 426919<br>(0343) 426604</p> <br>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="info-box">
                                    <i class="bi bi-envelope-at-fill" style="color: red"></i>
                                    <h3 style="color: #700000">Email</h3>
                                    <p>organisasi@pasuruankota.go.id</p> <br> <br>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="info-box">
                                    <i class="bi bi-clock" style="color: red"></i>
                                    <h3 style="color: #700000">Jam Kerja</h3>
                                    <p>Senin - Jum'at<br>07:30AM - 03:30PM</p> <br>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="<?= base_url('assets/web/') ?>assets/img/satekomoh.png" alt="">
                            <span style="color: #D91919">Sate Komoh</span>
                        </a>
                        <p>Sistem pelAyanan Terpadu, Kolaboratif, Masif dan Holistik.</p>
                        <div class="social-links mt-3">
                            <a href="https://www.instagram.com/bag_organisasi_kopas/" class="instagram"
                                target="_blank"><i class="bi bi-instagram" style="color: #f7057a;"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        &nbsp;
                        <!-- <h4>Link Bermanfaat</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Beranda</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Tentang</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Aplikasi</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Galeri</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Tim</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Blog</a></li>
                        </ul> -->
                    </div>
                    
                    <div class="col-lg-2 col-6 footer-links">
                        <h4>&nbsp;</h4>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4 style="color: #D91919">Kontak Kami</h4>
                        <p>
                            <strong><i class="bi bi-geo-alt-fill text-danger"></i> :</strong> Jalan Pahlawan No.28 <br>
                            Pasuruan, 67122<br>
                            Jawa Timur <br><br>
                            <strong><i class="bi bi-telephone-fill text-secondary"></i> :</strong> (0343) 426919,
                            426604<br>
                            <strong><i class="bi bi-envelope-fill"></i> :</strong> organisasi@pasuruankota.go.id<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span style="color: #D91919">Bagor</span></strong> Kota Pasuruan <i class="bi bi-emoji-heart-eyes"
                    style="color: #f7057a"></i>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets/web/') ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url('assets/web/') ?>assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url('assets/web/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/web/') ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url('assets/web/') ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('assets/web/') ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url('assets/web/') ?>assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets/web/') ?>assets/js/main.js"></script>

    <!-- jQuery Lib -->
    <!-- <script src="assets/js/vendor/jquery-1.12.4.min.js"></script> -->

    <script src="<?= base_url('assets/web/') ?>assets/dflip/js/libs/jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/web/') ?>assets/dflip/js/dflip.min.js" type="text/javascript"></script>

</body>

</html>