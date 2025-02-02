<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Ma'had</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body onload="loadJadwal(); tampilkanTanggal()">

<!-- info bar -->
<x-marqueetext></x-marqueetext>
<!-- Navbar -->
<x-navbar></x-navbar>

<!-- Pendaftaran Siswa Baru -->
<section class="pendaftaran-siswa-baru">
    <div class="container text-center my-5">
        <div class="p-4 bg-light shadow rounded">
            <h3 class="mb-3">Pendaftaran Santri Baru</h3>
            <p class="mb-4">Klik tombol di bawah ini untuk mendaftar sebagai santri baru di Pondok Pesantren Al-Urwatul Wutsqo.</p>
            <a id="daftar-button" href="/pendaftaran" class="btn btn-primary btn-lg">Daftar Sekarang</a>
            <div id="pendaftaran-status" class="pendaftaran-status mt-3">
                <!-- Status pendaftaran akan diubah melalui JavaScript -->
            </div>
        </div>
    </div>
</section>

<!-- Jadwal Sambangan -->
<section class="jadwal-sambangan">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Jadwal Sambangan</h2>
        <div class="filter mb-3 text-center">
            <label for="bulan">Pilih Bulan:</label>
            <select id="bulan" onchange="filterJadwal()">
                <option value="">Pilih Bulan</option>
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
            </select>

            <label for="minggu" class="ms-3">Pilih Minggu:</label>
            <select id="minggu" onchange="filterJadwal()">
                <option value="">Pilih Minggu</option>
                <option value="1">Minggu Ke-1</option>
                <option value="2">Minggu Ke-2</option>
                <option value="3">Minggu Ke-3</option>
                <option value="4">Minggu Ke-4</option>
            </select>
        </div>

        <table id="jadwalTable" class="table table-bordered">
            <thead class="table-dark">
            <tr>
                <th>Minggu Ke</th>
                <th>Nama Santri</th>
                <th>Bulan</th>
            </tr>
            </thead>
            <tbody>
            <!-- Januari Minggu Ke-1 -->
            <tr data-bulan="Januari" data-minggu="1"><td>1</td><td>Arinal Mahbub</td><td>Januari</td></tr>
            <tr data-bulan="Januari" data-minggu="1"><td>1</td><td>M. Raheli</td><td>Januari</td></tr>
            <tr data-bulan="Januari" data-minggu="1"><td>1</td><td>M. Fahmi Yusuf</td><td>Januari</td></tr>
            <tr data-bulan="Januari" data-minggu="1"><td>1</td><td>M. Afifuddin</td><td>Januari</td></tr>
            <tr data-bulan="Januari" data-minggu="1"><td>1</td><td>M. Rifqi Asyrafi </td><td>Januari</td></tr>
            <tr data-bulan="Januari" data-minggu="1"><td>1</td><td>M. Raihanul Adhim</td><td>Januari</td></tr>
            <tr data-bulan="Januari" data-minggu="1"><td>1</td><td>Syamsul Hidayat</td><td>Januari</td></tr>
            <tr data-bulan="Januari" data-minggu="1"><td>1</td><td>M. Syahrul Nizam</td><td>Januari</td></tr>
            <tr data-bulan="Januari" data-minggu="1"><td>1</td><td>M. Nasrul Ibadi</td><td>Januari</td></tr>
            <tr data-bulan="Januari" data-minggu="1"><td>1</td><td>M. Thoriq Al-Mahbub</td><td>Januari</td></tr>
            <tr data-bulan="Januari" data-minggu="1"><td>1</td><td>M. Rifqurrahman </td><td>Januari</td></tr>
            <tr data-bulan="Januari" data-minggu="1"><td>1</td><td>Nafil Akhyari</td><td>Januari</td></tr>
            <tr data-bulan="Januari" data-minggu="1"><td>1</td><td>Ariful Iman </td><td>Januari</td></tr>
            <tr data-bulan="Januari" data-minggu="1"><td>1</td><td>M. Restu</td><td>Januari</td></tr>
            <tr data-bulan="Januari" data-minggu="1"><td>1</td><td>M. Ramadhani</td><td>Januari</td></tr>
            <!-- Januari Minggu Ke-2 -->
            <tr data-bulan="Januari" data-minggu="2"><td>2</td><td>M. Raheli</td><td>Januari</td></tr>
            <tr data-bulan="Januari" data-minggu="2"><td>2</td><td>Nailul Irfani</td><td>Januari</td></tr>
            <tr data-bulan="Januari" data-minggu="2"><td>2</td><td>Samsul</td><td>Januari</td></tr>
            <tr data-bulan="Januari" data-minggu="2"><td>2</td><td>M. Fahmi Mulana</td><td>Januari</td></tr>
            <!-- Januari Minggu Ke-3 -->
            <tr data-bulan="Januari" data-minggu="3"><td>3</td><td>M. Fahmi Yusuf</td><td>Januari</td></tr>
            <tr data-bulan="Januari" data-minggu="3"><td>3</td><td>Nasrullah</td><td>Januari</td></tr>
            <tr data-bulan="Januari" data-minggu="3"><td>3</td><td>Ikhwanur Rayyan</td><td>Januari</td></tr>
            <tr data-bulan="Januari" data-minggu="3"><td>3</td><td>M. Kharul Azmi</td><td>Januari</td></tr>
            <!-- Januari Minggu Ke-4 -->
            <tr data-bulan="Januari" data-minggu="4"><td>4</td><td>M. Afifuddin</td><td>Januari</td></tr>
            <tr data-bulan="Januari" data-minggu="4"><td>4</td><td>M. Zaki Maulana</td><td>Januari</td></tr>
            <tr data-bulan="Januari" data-minggu="4"><td>4</td><td>Nailul Autar</td><td>Januari</td></tr>
            <tr data-bulan="Januari" data-minggu="4"><td>4</td><td>Abdul Halim</td><td>Januari</td></tr>
            </tbody>
        </table>
    </div>
