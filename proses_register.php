<?php
include 'koneksi.php';

if (isset($_POST["register"])) {
    $nama = $_POST['nama'];
    $nrp = $_POST['nrp'];   
    $kelas = $_POST['kelas'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (nama, nrp, kelas, password)
    VALUES ('$nama', '$nrp', '$kelas', '$password')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Registrasi berhasil! Silakan login.');window.location='login.php';</script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

?>