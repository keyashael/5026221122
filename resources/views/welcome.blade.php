<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Desa Kadugede</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/logo.png') }}">
		<link rel="stylesheet" href="{{ asset('bootstrap-5.0.0-alpha.min.css') }} " type="text/css">
        <link rel="stylesheet" href="{{ asset('LineIcons.2.0.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('animate.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('main.css') }}" type="text/css">
    </head>
    <body>

        <!-- ========================= header start ========================= -->
        <header class="header navbar-area bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{ asset('img/logo.png') }}" alt="Logo">
                                <span class="header-title">Website Resmi Desa Kadugede</span>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll active" href="#home">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">Profil</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#services">Layanan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#portfolio">Berita</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">Kontak</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#process">File</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->

        </header>
        <!-- ========================= header end ========================= -->

        <!-- ========================= carousel-section end ========================= -->
        <section id="home" class="carousel-section-wrapper">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-section carousel-item active clip-bg pt-225 pb-200 img-bg"
                        style="background-image: url('{{ asset('img/papan.jpeg') }}');">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-10 mx-auto">
                                    <div class="carousel-content text-center">
                                        <div class="section-title">
                                            <h2 class="text-white">Selamat Datang di Desa Kadugede</h2>
                                            <p class="text-white">Informasi Terbaru dan Layanan Terbaik untuk Anda!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-section carousel-item clip-bg pt-225 pb-200 img-bg"
                        style="background-image: url('{{ asset('img/rapat.jpeg') }}');">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-10 mx-auto">
                                    <div class="carousel-content text-center">
                                        <div class="section-title">
                                            <h2 class="text-white">Penyaluran BLT DD Bulan April Tahun Anggaran 2024</h2>
                                            <p class="text-white">Pemerintah Desa Kadugede menyalurkan Bantuan Langsung Tunai yang bersumber dari Dana Desa Tahun Anggaran 2024 untuk 41 Keluarga Penerima Manfaat oleh Kepala Desa Kadugede pada Hari Kamis 4 April 2024 bertempat di Gedung Serbaguna Desa Kadugede.</p>
                                        </div>
                                        <a href="https://kadugede.godesa.id/artikel/3121-penyaluran-blt-dd-bulan-april-tahun-anggaran-2024" class="theme-btn border-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-section carousel-item clip-bg pt-225 pb-200 img-bg"
                        style="background-image: url('{{ asset('img/bersih.jpeg') }}');">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-10 mx-auto">
                                    <div class="carousel-content text-center">
                                        <div class="section-title">
                                            <h2 class="text-white">Giat Warga Bersih Sungai Upaya Mengatasisipasi Banjir</h2>
                                            <p class="text-white">Giat Bersih Sungai yang dilakukan masyarakat Desa Kadugede yaitu membersihkan aliran sungai Cisanggarung yang melintas di wilayah Kadugede dan sekitarnya sebagai tindakan antisipatif dampak dari curah hujan yang tinggi</p>
                                        </div>
                                        <a href="https://kadugede.godesa.id/artikel/3119-giat-warga-bersih-sungai-upaya-mengantisipasi-bencana-banjir" class="theme-btn border-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <a class="carousel-control carousel-control-prev" href="#carouselExampleCaptions" role="button"
                    data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="lni lni-arrow-left"></i></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control carousel-control-next" href="#carouselExampleCaptions" role="button"
                    data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"><i class="lni lni-arrow-right"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <!-- ========================= carousel-section end ========================= -->

        <!--========================= about-section start========================= -->
        <section id="about" class="pt-100">
            <div class="about-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="about-img-wrapper">
                                <div class="about-img position-relative d-inline-block wow fadeInLeft" data-wow-delay=".3s">
                                    <img src="https://kadugede.godesa.id/assets/uploads/750960a27867ad440184ab1e07d76fd0.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="about-content-wrapper">
                                <div class="section-title">
                                    <span class="wow fadeInUp" data-wow-delay=".2s">Profil Desa</span>
                                    <h2 class="mb-40 wow fadeInRight" data-wow-delay=".4s">Desa Kadugede</h2>
                                </div>
                                <div class="about-content">
                                    <p class="mb-45 wow fadeInUp" data-wow-delay=".6s">Desa Kadugede adalah sebuah desa yang terletak di Kecamatan Kadugede, Kabupaten Kuningan, Jawa Barat. Sebagai bagian dari komunitas yang dinamis dan berkembang, kami berkomitmen untuk memberikan pelayanan terbaik bagi warga desa. Melalui website ini, kami menyediakan informasi terbaru seputar kegiatan desa, pembangunan, serta program-program pemberdayaan masyarakat.</p>
                                    <p class="mb-45 wow fadeInUp" data-wow-delay=".6s"></p>Kami percaya bahwa partisipasi aktif masyarakat adalah kunci menuju kemajuan bersama. Dengan semangat gotong royong, Desa Kadugede terus berinovasi untuk menciptakan lingkungan yang aman, nyaman, dan berdaya saing tinggi. Mari bersama-sama membangun masa depan desa yang lebih cerah!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--========================= about-section end========================= -->

        <!-- ========================= service-section start ========================= -->
        <section id="services" class="service-section pt-130">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                        <div class="section-title text-center mb-55">
                            <span class="wow fadeInDown" data-wow-delay=".2s">Layanan</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Layanan Desa yang Terbaik</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s">Kami berkomitmen untuk memberikan layanan terbaik bagi warga Desa Kadugede. Melalui sistem layanan digital ini, masyarakat dapat mengakses berbagai informasi dan layanan publik dengan mudah, cepat, dan transparan. </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <a href="https://kadugede.godesa.id/page/panduan-layanan-manual" class="service-box-link">
                            <div class="service-box box-style">
                                <div class="service-icon box-icon-style">
                                    <i class="lni lni-leaf"></i>
                                </div>
                                <div class="box-content-style service-content">
                                    <h4>Layanan Manual</h4>
                                    <p>Proses penyediaan informasi dan bantuan kepada masyarakat dalam mengakses layanan administratif, yang biasanya mencakup pengumpulan, pengolahan, dan penerbitan dokumen penting terkait kependudukan, seperti akta lahir, akta kematian, dan kartu keluarga</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-box box-style">
                            <a href="https://kadugede.godesa.id/page/panduan-layanan-online-cepat" class="service-box-link">
                                <div class="service-icon box-icon-style">
                                    <i class="lni lni-bootstrap"></i>
                                </div>
                                <div class="box-content-style service-content">
                                    <h4>Layanan Online Cepat</h4>
                                    <p>Sistem digital yang memungkinkan masyarakat untuk mengakses dan mengajukan permohonan berbagai surat dan dokumen administrasi, seperti izin dan keterangan, tanpa perlu datang ke kantor pemerintahan</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-box box-style">
                            <a href="https://kadugede.godesa.id/form_ptt" class="service-box-link">
                                <div class="service-icon box-icon-style">
                                    <i class="lni lni-briefcase"></i>
                                </div>
                                <div class="box-content-style service-content">
                                    <h4>Layanan Penduduk Tidak Tetap</h4>
                                    <p>Layanan administratif yang ditujukan untuk penduduk yang tinggal di desa dalam jangka waktu tertentu tanpa bermaksud menjadi penduduk tetap yang mencakup pendataan, penerbitan surat keterangan tempat tinggal sementara, serta pemantauan terhadap keberadaan mereka. </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= service-section end ========================= -->

        <!-- ========================= portfolio-section start ========================= -->
        <section id="portfolio" class="portfolio-section pt-130">
            <section id="team" class="contact-section cta-bg img-bg pt-110 pb-100" style="background-image: url('https://kadugede.godesa.id/assets/uploads/ac236baa6216513e74dccec613538119.jpeg');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-7">
                            <div class="section-title mb-60">
                                <span class="text-white wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">Open Recruitment</span>
                                <h2 class="text-white wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">KPPS Desa Kadugede</h2>
                                <p class="text-white wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Telak Dibuka Pendaftaran Panitia Pemungutan Suara dalam Pilkada Serentak 2024</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-5">
                            <div class="contact-btn text-left text-lg-right">
                                <a href="https://kadugede.godesa.id/artikel/tanggal/2024-09-14" rel="nofollow" class="theme-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Carousel Controls -->
                <a class="carousel-control-prev" href="#portfolioCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#portfolioCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <!-- ========================= portfolio-section end ========================= -->

        <!-- ========================= contact-section start ========================= -->
        <section id="contact" class="contact-section pt-130 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="contact-item-wrapper">
                            <div class="row">
                                <div class="col-12 col-md-6 col-xl-12">
                                    <div class="contact-item">
                                        <div class="contact-icon">
                                            <i class="lni lni-phone"></i>
                                        </div>
                                        <div class="contact-content">
                                            <h4>Hubungi Kami</h4>
                                            <p>081234567890</p>
                                            <p>pemdeskadugede@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-12">
                                    <div class="contact-item">
                                        <div class="contact-icon">
                                            <i class="lni lni-map-marker"></i>
                                        </div>
                                        <div class="contact-content">
                                            <h4>Alamat Kantor</h4>
                                            <p>Jl. Syech Manglayang No.45, Desa</p>
                                            <p>Kadugede, Kecamatan Kadugede</p>
                                            <p>Kabupaten Kuningan, Jawa Barat</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-12">
                                    <div class="contact-item">
                                        <div class="contact-icon">
                                            <i class="lni lni-alarm-clock"></i>
                                        </div>
                                        <div class="contact-content">
                                            <h4>Waktu Layanan</h4>
                                            <p>Hari Kerja (Senin - Jumat) </p>
                                            <p>Pukul 07.00 - 15.00 WIB</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="contact-form-wrapper">
                            <div class="row">
                                <div class="col-xl-10 col-lg-8 mx-auto">
                                    <div class="section-title text-center mb-50">
                                        <span class="wow fadeInDown" data-wow-delay=".2s">Tiket Layanan</span>
                                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Pengajuan Layanan Desa Kadugede</h2>
                                        <p class="wow fadeInUp" data-wow-delay=".6s">Kami menyediakan berbagai layanan untuk mempermudah warga Desa Kadugede. Anda dapat mengajukan permintaan, keluhan, atau saran terkait layanan publik desa melalui form di bawah ini.</p>
                                    </div>
                                </div>
                            </div>
                            <form action="assets/php/mail.php" class="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="name" id="name" placeholder="Nama" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" id="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="phone" id="phone" placeholder="Telepon" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="subject" id="email" placeholder="Alamat" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <textarea name="message" id="message" placeholder="Pesan" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="button text-center">
                                            <button type="submit" class="theme-btn">Kirim</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= contact-section end ========================= -->

        <!-- ========================= process-section start ========================= -->
        <section id="process" class="process-section pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-title mb-55">
                            <span class="wow fadeInDown" data-wow-delay=".2s">File</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Pertemuan & Tugas</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <!-- Pertemuan Section -->
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="process-widget mb-60 wow fadeInUp" data-wow-delay=".4s">
                            <h4>Pertemuan</h4>
                            <ul class="process-links">
                                <li><a href="{{ route('pertemuan1') }}">Pertemuan 1</a></li>
                                <li><a href="{{ route('pertemuan2') }}">Pertemuan 2</a></li>
                                <li><a href="{{ route('pertemuan3') }}">Pertemuan 3</a></li>
                                <li><a href="{{ route('pertemuan7') }}">Pertemuan 7</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Tugas Section -->
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="process-widget mb-60 wow fadeInUp" data-wow-delay=".6s">
                            <h4>Tugas</h4>
                            <ul class="process-links">
                                <li><a href="{{ route('tugas1') }}">Tugas 1</a></li>
                                <li><a href="{{ route('tugas2') }}">Tugas 2</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= process-section end ========================= -->

        <!-- ========================= subscribe-section start ========================= -->
        <section class="subscribe-section pt-70 pb-70 img-bg" style="background-image: url('https://img.freepik.com/free-photo/design-space-paper-textured-background_53876-32191.jpg')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="section-title mb-30">
                            <span class="text-white wow fadeInDown" data-wow-delay=".2s">Subscribe</span>
                            <h2 class="text-white mb-40 wow fadeInUp" data-wow-delay=".4s">Subscribe Website Kami</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <form action="#" class="subscribe-form wow fadeInRight" data-wow-delay=".4s">
                            <input type="text" name="subs-email" id="subs-email" placeholder="Email Anda">
                            <button type="submit"><i class="lni lni-telegram-original"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= subscribe-section end ========================= -->

        <!-- ========================= scroll-top ========================= -->
        <a href="#" class="scroll-top">
            <i class="lni lni-arrow-up"></i>
        </a>

        <!-- ========================= JS here ========================= -->
		<script src="{{ asset('bootstrap.bundle-5.0.0.alpha-min.js') }}"></script>
        <script src="{{ asset('count-up.min.js') }}"></script>
        <script src="{{ asset('wow.min.js') }}"></script>
        <script src="{{ asset('imagesloaded.min.js') }}"></script>
		<script src="{{ asset('main.js') }}"></script>

    </body>
</html>

