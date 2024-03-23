<!DOCTYPE html>
<html>
<head>
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input PHP</h2>
    <?php
    $inputErr = "";
    $emailErr = ""; 
    $input = "";
    $email = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["input"])) {
            $inputErr = "<span style='color: red;'>Input harus diisi</span><br>";
        } else {
            $input = $_POST['input'];
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
            echo "Data berhasil disimpan<br>";
        }

        if (empty($_POST["email"])) {
            $emailErr = "<span style='color: red;'>Email harus diisi</span><br>";
        } else {
            $email = $_POST['email'];
            $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Email berhasil disimpan<br>";
            } else {
                $emailErr = "<span style='color: red;'>Email tidak sesuai format!</span><br>";
            }
        }
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="input">Input: </label>
    <input type="text" name="input" id="input" value="<?php echo $input; ?>"> <br>
    <span class="error"><?php echo $inputErr; ?></span><br>
    <label for="email">Email: </label>
    <input type="text" name="email" id="email" value="<?php echo $email; ?>"> <br>
    <span class="error"><?php echo $emailErr; ?></span><br>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($input)) {
        echo "<p>Data yang diinputkan: $input<br>Email yang diinputkan: $email</p>";
    }
    ?>
    <?php
    //memeriksa apakah input adalah email yang valid
    $email = $_POST['email'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        //Lanjutkan dengan pengolahan email yang aman
        echo "Email berhasil disimpan<br>";
    } else{
        // Tangani input yang tidak valid
        $emailErr = "<span style='color: red;'>Email tidak sesuai format!</span><br>";
    }
?>
</body>
</html>