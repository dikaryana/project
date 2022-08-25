<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Indonesia Culture</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- Google Fonts -->


    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/vendor/');?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/');?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/');?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/');?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/');?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/vendor/');?>assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">Indonesian Culture </a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/hero" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Explore</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li class="dropdown"><a href="<?= base_url('auth');?>"><span>Login</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?= base_url('auth');?>">Login </>
                            </li>
                            <li><a href="<?= base_url('auth/registration');?>">Sign Up</a></li>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="clearfix">
        <div class="container d-flex h-100">
            <div class="row justify-content-center align-self-center" data-aos="fade-up">
                <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
                    <h2>Explore our destination<br>for Your <span>holiday!</span></h2>
                    <div>
                        <a href="#services" class="btn-get-started scrollto">Explore!!</a>
                    </div>
                </div>

                <div class="col-lg-6 intro-img order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">

                </div>
            </div>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row">

                    <div class="col-lg-5 col-md-6">
                        <div class="about-img" data-aos="fade-right" data-aos-delay="100">
                            <img src="https://dm0qx8t0i9gc9.cloudfront.net/thumbnails/video/Bd9s4Kqqfjfco3ol7/videoblocks-cirebon-west-java-indonesia-cirebonese-mask-dance-tari-topeng-festival-celebration-portrait-of-indonesian-girls-smiling-to-camera_rzyx3sayk_thumbnail-1080_01.png"
                                alt=" tari topeng">
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-6">
                        <div class="about-content" data-aos="fade-left" data-aos-delay="100">
                            <h2>About Us</h2>
                            <h3>Bhineka Tunggal Ika.</h3>
                            <p>Kebudayaan adalah salah satu hal yang melekat jika berbicara tentang Indonesia. Setiap
                                daerah memiliki kebudayaan masing masing yang unik dan hal itu yang membuat indonesi
                                menjadi beragam.</p>
                            <p>Indonesian Culture adalah website informatif tentang kebudayaan Indonesia, yang akan
                                membahas.</p>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> Sejarah keragaman kebudayaan, pengetahuan tentang
                                    keragaman kebudayaan.</li>
                                <li><i class="bi bi-check-circle"></i> Proses pembuatan atau proses adat budaya
                                    setempat.</li>
                                <li><i class="bi bi-check-circle"></i> Kegiatan itu terlaksana.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- End About Section -->

        <!-- Services Section-->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3>Explore</h3>
                    <p>Let's explore Indonesian as you like!.</p>
                </header>

                <div class="row g-5">
                    <?php foreach ($article as $a): ?>
                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">

                        <div class="box">
                            <img src="https://asset.kompas.com/data/photo/2014/03/11/1038059pasola-1780x390.jpg"
                                style="width:15rem;">
                            <h4 class="title"><?= $a->title?>
                                <p class="text"><small class="text-muted-light"><?= $a->created_at?></small></p>
                                </class=>
                                <a><?= $a->kategori?></a>
                            </h4>


                        </div>
                    </div>


                    <?php endforeach?>
                    <a href="<?= base_url('Web/artikel')?>" type="button" class="btn btn-link " role="button">Membaca
                        lebih Lanjut</a>
                    <!-- =======
                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="box">
                            <div class="icon" style="background: #eafde7;"><i class="bi bi-binoculars"
                                    style="color:#41cf2e;"></i></div>
                            <h4 class="title"><a href="konten/maluku.html">Maluku</a></h4>
                            <p class="description">Maluku adalah sebuah provinsi yang meliputi bagian selatan Kepulauan
                                Maluku, Indonesia. Provinsi ini berbatasan dengan Laut Seram di Utara, Samudra Hindia
                                dan Laut Arafura di Selatan, Papua di Timur, dan Sulawesi di Barat.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <div class="icon" style="background: #eafde7;"><i class="bi bi-binoculars"
                                    style="color:#e98e06;"></i></div>
                            <h4 class="title"><a href="konten/papua.html">Papua</a></h4>
                            <p class="description">Papua adalah provinsi yang terletak di bagian tengah Pulau Papua atau
                                bagian paling timur wilayah Papua milik Indonesia. Belahan timurnya merupakan negara
                                Papua Nugini. Provinsi Papua sebelumnya bernama Irian Jaya yang mencakup seluruh wilayah
                                Pulau Papua.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200"">
        <div class=" box">
                        <div class="icon" style="background: #e1eeff;"><i class="bi bi-brightness-high"
                                style="color: #2282ff;"></i></div>
                        <h4 class="title"><a href="konten/jawa.html">Jawa</a></h4>
                        <p class="description">Jawa adalah sebuah pulau di Indonesia yang terletak di kepulauan Sunda
                            Besar dan merupakan pulau terluas ke-13 di dunia. Jumlah penduduk di Pulau Jawa sekitar 150
                            juta. Pulau Jawa dihuni oleh 60% total populasi Indonesia yang mengakibatkan jawa adalah
                            salahsatu pulau terpadat di indonesia.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box">
                        <div class="icon" style="background: #ecebff;"><i class="bi bi-calendar4-week"
                                style="color: #8660fe;"></i></div>
                        <h4 class="title"><a href="konten/bali.html">Bali</a></h4>
                        <p class="description">Bali adalah sebuah provinsi di Indonesia yang ibu kotanya bernama
                            Denpasar. Provinsi Bali terletak di bagian barat Kepulauan Nusa Tenggara.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box">
                        <div class="icon" style="background: #eafde7;"><i class="bi bi-clipboard-check"
                                style="color:#41cf2e;"></i></div>
                        <h4 class="title"><a href="konten/sulawesi.html">sulawesi</a></h4>
                        <p class="description">Sulawesi memiliki luas 180.681 km² dengan biasa dikenal dengan nama
                            celebes, dan termasuk salah satu dari sunda besar, banyak sekali suku dan budaya yang ada
                            disana.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box">
                        <div class="icon" style="background: #fff0da;"><i class="bi bi-award-fill"
                                style="color: #8660fe;"></i></div>
                        <h4 class="title"><a href="konten/kalimantan.html">Kalimantan</a></h4>
                        <p class="description">Kalimantan adalah salah satu pulau terbesar dan terluas yang ada di
                            Indonesia, pulau kalimantan juga dikenal dengan nama borneo, dipulau ini mencakup 3 negara.
                            iyaps, Indonesia, malaysia dan Brunei darusalam.</p>
                    </div>
                </div>

            </div>

            </div>

        </section> End Services Section -->

                    <!-- ======= Why Us Section ======= -->
                    <section id="why-us" class="why-us">
                        <div class="container-fluid" data-aos="fade-up">

                            <header class="section-header">
                                <h3>Why to indonesian explore?</h3>
                                <p>Explore the unique culture in Indonesia Now!!.</p>
                            </header>

                            <div class="row">


                                <div class="col-lg-6">
                                    <div class="why-us-content">
                                        <div class="features clearfix" data-aos="fade-up" data-aos-delay="100">
                                            <i class="bi bi-bookmarks" style="color: #f058dc;"></i>
                                            <p>Indonesia adalah miniatur surga, kenapa? Indonesia memiliki banyak sekali
                                                tempat
                                                indah mulai dari laut, bahkan sampai dataran tertinggi di negeri ini .
                                            </p>
                                        </div>

                                        <div class="features clearfix" data-aos="fade-up" data-aos-delay="200">
                                            <i class="bi bi-box-seam" style="color: #ffb774;"></i>
                                            <p>
                                                Selain daerah indonesia yang indah, indonesia bisa dijadikan miniatur
                                                surga karena
                                                kulinernya. Setiap daerah memiliki makanan khasnya dan terkenal enaknya,
                                                jadi tidak
                                                salah jika menjelajahi indonesia sekalian memanjakan lidah dengan
                                                masakan nusantara.
                                            </p>
                                        </div>

                                        <div class="features clearfix" data-aos="fade-up" data-aos-delay="300">
                                            <i class="bi bi-card-checklist" style="color: #589af1;"></i>
                                            <p>
                                                Letak geografis dan kuliner sudah, lalu apalagi yang ada di Indonesia ?
                                                budaya ramah
                                                tamah mungkin salah satunya, orang indonesia terkenal ramah baik untuk
                                                warga urban,
                                                turis lokal dan bahkan turis mancannegara.
                                                tapi sayangnya disini tidak membahas tentang wisata kuliner. selamat
                                                berkunjung di
                                                referensi lain tentang wisata kuliner.
                                            </p>
                                        </div>


                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="container">
                            <div class="row counters" data-aos="fade-up" data-aos-delay="100">

                                <div class="col-lg-3 col-6 text-center">
                                    <span data-purecounter-start="0" data-purecounter-end="17000"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p>pulau</p>
                                </div>

                                <div class="col-lg-3 col-6 text-center">
                                    <span data-purecounter-start="0" data-purecounter-end="1340"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Suku Bangsa</p>
                                </div>

                                <div class="col-lg-3 col-6 text-center">
                                    <span data-purecounter-start="0" data-purecounter-end="6"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Agama</p>
                                </div>

                                <div class="col-lg-3 col-6 text-center">
                                    <span data-purecounter-start="0" data-purecounter-end="715"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Bahasa </p>
                                </div>

                            </div>

                        </div>
                    </section><!-- End Why Us Section -->

                    <!-- ======= Testimonials Section ======= -->
                    <section id="testimonials" class="testimonials">
                        <div class="container" data-aos="zoom-in">

                            <header class="section-header">
                                <h3>Destinasi Nasional</h3>
                                <p>Beberapa destinasi nasional rekomandasi kementrian</p>
                            </header>

                            <div class="row justify-content-center">
                                <div class="col-lg-8">

                                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                                        <div class="swiper-wrapper">

                                            <div class="swiper-slide">
                                                <div class="testimonial-item">
                                                    <img src="<?= base_url('assets/vendor/');?>assets/img/danau toba.jpg"
                                                        class="testimonial-img" alt="">
                                                    <h3>Danau Toba</h3>
                                                    <h4>Sumatera Utara</h4>
                                                    <p>Danau Toba adalah sebuah danau tekto-vulkanik dengan ukuran
                                                        panjang 100
                                                        kilometer dan lebar 30 kilometer & merukan danau terbesar di
                                                        Asia tenggara.
                                                    </p>
                                                </div>
                                            </div><!-- End  item -->

                                            <div class="swiper-slide">
                                                <div class="testimonial-item">
                                                    <img src="<?= base_url('assets/vendor/');?>assets/img/borobudur.jpg"
                                                        class="testimonial-img" alt="">
                                                    <h3>Candi Borobudur</h3>
                                                    <h4>Magelang</h4>
                                                    <p>
                                                        salah satu warisan budaya yang masih dirawat dengan baik hingga
                                                        sekarang.
                                                        Bukan hanya sebagai tempat wisata, candi bercorak Budha ini juga
                                                        sering
                                                        dijadikan tempat peringatan hari besar Waisak oleh para biksu
                                                        dan umat Budha
                                                        di Indonesia..
                                                    </p>
                                                </div>
                                            </div><!-- End  item -->

                                            <div class="swiper-slide">
                                                <div class="testimonial-item">
                                                    <img src="<?= base_url('assets/vendor/');?>assets/img/bromo.jpg"
                                                        class="testimonial-img" alt="">
                                                    <h3>Kawasan Bromo</h3>
                                                    <h4>Kab. Malang, Kab. Probolinggo, Kab. Lumajang, dan Kab. Pasuruan
                                                    </h4>
                                                    <p>
                                                        Gunung Bromo adalah gunung berapi aktif dengan ketinggian 2.329
                                                        mdpl yang
                                                        terdapat di Jawa Timur. Gunung ini dikelilingi oleh lautan pasir
                                                        bersih atau
                                                        kaldera dengan luas 10 km persegi.
                                                    </p>
                                                </div>
                                            </div><!-- End  item -->

                                            <div class="swiper-slide">
                                                <div class="testimonial-item">
                                                    <img src="<?= base_url('assets/vendor/');?>assets/img/Tanjungkelayang.jpg"
                                                        class="testimonial-img" alt="">
                                                    <h3>Tanjung Kelayang</h3>
                                                    <h4>Bangka Belitung</h4>
                                                    <p>
                                                        pulau ini memiliki daya magis karena keindahannya, terletak 27
                                                        kilometer
                                                        dari tanjung pandan ibukota kabupaten belitung,
                                                        pantai ini memiliki batu granit yang tersusun sangat indah
                                                        ditambah hamparan
                                                        pasir putih.
                                                    </p>
                                                </div>
                                            </div><!-- End  item -->

                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section><!-- End Testimonials Section -->


                    <!-- ======= Call To Action Section ======= -->
                    <section id="call-to-action" class="call-to-action">
                        <div class="container" data-aos="zoom-out">
                            <div class="row">
                                <div class="col-lg-9 text-center text-lg-start">
                                    <h3 class="cta-title">Call To Action</h3>
                                    <p class="cta-text"> Daerahmu memiliki destinasi wisata atau bahkan kebudayaan yang
                                        unik ??
                                        Berani tulis disini ???.</p>
                                </div>
                                <div class="col-lg-3 cta-btn-container text-center">
                                    <a class="cta-btn align-middle" href="http://localhost/siblogin">Berani </a>
                                    <a class="cta-btn align-middle" href="#hero">Skipp </a>

                                </div>
                            </div>

                        </div>
                    </section><!--  End Call To Action Section -->

                    <!-- ======= Team Section ======= -->
                    <section id="team" class="team section-bg">
                        <div class="container" data-aos="fade-up">
                            <div class="section-header">
                                <h3>Team</h3>
                                <p>Team of the project at Indonesian Culture</p>
                            </div>

                            <div class="row">

                                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                    <div class="member">
                                        <img src="<?= base_url('assets/vendor/');?>assets/img/team-1.jpeg"
                                            class="img-fluid" alt="">
                                        <div class="member-info">
                                            <div class="member-info-content">
                                                <h4>Dika Aryana</h4>

                                                <div class="social">
                                                    <a href="https://twitter.com/dikaryana_"><i
                                                            class="bi bi-twitter"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href="https://www.instagram.com/dikaryana_/"><i
                                                            class="bi bi-instagram"></i></a>
                                                    <a href="https://www.linkedin.com/in/dika-aryana-727aa6222/"><i
                                                            class="bi bi-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                                    <div class="member">
                                        <img src="<?= base_url('assets/vendor/');?>assets/img/team-2.jpg"
                                            class="img-fluid" alt="">
                                        <div class="member-info">
                                            <div class="member-info-content">
                                                <h4>Zahro Saleh Artasya</h4>
                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter"></i></a>
                                                    <a href="https://web.facebook.com/zahroartasya.zahroartasya/"><i
                                                            class="bi bi-facebook"></i></a>
                                                    <a href="https://www.instagram.com/z_s_a20/"><i
                                                            class="bi bi-instagram"></i></a>
                                                    <a href="https://www.linkedin.com/in/artasyazahro/"><i
                                                            class="bi bi-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                                    <div class="member">
                                        <img src="<?= base_url('assets/vendor/');?>assets/img/team-3.jpg"
                                            class="img-fluid" alt="">
                                        <div class="member-info">
                                            <div class="member-info-content">
                                                <h4>Edward Simanjuntak</h4>
                                                <div class="social">
                                                    <a href="https://twitter.com/edsmjtk"><i
                                                            class="bi bi-twitter"></i></a>
                                                    <a href="https://www.facebook.com/ed.juntak.56/"><i
                                                            class="bi bi-facebook"></i></a>
                                                    <a href="https://www.instagram.com/edsmjtk/"><i
                                                            class="bi bi-instagram"></i></a>
                                                    <a href="https://www.linkedin.com/in/edwardsimanjuntak-8625bb1a9/"><i
                                                            class="bi bi-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                                    <div class="member">
                                        <img src="<?= base_url('assets/vendor/');?>assets/img/team-4.jpeg"
                                            class="img-fluid" alt="">
                                        <div class="member-info">
                                            <div class="member-info-content">
                                                <h4>Kinanthy </h4>

                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href=""><i class="bi bi-instagram"></i></a>
                                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </section><!-- End Team Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="section-bg">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Indonesian Culture</strong> <?= date(' Y')?>
            </div>
            <div class="credits">
                <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
      -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets/vendor/');?>assets/vendor/purecounter/purecounter.js"></script>
    <script src="<?= base_url('assets/vendor/');?>assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url('assets/vendor/');?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/vendor/');?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url('assets/vendor/');?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('assets/vendor/');?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url('assets/vendor/');?>assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets/vendor/');?>assets/js/main.js"></script>

</body>

</html>