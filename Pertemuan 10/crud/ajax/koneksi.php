<?php
// Mendefinisikan konstanta untuk koneksi ke database MySQL
define ('HOST', 'localhost'); // Nama host dari server MySQL (dalam hal ini, localhost)
define ('USER', 'root'); // Nama pengguna MySQL untuk mengautentikasi koneksi (dalam hal ini, root)
define ('PASS', ''); // Kata sandi pengguna MySQL (dalam hal ini, kosong karena pengguna root default)
define ('DB1', 'prakwebdb'); // Nama database MySQL yang akan digunakan (dalam hal ini, prakwebdb)

// Membuat koneksi ke database MySQL menggunakan objek mysqli
$db1 = new mysqli(HOST, USER, PASS, DB1);
?>