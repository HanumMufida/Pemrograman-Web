<!-- Fungsi -->
<?php

    function perkenalan1(){
        echo "Assalamualaikum, ";
        echo "Perkenalkan, nama saya Nurhidayah</br>";
        echo "Senang berkenalan dengan Anda</br><br>";
    }
    echo "FUNGSI<br>";
    perkenalan1();
    echo"<br>";
    // ----------------------------------------------

    //FUNGSI DENGAN PARAMETER
    // membuat fungsi
    function perkenalan2($nama1, $salam1){
        echo $salam1.", ";
        echo "Perkenalkan, nama saya ".$nama1."</br>";
        echo "Senang berkenalan dengan Anda</br>";
    }
    // memanggil fungsi yang sudah dibuat
    echo "FUNGSI DENGAN PARAMETER<br>";
    perkenalan2("Hamdara", "Halo");
    echo "<hr>";
    $saya1 = "Elok";
    $ucapanSalam1 = "Selamat pagi";
    // memanggil lagi
    perkenalan2($saya1, $ucapanSalam1);
    echo"<br>";
    // ----------------------------------------------

    //PARAMETER DENGAN NILAI DEFAULT
    //membuat fungsi
    function perkenalan3($nama2, $salam2 = "Assalamualaikum"){
        echo $salam2.", ";
        echo "Perkenalkan, nama saya ".$nama2."<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }

    //memanggil fungsi yang sudah dibuat
    echo "PARAMETER DENGAN NILAI DEFAULT<br>";
    perkenalan3("Hamdana", "Hallo");
    echo "<hr>";
    $saya2 = "Elok";
    $ucapanSalam2 = "Selamat Pagi";
    //memanggil lagi tanpa mengisi parameter salam
    perkenalan3($saya2);
    echo "<br>";
    // -------------------------------------------------

    //FUNGSI YANG MENGEMBALIKAN NILAI
    //membuat fungsi
    function hitungUmur1 ($thn_lahir1, $thn_sekarang1){
        $umur1 = $thn_sekarang1 - $thn_lahir1;
        return $umur1;
    }
    echo "FUNGSI YANG MENGEMBALIKAN NILAI<br>";
    echo "Umur saya adalah ". hitungUmur1(2001, 2023) . " tahun";
    echo "<br><br>";
    // isi sesuai dengan tahun lahir kalian
    // -----------------------------------------------------

    // MEMANGGIL FUNGSI DIDALAM FUNGSI
    // membuat fungsi
    function hitungUmur2($thn_lahir2, $thn_sekarang2){
        $umur2 = $thn_sekarang2 - $thn_lahir2;
        return $umur2;
    }
    function perkenalan4 ($nama3, $salam3 = "Assalamualaikum"){
        echo "MEMANGGIL FUNGSI DIDALAM FUNGSI<br>";
        echo $salam3.", ";
        echo "Perkenalkan, nama saya ".$nama3."<br/>";
        // memanggil fungsi lain
        echo "Saya berusia ". hitungUmur2(2001, 2023) . " tahun<br/>";
        echo "Senang berkenalan dengan anda <br/>";
    }
    // memanggil fungsi perkenalan
    perkenalan4("Elok");
    echo "<br>";

    // FUNGSI REKRUSIF
    function tampilkanHaloDunia(){
        echo "Halo dunia! <br>";
        tampilkanHaloDunia();
    }
    echo "FUNGSI REKRUSIF<br><br>";
    // tampilkanHaloDunia();

    // PERULANGAN FOR REKRUSIF
    echo "PERULANGAN FOR REKRUSIF<br>";
    for ($i=1; $i <=25; $i++){
        echo "Perulangan ke-{$i}<br>";
    }
    echo "<br>";

    // PERULANGAN IF FUNCTION
    echo "PERULANGAN IF REKRUSIF<br>";
    function tampilkanAngka (int $jumlah, int $indeks = 1){
        echo "Perulangan ke-{$indeks} <br>";
        // panggil diri sendiri selama $indeks <= $jumlah
        if($indeks < $jumlah){
            tampilkanAngka ($jumlah, $indeks + 1);
        }
    }
    tampilkanAngka(20);
    echo "<br>";
?>