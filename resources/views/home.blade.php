<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pondok Pesantren Al-Urwatul Wutsqo</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body onload="tampilkanTanggal()">

<!-- info bar -->
<x-marqueetext></x-marqueetext>
<!-- Navbar -->
<x-navbar></x-navbar>

<!-- Sidebar Navigasi -->
<div id="sidebarNav" class="sidebar d-lg-none">
    <button class="close-btn" onclick="toggleSidebar()">&times;</button>
    <ul class="sidebar-nav">
        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/profil">Profil</a></li>
        <li class="nav-item"><a class="nav-link" href="/informasi">Informasi</a></li>
        <li class="nav-item"><a class="nav-link" href="/program">Program</a></li>
        <li class="nav-item"><a class="nav-link" href="/tendik">Tendik</a></li>
        <li class="nav-item"><a class="nav-link" href="/prestasi">Prestasi</a></li>
    </ul>
</div>

<!-- Info Carousel dan Profil -->
<section class="profile-section py-1.9 bg-light">
    <div class="carousel">
        <div class="carousel-slides">
            <img src="{{ asset('images/tahun-baru-2025.jpg') }}" class="carousel-slide" alt="Slide 1">
            <img src="{{ asset('images/pondok.jpg') }}" class="carousel-slide" alt="Slide 2">
            <img src="{{ asset('images/fotbar-haflah-akhirussanah-2023.jpg') }}" class="carousel-slide" alt="Slide 3">
        </div>
        <div class="carousel-controls">
            <button class="carousel-btn prev" onclick="prevSlide()">&#10094;</button>
            <button class="carousel-btn next" onclick="nextSlide()">&#10095;</button>
        </div>
        <div class="carousel-indicators" id="carousel-indicators"></div>
    </div>
    <div class="profile-container">
        <img src="{{ asset('images/logo.jpg') }}" alt="Profile Picture" class="profile-picture">
        <h1 class="profile-title">Al-Urwatul Wutsqo</h1>
    </div>
</section>

