document.getElementById("tahun").textContent = new Date().getFullYear();
const tombolMode = document.getElementById("tombolModeGelap");
tombolMode.addEventListener("click", toggleModeGelap);

function toggleModeGelap() {
  document.body.classList.toggle("dark-mode");
}

const form = document.getElementById("formPemesanan");
form.addEventListener("submit", prosesPemesanan);

function prosesPemesanan(e) {
  e.preventDefault(); 

  const nama = document.getElementById("nama").value;
  const checkin = document.getElementById("checkin").value;
  const checkout = document.getElementById("checkout").value;

  localStorage.setItem("namaTamu", nama);
  localStorage.setItem("checkin", checkin);
  localStorage.setItem("checkout", checkout);

  window.location.href = "konfirmasi.html";
}
function tampilkanCuaca() {
  document.getElementById("infoCuaca").textContent =
    "☀️ Cuaca hari ini cerah, cocok untuk liburan!";
}
tampilkanCuaca();
