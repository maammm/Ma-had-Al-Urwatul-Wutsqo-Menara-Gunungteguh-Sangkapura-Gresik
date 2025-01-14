<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prestasi Ma'had</title>
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
    <div class="footer-copyright">
        <p>&copy; 2025 Pondok Pesantren Al-Urwatul Wutsqo</p>
        <p>All rights reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>