<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna</title>
    


<div class="login-container">
<h2> Selamat Muhammad ilham Kamu Berhasil Login</h2>

<div class="login-container2">
<?php
function jenisSegitiga($sisi1, $sisi2, $sisi3) {
    if ($sisi1 == $sisi2 && $sisi2 == $sisi3) {
        return "Segitiga Sama Sisi";
    } elseif ($sisi1 == $sisi2 || $sisi2 == $sisi3 || $sisi1 == $sisi3) {
        return "Segitiga Sama Kaki";
    } else {
        return "Segitiga Sembarang";
    }
}

// Contoh penggunaan
$sisi1 = 5;
$sisi2 = 5;
$sisi3 = 8;

echo jenisSegitiga($sisi1, $sisi2, $sisi3);
?>

</p>

<p>atau kembali ke : </p>
<a href="http://localhost/">
      <button>Localhost</button>
</a>
<a href="../">
      <button>Folder Awal</button>
</a>
