<?php
// process_login.php

// Simulasi kredensial pengguna yang valid
$valid_username = "Dimas";
$valid_password = "1233433"; // Untuk produksi, simpan hashed password di database

// Ambil data dari form
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Cek apakah kredensial cocok
if ($username === $valid_username && $password === $valid_password) {
    // Login berhasil
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("Location: index.html"); // Arahkan ke halaman dashboard setelah login
    exit();
} else {
    // Login gagal
    echo "<h1>Login Gagal</h1>";
    echo "<p>Username atau password salah. <a href='login.html'>Coba lagi</a></p>";
}
?>
