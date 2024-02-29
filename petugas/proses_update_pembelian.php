<?php
include '../koneksi.php';

$PelangganID = $_POST['PelangganID'];
$NamaPelanggan = $_POST['NamaPelanggan'];
$NomorTelepon = $_POST['NomorTelepon'];
$Alamat = $_POST['Alamat'];

mysqli_query($koneksi, "update pelanggan set NamaPelanggan='$NamaPelanggan', NomorTelepon='$NomorTelepon', Alamat='$Alamat' where PelangganID='$PelangganID' ");


// mysqli_query($koneksi, "delete from pelanggan where PelangganID='$PelangganID'");
// mysqli_query($koneksi, "delete from penjualan where PelangganID='$PelangganID'");

header("location:pembelian.php?pesan=update")
?>