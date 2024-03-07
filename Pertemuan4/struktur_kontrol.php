<!-- 
    Pratikum 4 : Penggunaan Struktur Kontrol pada PHP
    Membuat file baru dalam dasarWeb, bernama operator.php 
    Ketikkan kode pada langkah 2.
 -->

<?php
    // Percabangan If Else
    $nilaiNumerik = 92;
    echo "PERCABANGAN IF ELSE<br>";
    if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
        echo "Nilai huruf: A";
    }else if ($nilaiNumerik >= 80 && $nilaiNumerik <90){
        echo "Nilai huruf: B";
    }else if ($nilaiNumerik >= 70 && $nilaiNumerik <80){
        echo "Nilai huruf: C";
    }else if ($nilaiNumerik < 70){
        echo "Nilai huruf: D";
    }
    echo "<br>";

    // Penggunaan While untuk menghitung hari sampai dengan batas jarak target.
    $jarakSaatIni = 0;
    $jarakTarget = 500;
    $peningkatanHarian = 30;
    $hari = 0;

    while ($jarakSaatIni < $jarakTarget){
        $jarakSaatIni += $peningkatanHarian;
        $hari++;
    }
    echo "<br>";
    echo "PENGGUNAAN WHILE<br>";
    echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";
    echo "<br>";

    // Perulangan For
    $jumlahLahan = 10;
    $tanamanPerlahan = 5;
    $buahPerTanaman = 10;
    $jumlahBuah = 0;

    for ($i = 1; $i <= $jumlahLahan; $i++){
        $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
    }
    echo "<br>";
    echo "PERULANGAN FOR<br>";
    echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";
    echo "<br>";

    // Perulangan Foreach
    $skorUjian = [85, 92, 78, 96, 88];
    $totalSkor = 0;

    foreach ($skorUjian as $skor){
        $totalSkor += $skor;
    }
    echo "<br>";
    echo "PERULANGAN FOREACH<br>";
    echo "Total skor ujian adalah: $totalSkor";
    echo "<br>";
    echo "<br>";
    echo "PERULANGAN FOREACH DAN MEMECAH NILAI PADA ARRAY<br>";

    $nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
    
    foreach ($nilaiSiswa as $nilai){
        if ($nilai < 60){
            echo "Nilai: $nilai (Tidak Lulus) <br>";
            continue;
        }
        echo "Nilai: $nilai (Lulus) <br>";
    }
    echo "<br>";

    // SOAL CERITA 1
    $nilaiMtk = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
    sort($nilaiMtk);

    $jumlahNilaiMtk = 0;
    for ($i = 2; $i < (count($nilaiMtk)-2); $i++){
        $jumlahNilaiMtk += $nilaiMtk[$i];
    }
    $rataRata = $jumlahNilaiMtk / (count($nilaiMtk)-4);
    echo "SOAL CERITA 1 : Ada seorang guru ingin menghitung total nilai dari 10 siswa dalam ujian matematika. 
    Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah. 
    Bantu guru ini menghitung total nilai 
    yang akan digunakan untuk menentukan nilai rata-rata setelah mengabaikan nilai tertinggi dan terendah. 
    Berikut daftar nilai dari 10 siswa 
    (85, 92, 78, 64, 90, 75, 88, 79, 70, 96)<br>";
    echo "<br>";
    echo "JAWAB : ";
    echo "<br> Rata-rata nilai MTK = $rataRata";
    echo "<br>";

    // SOAL CERITA 2
    echo "<br>";
    echo "SOAL CERITA 2 : Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000.
    Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000.
    Bantu pelanggan ini untuk menghitung harga yang harus dibayar setelah mendapatkan diskon<br>";
    echo "<br>";
    echo "JAWAB : <br>";
    $totalBayar = 12000;
    if ($totalBayar > 10000){
        echo "Selamat anda mendapatkan diskon 20%<br>";
        echo "Total belanja anda : $totalBayar<br>";
        echo "Total bayar :". $totalBayar-($totalBayar*0.20) . "<br>";
    }else
        echo "<br>Total bayar : $totalBayar";
    echo "<br>";

    // SOAL CERITA 3
    echo "<br>";
    echo "SOAL CERITA 3 : Seorang pemain game ingin menghitung total skor mereka dalam permainan.
    Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan.
    Jika mereka memiliki lebih dari 500 poin, maka mereka akan mendapatkan hadiah tambahan.
    Buat tampilan baris pertama “Total skor pemain adalah: (poin)”.
    Dan baris kedua “Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)”<br>";
    echo "<br>";
    echo "JAWAB : <br>";
    $skorPemain = 600;
    echo "Total skor pemain adalah : $skorPemain";
    $hadiahTambahan = ($skorPemain>500) ? "YA" : "TIDAK";
    echo "<br>Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";
    ?>