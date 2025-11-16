<?php
include 'koneksi.php';

if (isset($_POST["login"])) {
    $nrp = $_POST['nrp'];   
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE nrp='$nrp'
     AND password='$password'";

    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Login berhasil!');window.location='dashboard.php';</script>";
    } else {
        echo "<script>alert('NRP atau Password salah!');window.location='login.php';</script>";
    }
}
?>