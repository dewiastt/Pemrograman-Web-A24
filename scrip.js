const bookButtons = document.querySelectorAll(".book-btn");
const bookingModal = document.getElementById("bookingModal");
const closeModal = document.getElementById("closeModal");
const bookingForm = document.getElementById("bookingForm");

bookButtons.forEach(button => {
    button.addEventListener("click", () => {
        const roomType = button.getAttribute("data-room");
        document.getElementById("roomType").value = roomType;
        bookingModal.style.display = "block";
    });
});

closeModal.addEventListener("click", () => {
    bookingModal.style.display = "none";
});

window.addEventListener("click", (e) => {
    if (e.target == bookingModal) {
        bookingModal.style.display = "none";
    }
});

bookingForm.addEventListener("submit", (e) => {
    e.preventDefault();

    const nama = document.getElementById("nama").value;
    const checkinInput = document.getElementById("checkin").value;
    const checkoutInput = document.getElementById("checkout").value;
    const roomType = document.getElementById("roomType").value;

    const checkin = new Date(checkinInput);
    const checkout = new Date(checkoutInput);
    const today = new Date();

    if (!checkinInput || !checkoutInput) {
        alert("❌ Silakan isi tanggal check-in dan check-out!");
        return;
    }

    if (checkin < today.setHours(0, 0, 0, 0)) {
        alert("❌ Tanggal check-in tidak boleh sebelum hari ini!");
        return;
    }


    if (checkout <= checkin) {
        alert("❌ Tanggal check-out harus setelah tanggal check-in!");
        return;
    }

    alert(
        `✅ Pemesanan Berhasil!\n\n` +
        `Nama: ${nama}\n` +
        `Tanggal Check-in: ${checkinInput}\n` +
        `Tanggal Check-out: ${checkoutInput}\n` +
        `Tipe Kamar: ${roomType}`
    );

    bookingForm.reset();
    bookingModal.style.display = "none";
});

bookButtons.forEach(button => {
    button.addEventListener("click", () => {
        const roomType = button.getAttribute("data-room");
        document.getElementById("roomType").value = roomType;
        bookingModal.style.display = "block";
    });
});

closeModal.addEventListener("click", () => {
    bookingModal.style.display = "none";
});

window.addEventListener("click", (e) => {
    if (e.target == bookingModal) {
        bookingModal.style.display = "none";
    }
});


bookingForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const nama = document.getElementById("nama").value;
    const tanggal = document.getElementById("tanggal").value;
    const roomType = document.getElementById("roomType").value;

    alert(`✅ Terima kasih ${nama}, pesanan ${roomType} Anda pada tanggal ${tanggal} berhasil!`);

    bookingForm.reset();
    bookingModal.style.display = "none";
});
