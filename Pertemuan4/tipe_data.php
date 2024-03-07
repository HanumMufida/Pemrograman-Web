<!-- 
    Pratikum 2 : Penggunaan Tipe Data
    Membuat file baru dalam dasarWeb, bernama tipe_data.php 
    Ketikkan kode pada langkah 2.
 -->

<?php
    $a = 10;
    $b = 5;
    $c = $a + 5;
    $d = $b + (10 * 5);
    $e = $d - $c;

    echo "Variable a: {$a} <br>";
    echo "Variable b: {$b} <br>";
    echo "Variable c: {$c} <br>";
    echo "Variable d: {$d} <br>";
    echo "Variable e: {$e} <br>";

    var_dump($e);

    // Menambahkan isi dari file tipe_data.php dengan kode dibawah
    $nilaiMatematika = 5.1;
    $nilaiIPA = 6.7;
    $nilaiBahasaIndonesia = 9.3;

    $rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;
    echo "<br><br>";
    echo "Matematika: {$nilaiMatematika} <br>";
    echo "IPA: {$nilaiIPA} <br>";
    echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
    echo "Rata-rata: {$rataRata} <br>";

    var_dump($rataRata);
    echo "<br><br>";

    // Menambahkan isi dari file tipe_data dengan kode dibawah
    $apakahSiswaLulus = true;
    $apakahSiswaSudahUjian = false;

    var_dump($apakahSiswaLulus);
    echo "<br>";
    var_dump($apakahSiswaSudahUjian);

    // Menambahkan isi dari file tipe_data dengan kode dibawah
    $namaDepan = "Ibnu";
    $namaBelakang = 'Jakaria';

    $namaLengkap = "{$namaDepan} {$namaBelakang}";
    $namaLengkap2 = $namaDepan . ' ' . $namaBelakang;
    echo "<br><br>";
    echo "Nama Depan: {$namaDepan} <br>";
    echo 'Nama Belakang: ' . $namaBelakang . '<br>';
    echo "<br>";
    echo $namaLengkap;

    // Menambahkan isi dari file tipe_data dengan kode dibawah
    $listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
    echo $listMahasiswa[0];
?>