<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php"); 
    exit;
}

$username = $_SESSION['username'];

$pemesanan = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama     = htmlspecialchars($_POST['nama']);
    $checkin  = htmlspecialchars($_POST['checkin']);
    $checkout = htmlspecialchars($_POST['checkout']);
    $tipe     = htmlspecialchars($_POST['tipe']);

    $pemesanan = [
        'nama' => $nama,
        'checkin' => $checkin,
        'checkout' => $checkout,
        'tipe' => $tipe
    ];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard - The Luxe Hotel</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                  url('hotel.jpg') no-repeat center center/cover;
      background-size: cover;
      color: #333;
    }

    header {
      background: rgba(255,255,255,0.95);
      padding: 20px;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    header h2 {
      margin: 0;
      color: #2c3e50;
    }

    header p {
      margin: 5px 0;
      color: #34495e;
    }

    .container {
      max-width: 1100px;
      margin: 30px auto;
      padding: 20px;
      background: rgba(255, 255, 255, 0.9);
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
      animation: fadeIn 1s ease-in-out;
    }

    h3 {
      text-align: center;
      color: #2c3e50;
      margin-bottom: 20px;
    }

    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
    }

    .card {
      background: #fff;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      transition: transform 0.3s;
    }

    .card:hover {
      transform: translateY(-8px);
    }

    .card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .card-content {
      padding: 15px;
    }

    .card-content h4 {
      margin: 0 0 10px;
      color: #2c3e50;
    }

    .card-content p {
      margin: 0;
      font-size: 14px;
      color: #555;
    }

    .logout-btn {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background: #2c3e50;
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      transition: background 0.3s;
    }

    .logout-btn:hover {
      background: #1abc9c;
    }

    form {
      max-width: 500px;
      margin: 0 auto;
      background: #fff;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    form label {
      display: block;
      margin: 10px 0 5px;
      font-weight: bold;
      color: #2c3e50;
    }

    form input, form select, form button {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    form button {
      background: #2c3e50;
      color: #fff;
      border: none;
      cursor: pointer;
      transition: 0.3s;
    }

    form button:hover {
      background: #1abc9c;
    }

    .result {
      margin-top: 20px;
      padding: 15px;
      background: #ecf0f1;
      border-radius: 10px;
      text-align: center;
    }

    .result h4 {
      margin: 0 0 10px;
      color: #2c3e50;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

  <header>
    <h2>Selamat Datang, <?php echo htmlspecialchars($username); ?> 🎉</h2>
    <p>Anda berhasil login ke Dashboard The Luxe Hotel</p>
    <a class="logout-btn" href="logout.php">Logout</a>
  </header>

  <div class="container">
    <h3>🏨 Daftar Kamar</h3>
    <div class="cards">
      <div class="card">
        <img src="foto/deluxe.jpg" alt="Deluxe Room">
        <div class="card-content">
          <h4>Deluxe Room</h4>
          <p>Kamar luas dengan pemandangan kota, king size bed, dan kamar mandi mewah.</p>
        </div>
      </div>
      <div class="card">
        <img src="foto/suite.jpeg" alt="Suite Room">
        <div class="card-content">
          <h4>Suite Room</h4>
          <p>Suite dengan ruang tamu terpisah, fasilitas premium, dan layanan VIP.</p>
        </div>
      </div>
      <div class="card">
        <img src="foto/presidential.jpeg" alt="Presidential Suite">
        <div class="card-content">
          <h4>Presidential Suite</h4>
          <p>Kamar termewah dengan private lounge, jacuzzi, dan pelayanan butler 24 jam.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <h3>✨ Fasilitas Hotel</h3>
    <div class="cards">
      <div class="card">
        <img src="foto/kolam renang.webp" alt="Kolam Renang">
        <div class="card-content">
          <h4>Kolam Renang Infinity</h4>
          <p>Kolam renang rooftop dengan pemandangan kota yang menakjubkan.</p>
        </div>
      </div>
      <div class="card">
        <img src="foto/spa.jpeg" alt="Spa">
        <div class="card-content">
          <h4>Spa & Wellness</h4>
          <p>Relaksasi dengan berbagai pilihan spa, pijat, dan perawatan tubuh.</p>
        </div>
      </div>
      <div class="card">
        <img src="foto/restoran.jpg" alt="Restoran">
        <div class="card-content">
          <h4>Restoran & Bar</h4>
          <p>Menu internasional dan lokal dengan suasana elegan dan live music.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <h3>📝 Form Pemesanan Kamar</h3>
    <form action="" method="post">
      <label for="nama">Nama Lengkap</label>
      <input type="text" id="nama" name="nama" required>

      <label for="checkin">Tanggal Check-in</label>
      <input type="date" id="checkin" name="checkin" required>

      <label for="checkout">Tanggal Check-out</label>
      <input type="date" id="checkout" name="checkout" required>

      <label for="tipe">Pilih Tipe Kamar</label>
      <select id="tipe" name="tipe" required>
        <option value="Deluxe">Deluxe Room</option>
        <option value="Suite">Suite Room</option>
        <option value="Presidential">Presidential Suite</option>
      </select>

      <button type="submit">Pesan Sekarang</button>
    </form>

    <?php if ($pemesanan): ?>
      <div class="result">
        <h4>✅ Pemesanan Berhasil!</h4>
        <p>Nama: <b><?php echo $pemesanan['nama']; ?></b></p>
        <p>Tanggal Check-in: <b><?php echo $pemesanan['checkin']; ?></b></p>
        <p>Tanggal Check-out: <b><?php echo $pemesanan['checkout']; ?></b></p>
        <p>Tipe Kamar: <b><?php echo $pemesanan['tipe']; ?></b></p>
      </div>
    <?php endif; ?>
  </div>

</body>
</html>
