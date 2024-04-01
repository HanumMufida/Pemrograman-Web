<?php
// Mulai sesi PHP untuk mengakses atau membuat variabel sesi
session_start();

// Periksa apakah token CSRF sudah dibuat sebelumnya
if(empty($_SESSION['csrf_token'])) {
    // Jika token belum ada, buat token baru dengan menggunakan random_bytes() untuk menghasilkan byte acak
    // kemudian konversi menjadi representasi heksadesimal dengan bin2hex()
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>