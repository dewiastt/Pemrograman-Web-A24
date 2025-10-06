<?php
session_start();

session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Logout - The Luxe Hotel</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                  url('hotel.jpg') no-repeat center center/cover;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .logout-box {
      background: rgba(255, 255, 255, 0.95);
      padding: 30px 40px;
      border-radius: 15px;
      text-align: center;
      width: 350px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
      animation: fadeIn 0.8s ease-in-out;
    }

    h2 {
      color: #2c3e50;
      margin-bottom: 20px;
    }

    p {
      color: #34495e;
      margin-bottom: 20px;
    }

    a {
      display: inline-block;
      padding: 12px 20px;
      background: #2c3e50;
      color: #fff;
      border-radius: 8px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s;
    }

    a:hover {
      background: #1abc9c;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="logout-box">
    <h2>Anda telah logout ✅</h2>
    <p>Terima kasih telah menggunakan The Luxe Hotel.</p>
    <a href="login.php">🔑 Login Kembali</a>
  </div>
</body>
</html>
