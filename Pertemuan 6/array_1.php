<!-- INDEXED ARRAY -->
<!DOCTYPE html>
<html>
    <head>
</head>
<body>
    <h2>Array Terindkes</h2>
<?php
    $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

    echo $Listdosen[2] . "<br>";
    echo $Listdosen[0] . "<br>";
    echo $Listdosen[1] . "<br>";
?>
</body>
</html>

<!-- MENGGUNAKAN PERULANGAN -->
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Array Terindkes Menggunakan Perulangan</h2>
<?php
    $Listdosen1 = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

    // Menggunakan perulangan foreach untuk menampilkan isi array
    foreach ($Listdosen1 as $dosen) {
        echo $dosen . "<br>";
    }
?>
</body>
</html>