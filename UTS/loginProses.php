<?php
session_start();

// Data pengguna (user => password)
$users = array(
    "user1" => "password1",
    "user2" => "password2"
);

// Memeriksa apakah data yang dikirimkan dari form login valid
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Memeriksa apakah pengguna ada dalam daftar
    if (isset($users[$username])) {
        // Memeriksa apakah password cocok
        if ($users[$username] === $password) {
            // Set cookie yang berakhir dalam 1 minggu
            setcookie("username", $username, time() + (7 * 24 * 60 * 60), "/");  // Cookie berlaku selama 1 minggu

            // Redirect ke katalog.html
            header("Location: katalog.html");
            exit();
        } else {
            // Password salah, set pesan error dan kembali ke halaman login
            $_SESSION['error'] = "Password salah.";
            header("Location: login.html");
            exit();
        }
    } else {
        // Pengguna tidak ditemukan, set pesan error dan kembali ke halaman login
        $_SESSION['error'] = "Username tidak ditemukan.";
        header("Location: login.html");
        exit();
    }
}
?>
