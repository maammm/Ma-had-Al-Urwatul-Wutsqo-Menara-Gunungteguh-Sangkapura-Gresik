<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Ma'had</title>
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

<!-- Profil Ma'had Section -->
<section class="profil py-5">
    <div class="container">
        <h1 class="text-center mb-5">Profil Ma'had</h1>

        <!-- Pengenalan Logo -->
        <div class="row mb-5 align-items-start">
            <div class="col-md-4">
                <div class="logo-container">
                    <img src="assets/images/logo-urwatul-wutsqo-ar.png" alt="Logo Ma'had" class="img-fluid logo-image">
                </div>
            </div>
            <div class="col-md-8">
                <h3>Pengenalan Logo</h3>
                <p>Logo Pondok Pesantren Al-Urwatul Wutsqo melambangkan nilai-nilai keislaman, kemandirian, dan solidaritas. Warna hijau merepresentasikan keteduhan dan keseimbangan, sedangkan simbol Quran mencerminkan fokus kami pada pembelajaran agama Islam dan pembentukan karakter Qur'ani.</p>
            </div>
        </div>

        <!-- Sejarah Pembangunan -->
        <div class="row mb-5">
            <div class="col-md-12">
                <h3>Sejarah Pembangunan</h3>
                <p>Pondok Pesantren Al-Urwatul Wutsqo didirikan pada tahun 1990 oleh KH. Ahmad Abdullah sebagai wadah pendidikan dan pembinaan generasi muda yang berakhlak mulia dan berpengetahuan luas. Berawal dari sebuah surau kecil, pesantren ini kini telah berkembang menjadi salah satu institusi pendidikan Islam yang terkemuka di Pulau Bawean. Dengan semangat kebersamaan dan dedikasi tinggi, pesantren terus membina santri untuk menjadi pemimpin masa depan yang amanah.</p>
            </div>
        </div>

        <!-- Struktur Organisasi -->
        <div class="row">
            <div class="col-md-12">
                <h3>Struktur Organisasi</h3>
                <div class="organisasi-bagan">
                    <div class="organisasi-item">
                        <div class="organisasi-avatar">
                            <img src="assets/images/5.jpg" alt="Mudirul Ma'had">
                        </div>
                        <div class="organisasi-text">
                            <strong>Mudir Ma'had:</strong>
                            <p>Abi KH. Abu Zaid, Lc.M.HI</p>
                        </div>
                    </div>
                    <div class="organisasi-item">
                        <div class="organisasi-avatar">
                            <img src="assets/images/5.jpg" alt="Wakil Pimpinan">
                        </div>
                        <div class="organisasi-text">
                            <strong>Sekretaris:</strong>
                            <p>Ust. Muhammad Hidayat</p>
                        </div>
                    </div>
                    <div class="organisasi-item">
                        <div class="organisasi-avatar">
                            <img src="assets/images/5.jpg" alt="Kepala Madrasah">
                        </div>
                        <div class="organisasi-text">
                            <strong>Bendahara:</strong>
                            <p>Ustadzah Nur Aini</p>
                        </div>
                    </div>
                    <div class="organisasi-item">
                        <div class="organisasi-avatar">
                            <img src="assets/images/5.jpg" alt="Kepala Bidang Tahfidz">
                        </div>
                        <div class="organisasi-text">
                            <strong>Kepala Bidang Tahfidz:</strong>
                            <p>Ust. Ali Mahfud</p>
                        </div>
                    </div>
                    <div class="organisasi-item">
                        <div class="organisasi-avatar">
                            <img src="assets/images/5.jpg" alt="Kepala Bidang Bahasa">
                        </div>
                        <div class="organisasi-text">
                            <strong>Kepala Bidang Bahasa:</strong>
                            <p>Ustadzah Siti Zulaikha</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<footer class="custom-footer">
    <div class="footer-container">
        <!-- Info Kontak -->
        <div class="footer-section info-kontak">
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
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/ponpes_alurwatul_wutsqo?igsh=dTB0OXN5bjF0NmEy" target="_blank" class="social-icon">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/profile.php?id=100069496802535&mibextid=ZbWKwL" target="_blank" class="social-icon">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <!-- TikTok -->
                    <a href="https://www.tiktok.com/@ponpesalurwatulwutsqo?_t=ZS-8spni8VzGYD&_r=1" target="_blank" class="social-icon">
                        <i class="bi bi-tiktok"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <!-- Copyright -->
    <div class="footer-copyright">
        <p>&copy; 2025 Pondok Pesantren Al-Urwatul Wutsqo</p>
        <p>All rights reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>