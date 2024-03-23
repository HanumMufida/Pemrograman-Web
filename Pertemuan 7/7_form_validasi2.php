<!-- KEMBANGAN DARI FILE FORM_VALIDASI.PHP  -->
<html>
    <head>
        <title>Form input dengan validasi</title> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <style>
            label {
                display: inline-block;
                width: 100px; 
            }
            input {
                width: 200px;
            }
            .submit-button {
                width: 100px; margin-left: 0px;
            }
        </style>
    </head>
    <body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post" action="proses_validasi.php"> 
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span> <br><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span> <br><br>
        <input type="submit" value="Submit" class="submit-button">
    </form> 
    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                var nama = $("#nama").val();
                var email = $("#email").val();
                var valid = true;
                if (nama == "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }
                if (email === "") {
                    $("#email-error").text("Email harus diisi."); 
                    valid = false;
                } else {
                    $("#email-error").text("");
                }
                if (!valid){
                    event.preventDefault();
                }
            });
        });
    </script>
</body>
</html>