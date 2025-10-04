<?php
session_start();
?>
<nav class="navbar">
    <div class="nav-logo">GoDonate</div>
    
    <ul class="nav-menu">
        <li><a href="index.php#beranda">Beranda</a></li>
        <li><a href="index.php#tentang">Tentang Kami</a></li>
        <li><a href="index.php#donasi">Program Donasi</a></li>
        <li><a href="index.php#testimoni">Testimoni</a></li>
        <li><a href="index.php#kontak">Kontak</a></li>
    </ul>
    
    <div class="nav-buttons">
        <button id="darkModeToggle" class="btn btn-secondary">🌙 Dark Mode</button>
        <?php if(isset($_SESSION['username'])): ?>
            <a href="dashboard.php" class="btn btn-primary">Dashboard</a>
            <a href="logout.php" class="btn btn-primary">Logout</a>
        <?php else: ?>
            <a href="login.php" class="btn btn-primary">Login</a>
            <a href="login.php" class="btn btn-primary">Dashboard</a>
        <?php endif; ?>
    </div>
</nav>