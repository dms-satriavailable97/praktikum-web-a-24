// === Dark Mode Toggle ===
const toggleButton = document.createElement("button");
toggleButton.textContent = "🌙 Dark Mode";
toggleButton.className = "btn btn-primary";
document.body.prepend(toggleButton);

toggleButton.addEventListener("click", () => {
  document.body.classList.toggle("dark-mode");
  toggleButton.textContent = 
    document.body.classList.contains("dark-mode") ? "☀️ Light Mode" : "🌙 Dark Mode";
});

// === Alert saat klik tombol donasi ===
const donateButtons = document.querySelectorAll("a.btn-primary"); // hanya link donasi (tag <a>)
donateButtons.forEach(btn => {
  btn.addEventListener("click", () => {
    alert("Terima kasih atas niat baik Anda untuk berdonasi 🙏");
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