</section>

<section class="jadwal-kegiatan">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Jadwal Kegiatan Harian</h2>
        <div class="filter mb-3 text-center">
            <label for="hari">Pilih Hari:</label>
            <select id="hari" onchange="filterKegiatan()">
                <option value="">Pilih Hari</option>
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
                <option value="Sabtu">Sabtu</option>
                <option value="Minggu">Minggu</option>
            </select>
        </div>

        <table id="kegiatanTable" class="table table-bordered">
            <thead class="table-dark">
            <tr>
                <th>Hari</th>
                <th>Waktu</th>
                <th>Kegiatan</th>
                <th>Keterangan</th>
            </tr>
            </thead>
            <tbody>
            <tr data-hari="Senin"><td>Senin</td><td>17:30 - 17:50</td><td>Sholat Maghrib Berjamaah</td><td>Musholla (Wajib)</td></tr>
            <tr data-hari="Senin"><td>Senin</td><td>17:50 - 18:45</td><td>Ngaji Al-Qur’an</td><td>Musholla & Aula (Wajib)</td></tr>
            <tr data-hari="Selasa"><td>Selasa</td><td>17:30 - 17:50</td><td>Sholat Maghrib Berjamaah</td><td>Musholla (Wajib)</td></tr>
            <tr data-hari="Selasa"><td>Selasa</td><td>17:50 - 18:45</td><td>Ngaji Bersama</td><td>Musholla (Wajib)</td></tr>
            <tr data-hari="Rabu"><td>Rabu</td><td>17:30 - 17:50</td><td>Sholat Maghrib Berjamaah</td><td>Musholla (Wajib)</td></tr>
            <tr data-hari="Rabu"><td>Rabu</td><td>17:50 - 18:45</td><td>Ngaji Al-Qur’an</td><td>Musholla (Wajib)</td></tr>
            <!-- Tambahkan data kegiatan lain -->
            </tbody>
        </table>
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
<script src="assets/js/script.js"></script>
</body>
</html>
