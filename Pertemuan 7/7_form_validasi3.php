<!-- SOAL 7.3 -->
<!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan Validasi</title> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <style>
            label {
            display: inline-block;
            width: 100px;
            }
            input {
            width: 200px;
            }
            .submit-button {
            margin-left: 0px;
            }
        </style>
    </head>
    <body>
        <h1>Form Input dengan Validasi</h1> 
        <form id="myForm">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span> 
        <br><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span> 
        <br><br>
        <input type="submit" value="Submit">
        </form>
        <br>
        <div id="hasil"></div>
        <script>
        $(document).ready(function () {
            $("#myForm").submit(function (event) {
                event.preventDefault(); 
                var nama = $("#nama").val(); 
                var email = $("#email").val();
                var valid = true;
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }
                if (email === "") {
                $("#email-error").text("Email harus diisi");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }
                if (valid){
                    $.ajax({
                        url: "proses_validasi.php",
                        type: "POST",
                        data: {
                            nama: nama,
                            email: email
                        },
                        success: function (response){
                            $("#hasil").html(response);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>