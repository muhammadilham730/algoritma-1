<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna</title>
<style>
    </style>

<body>

    <strong style="-webkit-text-fill-color: blue; text-transform:uppercase"></strong> 
   
    
                <?php

                if ($_GET) {
                    echo $_GET['nama'];
                    echo '  Dengan Email: ' . $_GET['email'];
                    $_GET['status'] = 'aktif';
                }

                ?>



    </body>
</table>


    <div class="login-container">
       
    <div class="welcome-message2">Selamat Datang Muhammad ilham</div>
    <div class="welcome-message1"><h4>Di Program Project Perurutan Notasi Algoritma jenis segitiga<h4></div>
    

    <form method="POST" action="output perurutan.php">
        <label for="Masukkan Nilai A">Masukkan Nilai A:</label><br>
        <input type="text" id="Masukkan Nilai A" name="Masukkan Nilai A" required><br>

        <label for="Masukkan Nilai T">Masukkan Nilai T:</label><br>
        <input type="Masukkan Nilai T" id="Masukkan Nilai T" name="Masukkan Nilai T" required><br>

        
        <input type="submit" value="Login">
    </form>
</div>


</head>
</body>

</html>




