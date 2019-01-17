<?php
include 'koneksinilai.php';
$induk		= $_POST['induk'];
$nama			= $_POST['name'];
$date			= $_POST['date'];
$pass			= $_POST['pass'];
$status		= $_POST['status'];

$printah = "INSERT INTO siswa (induk, name, date, pass, status) VALUES ('$induk', '$nama', '$date', '$pass', '$status')";
mysqli_query($konek, $printah);
header('location:indexsiswa.php');
?>
