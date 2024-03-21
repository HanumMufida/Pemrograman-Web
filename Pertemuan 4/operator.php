<!-- 
    Pratikum 3 : Penggunaan Operator PHP
    Membuat file baru dalam dasarWeb, bernama operator.php 
    Ketikkan kode pada langkah 2.
 -->

<?php
    $a = 10;
    $b = 5;

    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b;
    // Melengkapi kode program diatas sehingga menampilkan hasil dan rapi.
    echo "VARIABLE DAN KONSTANTA<br>";
    echo "Hasil dari $a + $b = $hasilTambah <br>";
    echo "Hasil dari $a - $b = $hasilKurang <br>";
    echo "Hasil dari $a * $b = $hasilKali <br>";
    echo "Hasil dari $a / $b = $hasilBagi <br>";
    echo "Hasil dari $a % $b = $sisaBagi <br>";
    echo "Hasil dari $a ** $b = $pangkat <br>";
    echo "<br>";

    // Menambahkan kode didalam operator.php
    $hasilSama = $a == $b;
    $hasilTidakSama = $a != $b;
    $hasilLebihKecil = $a < $b;
    $hasilLebihBesar = $a > $b;
    $hasilLebihKecilSama = $a <= $b;
    $hasilLebihBesarSama = $a >= $b;
    // Melengkapi kode program diatas sehingga menampilkan hasil dan rapi.
    echo "PENGGUNAAN TIPE DATA<br>";
    echo "Hasil sama $a = $b = $hasilSama <br>";
    echo "Hasil tidak sama $a != $b = $hasilTidakSama <br>";
    echo "Hasil lebih kecil $a < $b = $hasilLebihKecil <br>";
    echo "Hasil lebih besar $a > $b = $hasilLebihBesar <br>";
    echo "Hasil lebih kecil sama $a <= $b = $hasilLebihKecilSama <br>";
    echo "Hasil lebih besar sama $a >= $b = $hasilLebihBesarSama <br>";
    echo "<br>";

    // Menambahkan kode didalam operator.php
    $hasilAnd = $a && $b;
    $hasilOr = $a || $b;
    $hasilNotA = !$a;
    $hasilNotB = !$b;
    // Melengkapi kode program diatas sehingga menampilkan hasil dan rapi.
    echo "PENGGUNAAN OPERATOR PHP<br>";
    echo "Hasil and $a && $b = $hasilAnd <br>";
    echo "Hasil or $a || $b = $hasilOr<br>";
    echo "Hasil NotA dari $a = $hasilNotA<br>";
    echo "Hasil NotB dari $b = $hasilNotB<br>";
    echo "<br>";

    // Menambahkan kode kedalam operator.php dan melengkapi kode program sehingga
    // menampilkan hasil dan rapi
    $a += $b;
    echo "Hasil += : $a<br>"; 
    $a -= $b;
    echo "Hasil -= : $a<br>";  
    $a *= $b;
    echo "Hasil *= : $a<br>";  
    $a /= $b;
    echo "Hasil /= : $a<br>";  
    $a %= $b;
    echo "Hasil %= : $a<br>";    
    echo "<br>";

    // Menambahkan kode kedalam operator.php
    $hasilIndentik = $a === $b;
    $hasilTidakIndentik = $a !== $b;
    // Melengkapi kode program diatas sehingga menampilkan hasil dan rapi.
    echo "Hasil indentik = $hasilIndentik<br>";
    echo "Hasil tidak identik = $hasilTidakIndentik<br>";
    echo "<br>";

    // SOAL CERITA :  Sebuah restoran memiliki 45 kursi di dalamnya. 
    // Pada suatu malam, 28 kursi telah ditempati oleh pelanggan. 
    // Berapa persen kursi yang masih kosong di restoran tersebut?
    $totalKursi = 45;
    $kursiDitempati = 28;
    $kursiKosong = $totalKursi - $kursiDitempati;
    $persentaseKursiKosong = ($kursiKosong / $totalKursi) * 100;
    
    echo "SOAL CERITA : Sebuah restoran memiliki 45 kursi di dalamnya. Pada suatu malam, 
    28 kursi telah ditempati oleh pelanggan. Berapa persen kursi yang masih kosong di restoran tersebut?<br>";
    echo "JAWAB<br>";
    echo "Jumlah kursi yang masih kosong: $kursiKosong dari $totalKursi <br>";
    echo "Persentase kursi yang masih kosong: $persentaseKursiKosong<br>";
?>