<?php
$connect = new mysqli("localhost", "root", "", "dbfilman");
if(!$connect)
{
echo "Koneksi Gagal";
exit();
}
?>