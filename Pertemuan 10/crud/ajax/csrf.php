<?php
// Set tipe konten sebagai JSON
header('Content-Type: application/json');

// Memulai sesi PHP untuk mengakses atau membuat variabel sesi
session_start();

// Periksa apakah token CSRF sudah dibuat sebelumnya
if (empty($_SESSION['csrf_token'])) {
    // Jika token belum ada, buat token baru dengan menggunakan random_bytes() untuk menghasilkan byte acak
    // kemudian konversi menjadi representasi heksadesimal dengan bin2hex()
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Mendapatkan semua header yang dikirim oleh klien
$headers = apache_request_headers();

// Memeriksa apakah header Csrf-Token ada dalam permintaan
if (isset($headers['Csrf-Token'])) {
    // Memeriksa apakah nilai token dalam header Csrf-Token sama dengan nilai token dalam variabel sesi
    if ($headers['Csrf-Token'] !== $_SESSION['csrf_token']) {
        // Jika token tidak cocok, keluarkan respons JSON dengan pesan error
        exit(json_encode(['error' => 'Wrong CSRF token']));
    }
} else {
    // Jika header Csrf-Token tidak ada dalam permintaan, keluarkan respons JSON dengan pesan error
    exit(json_encode(['error' => 'No CSRF token']));
}
?>