<!-- Info Section -->
<section class="info-section py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="container-box bg-white shadow-sm p-4 rounded h-100">
                    <h6 class="text-muted fw-bold mb-3 mt-4">1 November 2024</h6>
                    <h5 class="fw-bold mb-3">
                        MSAA UIN Malang Ramaikan Kegiatan Expo Kemandirian Pesantren
                    </h5>
                    <p class="text-muted">
                        MSAA POS – Masih relevan dengan momen hari santri yang dilaksanakan beberapa hari lalu, UIN Malang kembali gelar kegiatan bertajuk Expo Kemandirian Pesantren...
                    </p>
                    <a href="events/imtihan-nishfussanah24.html" class="btn btn-primary btn-sm">Selengkapnya</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="container-box bg-white shadow-sm p-4 rounded h-100">
                    <div class="header-box bg-success text-white p-2 rounded mb-3">
                        <h5 class="text-center fw-bold mb-0">Kegiatan</h5>
                    </div>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <a href="events/imtihan-nishfussanah24.html" class="d-flex align-items-start">
                                <img src="{{ asset('images/maulid-dan-haflah-nishfussanah-ganjil-24.jpg') }}" alt="Icon 1" class="list-icon me-2">
                                <span><strong>24 November 2024 -</strong> Maulid Nabi dan Haflah Nishfussanah 2024-2025</span>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="events/mns-day1-2-3.html" class="d-flex align-items-start">
                                <img src="{{ asset('images/day1-mns-24-25.jpg') }}" alt="Icon 2" class="list-icon me-2">
                                <span><strong>18-20 November 2024 -</strong> Musabaqoh Nishfussanah 2024-2025 Day 1,2,3 Penuh Kompetiitf</span>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="events/imtihan-nishfussanah24.html" class="d-flex align-items-start">
                                <img src="{{ asset('images/imtihan-nisfussanah-ganjil-24.jpg') }}" alt="Icon 3" class="list-icon me-2">
                                <span><strong>17 November 2024 -</strong> Imtihan Nishfussanah Tahun Akademik 2024-2025</span>
                            </a>
                        </li>
                        <li>
                            <a href="events/pbm-di-aula.html" class="d-flex align-items-start">
                                <img src="{{ asset('images/pelatihan-bahtsul-masail.jpg') }}" alt="Icon 4" class="list-icon me-2">
                                <span><strong>2 November 2024 -</strong> PBM (Pelatihan Bahtsul Masail) di Aula Pondok Pesantren</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-section bg-light">
    <h1>From the blog</h1>
    <p>Learn how to grow your business with our expert advice.</p>

    <div class="blog-cards">
        <a href="events/imtihan-nishfussanah24.html" class="blog-card">
            <img src="{{ asset('images/imtihan-nisfussanah-ganjil-24.jpg') }}" alt="Blog 1">
            <div class="blog-card-content">
                <p>Mar 16, 2020 · Michael Foster</p>
                <h2>Boost your conversion rate</h2>
            </div>
        </a>

        <a href="#" class="blog-card">
            <img src="{{ asset('images/dirgahayu-indonesia-79.jpg') }}" alt="Blog 2">
            <div class="blog-card-content">
                <p>Mar 10, 2020 · Lindsay Walton</p>
                <h2>How to use search engine optimization to drive sales</h2>
            </div>
        </a>

        <a href="#" class="blog-card">
            <img src="{{ asset('images/kajian-malam-sabtu.jpg') }}" alt="Blog 3">
            <div class="blog-card-content">
                <p>Feb 12, 2020 · Tom Cook</p>
                <h2>Improve your customer experience</h2>
            </div>
        </a>

        <a href="events/imtihan-nishfussanah24.html" class="blog-card">
            <img src="{{ asset('images/imtihan-nisfussanah-ganjil-24.jpg') }}" alt="Blog 1">
            <div class="blog-card-content">
                <p>Mar 16, 2020 · Michael Foster</p>
                <h2>Boost your conversion rate</h2>
            </div>
        </a>

        <a href="#" class="blog-card">
            <img src="{{ asset('images/dirgahayu-indonesia-79.jpg') }}" alt="Blog 2">
            <div class="blog-card-content">
                <p>Mar 10, 2020 · Lindsay Walton</p>
                <h2>How to use search engine optimization to drive sales</h2>
            </div>
        </a>

        <a href="#" class="blog-card">
            <img src="{{ asset('images/kajian-malam-sabtu.jpg') }}" alt="Blog 3">
            <div class="blog-card-content">
                <p>Feb 12, 2020 · Tom Cook</p>
                <h2>Improve your customer experience</h2>
            </div>
        </a>
    </div>
</section>

<!-- Footer -->
<footer class="custom-footer">
    <div class="footer-container">
        <div class="info-kontak">
            <h3>Info Kontak</h3>
            <div class="contact-item">
                <p class="contact-label">Email</p>
                <p class="contact-detail">ponpesalurwatulwutsqo2016@gmail.com</p>
            </div>
            <div class="contact-item">
                <p class="contact-label">No Telepon / WhatsApp</p>
                <p class="contact-detail">085236201688</p>
            </div>
            <div class="contact-item">
                <p class="contact-label">Alamat</p>
                <p class="contact-detail">Menara, Gunungteguh, Sangkapura, Bawean, Gresik</p>
            </div>
            <div class="contact-item">
                <p class="contact-label">_________________________</p>
                <p class="contact-label">Temukan Kami:</p>
                <div class="social-icons">
                    <a href="https://www.instagram.com/ponpes_alurwatul_wutsqo" target="_blank" class="social-icon">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=100069496802535" target="_blank" class="social-icon">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://www.tiktok.com/@ponpesalurwatulwutsqo" target="_blank" class="social-icon">
                        <i class="bi bi-tiktok"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p>&copy; 2025 Pondok Pesantren Al-Urwatul Wutsqo</p>
        <p>All rights reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
