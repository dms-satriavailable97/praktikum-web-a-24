<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

// Gunakan $_GET untuk menampilkan pesan dari URL
$message = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard - GoDonate</title>
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>

  <div class="dashboard-container">
    <div class="dashboard-header">
      <h1>Selamat Datang, <?= $_SESSION['username']; ?>! 👋</h1>
      <p>Anda berhasil login ke sistem GoDonate.</p>
      
      <?php if ($message): ?>
        <div class="success-message"><?= $message; ?></div>
      <?php endif; ?>
    </div>

    <div class="dashboard-stats">
      <div class="stat-card">
        <h3>Total Donasi</h3>
        <p class="stat-number">Rp 12.450.000</p>
        <p class="stat-desc">Bulan Ini</p>
      </div>
      
      <div class="stat-card">
        <h3>Donatur Aktif</h3>
        <p class="stat-number">248</p>
        <p class="stat-desc">Orang</p>
      </div>
      
      <div class="stat-card">
        <h3>Program Aktif</h3>
        <p class="stat-number">15</p>
        <p class="stat-desc">Program</p>
      </div>
    </div>

    <div class="dashboard-content">
      <div class="content-section">
        <h2>Program Donasi Terbaru</h2>
        <div class="program-list">
          <div class="program-card">
            <h4>Pengobatan Kanker Remaja 15 Tahun</h4>
            <p>Target: Rp 10.000.000</p>
            <div class="progress-bar">
              <div class="progress-fill" style="width: 60%"></div>
            </div>
            <p>Terkumpul: Rp 6.000.000 (60%)</p>
          </div>
          
          <div class="program-card">
            <h4>Bantuan Gempa Sulawesi</h4>
            <p>Target: Rp 25.000.000</p>
            <div class="progress-bar">
              <div class="progress-fill" style="width: 35%"></div>
            </div>
            <p>Terkumpul: Rp 8.750.000 (35%)</p>
          </div>
        </div>
      </div>

      <div class="content-section">
        <h2>Aktivitas Terbaru</h2>
        <div class="activity-list">
          <div class="activity-item">
            <strong>Budi Santoso</strong> mendonasi Rp 500.000 untuk Pengobatan Kanker
            <span class="activity-time">2 jam yang lalu</span>
          </div>
          <div class="activity-item">
            <strong>Siti Rahayu</strong> mendonasi Rp 250.000 untuk Bantuan Gempa
            <span class="activity-time">5 jam yang lalu</span>
          </div>
          <div class="activity-item">
            <strong>Ahmad Fauzi</strong> mendonasi Rp 1.000.000 untuk Pendidikan
            <span class="activity-time">1 hari yang lalu</span>
          </div>
        </div>
      </div>
    </div>

    <div class="dashboard-actions">
      <a href="index.php" class="btn btn-primary">Kembali ke Halaman Utama</a>
      <a href="logout.php" class="btn btn-secondary">Logout</a>
    </div>
  </div>
</body>
</html>