<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna</title>
    

</head>
<body>
<div class="login-container">
        
    <div class="welcome-message2">Selamat Datang Muhammad ilham</div>
    <div class="welcome-message1"><h4>Di Program Project Percabangan Notasi Algoritma Mentukan jenis segitiga<h4>



 <strong style="-webkit-text-fill-color: blue; text-transform:uppercase"></strong> 


<form method="GET" action="output percabangan.php">

  <label for="Input jenis segitiga">Input menetukan jenis segitiga:</label>
  <input type="text" id="Input jenis segitiga" name="Input jenis segitiga" required><br><br>
  
  
  <input type="submit" value="Hasil Input">
</form>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
// Simulasi data pengguna yang terdaftar di sistem (untuk contoh ini hardcoded)
$jenissegitiga = [
    'Input jenis segitiga' => 'menentukan jenis segitiga 2024',     

];
}