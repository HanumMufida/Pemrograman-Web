<?php
session_start();

// Memeriksa apakah pengguna telah login
if (!isset($_SESSION['username'])) {
    // Jika tidak, redirect ke halaman login
    header("Location: index.html"); // Ganti dengan nama file login Anda
    exit();
}

// Jika sudah login, tampilkan halaman utama
echo "<h1>Selamat datang, " . $_SESSION['username'] . "!</h1>";
echo "<p>Ini adalah halaman utama yang hanya dapat diakses setelah login.</p>";

// Tambahkan tombol logout
echo "<a href='logout.php'>Logout</a>"; // Pastikan Anda membuat file logout.php
?>
