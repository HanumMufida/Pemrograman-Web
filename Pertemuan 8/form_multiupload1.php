<!-- SOAL 2.2 -->
<html>
    <head>
        <title>Multiupload Dokumen</title>
    </head>
    <body>
        <h2>Unggah Dokumen</h2>
        <form action="proses_upload1.php" method="post" enctype="multipart/form-data">
            <input type="file" name="files[]" multiple="multiple"
            accept=" .jpg, .jpeg, .png, .gif">
        <input type="submit" value="Unggah">
    </form>
</body>
</html>