<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa Array Multidimensi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .student-container {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            border: 1px solid #ccc; 
            padding: 10px; 
        }
        .student-photo {
            width: 80px; /* ubah lebar gambar */
            height: 90px; /* ubah tinggi gambar */
            object-fit: cover; 
            margin-right: 20px;
        }
        .student-details {
            display: flex;
            flex-direction: column;
            margin: 10px 0;
        }
        .student-details p {
            margin: 0;
        }
        .symbol {
            font-size: 10px;
            color: #333;
        }
    </style>
</head>
<body>
    <h2>Data Mahasiswa array multidimensi</h2>
    <h2>Hanum Mufida Akhsanti/11/SIB-2D</h2>

    <?php
    // Array multidimensi untuk data mahasiswa
    $mahasiswa = array(
        array("Nama" => "Lee Do Hyun", "NIM" => "334411", "Jurusan" => "Teknik Informatika", "Email" => "dohyun@gmail.com", "photo" => "photo1.jpg"),
        array("Nama" => "Lee Dong wook", "NIM" => "778866", "Jurusan" => "Teknik Sipil", "Email" => "dongwook@gmail.com", "photo" => "photo2.jpg"),
        array("Nama" => "Hyun Bin", "NIM" => "229955", "Jurusan" => "Teknik Kimia", "Email" => "hyunbin@gmail.com", "photo" => "photo3.jpg"),
        array("Nama" => "Park Sin Hye", "NIM" => "117690", "Jurusan" => "Teknik Mesin", "Email" => "sinhye@gmail.com", "photo" => "photo4.jpg"),
        array("Nama" => "Kim Bum", "NIM" => "343434", "Jurusan" => "Teknik Sipil", "Email" => "kimbum@gmail.com", "photo" => "photo5.jpg")
    );

    // Loop melalui array untuk menampilkan data mahasiswa
    foreach ($mahasiswa as $data) {
        echo '<div class="student-container">';
        echo '<img src="' . $data["photo"] . '" alt="poto" class="student-photo">';
        echo '<div class="student-details">';
        echo '<p><span class="symbol">◉</span> Nama: ' . $data["Nama"] . '</p>';
        echo '<p><span class="symbol">◉</span> NIM: ' . $data["NIM"] . '</p>';
        echo '<p><span class="symbol">◉</span> Jurusan: ' . $data["Jurusan"] . '</p>';
        echo '<p><span class="symbol">◉</span> Email: ' . $data["Email"] . '</p>';
        echo '</div>';
        echo '</div>';
    }
    ?>

</body>
</html>
