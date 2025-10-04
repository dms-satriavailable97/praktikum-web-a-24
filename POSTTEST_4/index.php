<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GoDonate - Donasi Online</title>
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

</head>
<body>
  <?php include 'navigation.php'; ?>
  <main>
    <!-- Video Intro -->
    <section id="beranda" class="intro-section">
      <video controls>
        <source src="assets/video.mp4" type="video/mp4">
        Browser Anda tidak mendukung video.
      </video>
      <p class="intro">
        Setiap donasi Anda membawa perubahan besar bagi masa depan mereka.
      </p>
      <br>
    </section>

    <!-- Mengapa Donasi -->
    <section class="section" id="tentang">
      <div class="section-header">
        <h2>Mengapa Donasi Ini Penting?</h2>
        <p>Bersama kita wujudkan kepedulian sosial yang nyata</p>
      </div>
      <div class="features-grid">
        <div class="feature-card">
          <div class="feature-icon">🤝</div>
          <h3>Kemudahan Berdonasi</h3>
          <p>GoDonate menawarkan kemudahan bagi Anda untuk berdonasi secara online, tanpa perlu turun ke lokasi langsung.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon">🎯</div>
          <h3>Tepat Sasaran</h3>
          <p>Bantuan langsung disalurkan kepada mereka yang benar-benar membutuhkan dengan proses yang transparan.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon">❤️</div>
          <h3>Dampak Nyata</h3>
          <p>Setiap kontribusi Anda memberikan dampak langsung untuk pendidikan, kesehatan, dan bantuan bencana.</p>
        </div>
      </div>
    </section>

    <!-- Donasi Utama -->
    <section class="card card-featured">
      <h2>DIBUTUHKAN DONASI SEGERA, PENGOBATAN REMAJA 15 TAHUN TERKENA KANKER!</h2>
      <h3>Target Donasi</h3>
      <p>Target: Rp 10.000.000</p>
      <p>Terkumpul: Rp 6.000.000 (60%)</p>

      <h3>Cara Berdonasi</h3>
      <p>Anda dapat berdonasi dengan cara klik tombol di bawah ini:</p>
      <a href="https://wa.me/08997800507" class="btn btn-primary">Donasi Sekarang via WhatsApp</a>
      <p>
        Atau transfer langsung ke rekening berikut:  
        <br>Bank ABC - 1234567890 a.n GoDonate  
        <br>OVO / GoPay / Dana: 0899-7800-507
      </p>
    </section>


    <!-- Donasi Lain -->
    <section id="donasi">
      <h2>Donasi Lain Yang Bisa Anda Lakukan :</h2>
      <div class="donasi-list">
        <article class="card">
          <h3>Gempa di Sulawesi</h3>
          <img src="assets/donasi.jpg" alt="Donasi Gempa Sulawesi">
          <p>Gempa bumi mengakibatkan banyak rumah hancur. Mari kita bantu menyediakan tenda dan kebutuhan pokok bagi para korban.</p>
          <a href="https://wa.me/08997800507" class="btn btn-primary">Donasi Sekarang</a>
        </article>

        <article class="card">
          <h3>Banjir di Pramuka</h3>
          <img src="assets/donasi1.jpg" alt="Donasi Banjir Pramuka">
          <p>Banjir mengakibatkan banyak mahasiswa gabisa cari makan. Mari kita bantu menyediakan makanan dan tempat tinggal sementara bagi para mahasiswa.</p>
          <a href="https://wa.me/08997800507" class="btn btn-primary">Donasi Sekarang</a>
        </article>
      </div>
    </section>

  <!-- Testimoni -->
  <section id="testimoni">
    <h2>Testimoni</h2>
    <div class="testimoni">
      <article class="testi-card">
        <img src="assets/testi1.png" alt="Foto Ahmad" class="profile">
        <h3>Ahmad, 20 tahun</h3>
        <p>"Terima kasih para donatur, uangnya buat upgrade hp."</p>
      </article>

      <article class="testi-card">
        <img src="assets/testi2.png" alt="Foto Inoy" class="profile">
        <h3>Inoy, 40 tahun</h3>
        <p>"Donasi ini berharga banget buat konten kreator kecil. Semoga Allah membalas kebaikan Anda."</p>
      </article>

      <article class="testi-card">
        <img src="assets/testi3.png" alt="Foto Awang" class="profile">
        <h3>Awang, 25 tahun</h3>
        <p>"Alhamdulillah, saya bisa beli laptop geming berkat bantuan para donatur."</p>
      </article>
    </div>
  </section>

  <br>


    <!-- Ajakan Donasi -->
    <section class="cta-section">
      <div class="cta-content">
        <h2>Ayo Jadi Bagian Dari Perubahan</h2>
        <p>Setiap Rp10.000 yang Anda donasikan berarti satu langkah lebih dekat menuju masa depan yang lebih cerah bagi mereka yang membutuhkan.</p>
        <p class="cta-highlight">Jangan tunda kebaikan, karena bantuan Anda sangat berarti.</p>
        <a href="https://wa.me/08997800507" class="btn btn-primary btn-large">
          ✨ Mulai Berdonasi Sekarang
        </a>
      </div>
    </section>
  </main>

    <!-- Footer -->
    <footer class="footer" id="kontak">
      <div class="footer-content">
        <div class="footer-section">
          <h3>GoDonate</h3>
          <p>Platform donasi online terpercaya yang menghubungkan para donatur dengan mereka yang membutuhkan.</p>
        </div>
        <div class="footer-section">
          <h3>Kontak Kami</h3>
          <p>📞 Telepon/WA: 0899-7800-507</p>
          <p>✉️ Email: info@godonate.id</p>
        </div>
        <div class="footer-section">
          <h3>Referensi</h3>
          <p><a href="https://wecare.id/" target="_blank">WeCare.id</a></p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2025 GoDonate. All rights reserved.</p>
      </div>
    </footer>
  
    <script src="script.js?v=<?php echo time(); ?>"></script>
  </body>
</html>
