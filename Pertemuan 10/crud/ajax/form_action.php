<?php
// Memulai sesi PHP
session_start();

// Menghubungkan ke file koneksi.php yang berisi skrip untuk menghubungkan ke database
include 'koneksi.php';

// Menghubungkan ke file csrf.php untuk manajemen token CSRF (Namun, penggunaan token CSRF tidak terlihat dalam kode ini)
include 'csrf.php';

// Mendapatkan data dari permintaan POST dan membersihkannya dari karakter yang tidak aman
$id = stripslashes(strip_tags(htmlspecialchars($_POST['id'], ENT_QUOTES)));
$nama = stripslashes(strip_tags(htmlspecialchars($_POST['nama'], ENT_QUOTES)));
$jenis_kelamin = stripslashes(strip_tags(htmlspecialchars($_POST['jenis_kelamin'], ENT_QUOTES)));
$alamat = stripslashes(strip_tags(htmlspecialchars($_POST['alamat'], ENT_QUOTES)));
$no_telp = stripslashes(strip_tags(htmlspecialchars($_POST['no_telp'], ENT_QUOTES)));

// Memeriksa apakah ID sudah ada. Jika tidak, maka dilakukan operasi INSERT untuk menambahkan data anggota baru ke dalam database. Jika ID sudah ada, maka dilakukan operasi UPDATE untuk mengubah data anggota yang sudah ada di dalam database.
if ($id == "") {
    $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES (?, ?, ?, ?)";
    $sql = $db1->prepare($query);
    $sql->bind_param("ssss", $nama, $jenis_kelamin, $alamat, $no_telp);
    $sql->execute();
} else {
    $query = "UPDATE anggota SET nama=?, jenis_kelamin=?, alamat=?, no_telp=? WHERE id =?";
    $sql = $db1->prepare($query);
    $sql->bind_param("ssssi", $nama, $jenis_kelamin, $alamat, $no_telp, $id);
    $sql->execute();
}

// Mengembalikan respons dalam format JSON yang menyatakan sukses
echo json_encode(['success' => 'Sukses']);

// Menutup koneksi ke database
$db1->close();
?>