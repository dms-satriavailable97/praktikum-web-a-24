// === Alert saat klik tombol donasi ===
const donateButtons = document.querySelectorAll('a.btn-primary[href*="wa.me"], a.btn-primary[href*="donasi"]');
donateButtons.forEach(btn => {
  btn.addEventListener("click", (e) => {
    e.preventDefault(); // Mencegah navigasi langsung
    if (confirm("Terimakasih atas niat baik anda. Lanjutkan ke WhatsApp?")) {
      window.location.href = btn.href; // Lanjutkan ke WhatsApp jika konfirmasi OK
    }
  });
});

// === Alert untuk Logout ===
const logoutButtons = document.querySelectorAll('a[href="logout.php"]');
logoutButtons.forEach(button => {
  button.addEventListener('click', function(e) {
    e.preventDefault(); 
    if (confirm('Anda yakin ingin logout?')) {
      window.location.href = this.href; 
    }
  });
});

// === Tambah Testimoni Baru dengan DOM Manipulation ===
const newTestimoni = document.createElement("article");
newTestimoni.classList.add("testi-card");
newTestimoni.innerHTML = `
  <img src="assets/testi4.jpg" alt="Foto Baru" class="profile">
  <h3>Sinta, 30 tahun</h3>
  <p>"Saya merasa sangat terbantu dengan adanya program donasi ini, saya bisa kembali manggung."</p>
`;
document.querySelector(".testimoni").appendChild(newTestimoni);

// === Fetch API (Quote Inspirasi) ===
fetch("https://api.adviceslip.com/advice")
  .then(res => res.json())
  .then(data => {
    const quoteBox = document.createElement("p");
    quoteBox.textContent = `"${data.slip.advice}"`;
    quoteBox.style.marginTop = "20px";
    quoteBox.style.fontStyle = "italic";
    document.querySelector("footer").appendChild(quoteBox);
  })
  .catch(err => console.error("Gagal memuat quote:", err));

// === Smooth Scrolling untuk Navigasi ===
document.querySelectorAll('.nav-menu a').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    // Hanya jalankan untuk link yang mengarah ke anchor di halaman yang sama
    if(this.getAttribute('href').includes('#')) {
      e.preventDefault();
      
      const targetId = this.getAttribute('href').split('#')[1];
      const targetElement = document.getElementById(targetId);
      
      if(targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop - 100,
          behavior: 'smooth'
        });
      }
    }
  });
});

// === Dark Mode Toggle untuk Navigasi ===
const navDarkModeToggle = document.getElementById('darkModeToggle');
if(navDarkModeToggle) {
  // Set initial text based on current mode
  if(document.body.classList.contains('dark-mode')) {
    navDarkModeToggle.textContent = '☀️ Light Mode';
  } else {
    navDarkModeToggle.textContent = '🌙 Dark Mode';
  }
  
  navDarkModeToggle.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
    navDarkModeToggle.textContent = 
      document.body.classList.contains('dark-mode') ? '☀️ Light Mode' : '🌙 Dark Mode';
    
    // Simpan preferensi dark mode di localStorage
    localStorage.setItem('darkMode', document.body.classList.contains('dark-mode'));
  });
}

// === Load Dark Mode Preference ===
document.addEventListener('DOMContentLoaded', function() {
  const darkModePreference = localStorage.getItem('darkMode');
  const navDarkModeToggle = document.getElementById('darkModeToggle');
  
  if (darkModePreference === 'true') {
    document.body.classList.add('dark-mode');
    if(navDarkModeToggle) {
      navDarkModeToggle.textContent = '☀️ Light Mode';
    }
  }
});