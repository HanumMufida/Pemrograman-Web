<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $uploaded_files = array(); // Array untuk menyimpan nama file yang berhasil diunggah
    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $extensions_allowed = array("jpg", "jpeg", "png", "gif");

        if (!in_array($file_ext, $extensions_allowed)) {
            $errors[] = "Ekstensi file yang diizinkan adalah PNG, JPG, JPEG, atau GIF. <br>";
        }

        if ($file_size > 2097152) {
            $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB <br>';
        }

        if (empty($errors)) {
            move_uploaded_file($file_tmp, "uploads/" . $file_name);
            $uploaded_files[] = $file_name; // Menambahkan nama file yang berhasil diunggah ke dalam array
        }
    }

    if (empty($errors)) {
        echo "File berhasil diunggah<br>";
        echo "Daftar file yang diunggah: <br>";
        foreach ($uploaded_files as $file) {
            echo $file . "<br>";
        }
    } else {
        echo implode(" ", $errors);
    }
}
?>
