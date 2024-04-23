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
            // Set session username
            $_SESSION['username'] = $username;

            // Redirect ke katalog.php
            header("Location: katalog.php");
            exit();
        } else {
            // Password salah, set pesan error dan kembali ke halaman login
            $_SESSION['error'] = "Password salah.";
            header("Location: index.html");
            exit();
        }
    } else {
        // Pengguna tidak ditemukan, set pesan error dan kembali ke halaman index
        $_SESSION['error'] = "Username tidak ditemukan.";
        header("Location: index.html");
        exit();
    }
}
?>
