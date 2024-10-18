<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
//Deklarasi,panjang,lebar,dan tinggi
$panjang =5;
$lebar =4;
$tinggi =3;
//Hitung volume dengan panjang dikali lebar dikali tinggi
$volume=$panjang*$lebar*$tinggi;
//Tampilkan hasil perkalian
?>


<div class="login-container">
<h2> Selamat Muhammad ilham Kamu Berhasil Login</h2>

<div class="login-container2">
      <?php
echo "hasil volume balok adalah=". $volume;
?>
<p>
<a href="01 index volume balok.php">
      <button>Kembali ke Input</button>
</a>

</p>
<p>atau kembali ke : </p>
<a href="http://localhost/">
      <button>Localhost</button>
</a>
<a href="../">
      <button>Folder Awal</button>
</a>