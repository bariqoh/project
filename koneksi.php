<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "data";

$conn = mysqli_connect($hostname, $username, $password, $database);

if ($conn ->connect_error) {
    echo "Koneksi Gagal: " . $conn ->connect_error;
    die ("error");
}
?>