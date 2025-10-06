<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Luxe Hotel</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Luxe Hotel</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header>
    <nav>
      <h1>🏨 The Luxe Hotel</h1>
      <ul>
        <li><a href="index.php#home">Beranda</a></li>
        <li><a href="index.php#about">Tentang</a></li>
        <li><a href="index.php#rooms">Kamar</a></li>
        <li><a href="index.php#media">Media</a></li>
        <li><a href="index.php#contact">Kontak</a></li>
        
        <?php if (isset($_SESSION['username'])): ?>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="logout.php">Logout</a></li>
        <?php else: ?>
          <li><a href="login.php">Login</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>

  <main>
    <?php if ($page == "home") { ?>
      <section id="home">
        <div class="overlay"></div>
        <div class="content">
          <img src="hotel.jpg" alt="Hotel The Luxe">
          <div class="hero-text">
            <h2>✨ Selamat Datang di The Luxe Hotel ✨</h2>
            <p>Pengalaman menginap mewah di pusat kota</p>
          </div>
        </div>
      </section>

    <?php } elseif ($page == "about") { ?>
      <section id="about">
        <h2>📖 Tentang Kami</h2>
        <p>
          The Luxe Hotel adalah hotel bintang 5 yang terletak di pusat kota, menawarkan pengalaman menginap yang mewah dan nyaman. 
          Kami berkomitmen memberikan layanan terbaik, fasilitas modern, dan pengalaman yang tak terlupakan bagi setiap tamu.
        </p>
        <hr>
      </section>

    <?php } elseif ($page == "rooms") { ?>
      <section id="rooms">
        <h2>🛏️ Daftar Kamar</h2>
        <p>Kami menyediakan berbagai pilihan kamar dari Deluxe, Suite, hingga Presidential.</p>
        <hr>
      </section>

    <?php } elseif ($page == "media") { ?>
      <section id="media">
        <h2>🎥 Media Hotel</h2>
        <video width="400" controls>
          <source src="promosi.mp4" type="video/mp4">
          Browser Anda tidak mendukung pemutaran video.
        </video>
        <hr>
      </section>

    <?php } elseif ($page == "contact") { ?>
      <section id="contact">
        <h2>📞 Kontak</h2>
        <p>Email: info@theluxe.com</p>
        <p>Telepon: +62 812-3456-7890</p>
        <hr>
      </section>
    <?php } ?>
  </main>

  <footer>
    <p>&copy; <span id="tahun"></span> The Luxe Hotel</p>
    <button id="tombolModeGelap">Mode Gelap</button>
    <p>Referensi desain: 
      <a href="https://www.swissotel.com/hotels/chicago/" target="_blank">
        Swissotel Chicago
      </a>
    </p>
  </footer>

  <script src="scrip.js"></script>
</body>
</html>
