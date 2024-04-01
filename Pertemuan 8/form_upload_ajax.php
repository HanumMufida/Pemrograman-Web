<!-- Pratikum 3 Upload File dengan Php dan Jquery -->
<!DOCTYPE html>
<html>
    <head>
        <title>Unggah File Document</title>
    </head>
    <body>
    <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <input type="submit" name="submit" value="Unggah">
    </form>
    <div id="status"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="upload.js"></script>
    </body>
</html>