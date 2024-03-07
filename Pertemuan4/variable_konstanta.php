<!-- 
    Pratikum 1 : Variable dan konstanta.
    Membuat file baru dalam dasarWeb, bernama variable_konstanta.php 
    buat hasil tidak menjadi 1 baris, jadi tampilan echo harus terpisah. 
-->

<?php
    $angka1 = 10;
    $angka2 = 5;
    $hasil = $angka1 + $angka2;
    echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil <br>";

    $benar = true;
    $salah = false;
    echo "Variable benar : $benar, Variable salah: $salah <br>";

    //Mendefinisikan konstanta untuk nilai tetap
    define("NAMA_SITUS", "Websiteku.com");
    define("TAHUN_PENDIRIAN", 2023);

    echo "Selamat datang di " . NAMA_SITUS . ", situs yang
    didirikan pada tahun " . TAHUN_PENDIRIAN . ".";
?>
