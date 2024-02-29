<?php
$koneksi = mysqli_connect("localhost", "root", "", "kasir-afif");

if (mysqli_connect_errno()) {
     echo "koneksi databese gagal : " . mysqli_connect_error();
}
?>