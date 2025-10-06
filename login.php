<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $valid_user = "admin";
    $valid_pass = "12345";

    if ($user === $valid_user && $pass === $valid_pass) {
        $_SESSION['username'] = $user;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login - The Luxe Hotel</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                  url('hotel.jpg') no-repeat center center/cover;
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-container {
      background: rgba(255, 255, 255, 0.95);
      padding: 30px 40px;
      border-radius: 15px;
      width: 350px;
      box-shadow: 0px 8px 20px rgba(0,0,0,0.3);
      text-align: center;
      animation: fadeIn 1s ease-in-out;
    }

    h2 {
      margin-bottom: 20px;
      color: #2c3e50;
    }

    label {
      display: block;
      text-align: left;
      margin-bottom: 5px;
      font-weight: bold;
      color: #34495e;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #bdc3c7;
      border-radius: 8px;
      font-size: 14px;
    }

    button {
      width: 100%;
      padding: 12px;
      background: #2c3e50;
      color: #fff;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background: #1abc9c;
    }

    p.error {
      color: red;
      font-size: 14px;
      margin-bottom: 15px;
    }

    a {
      display: block;
      margin-top: 15px;
      text-decoration: none;
      color: #2c3e50;
      font-weight: bold;
    }

    a:hover {
      color: #1abc9c;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>🔑 Login The Luxe Hotel</h2>
    
    <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>

    <form action="login.php" method="POST">
        <label>Username:</label>
        <input type="text" name="username" placeholder="Masukkan username" required>

        <label>Password:</label>
        <input type="password" name="password" placeholder="Masukkan password" required>

        <button type="submit">Login</button>
    </form>

    <a href="index.php">⬅️ Kembali ke Beranda</a>
  </div>
</body>
</html>
