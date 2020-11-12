<?php
$value ='achmatim';
$value2 = 'Achmad Solichin';

setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600);

echo "<h1>Ini Halaman Pengesetan cookie</h1>";

echo "<h2>klik <a href='cookie02.php'>di sini</a> Untuk pemeriksaan cookie</h2>";
?>
