<?php
include 'koneksi.php';
include 'layout/header.html';

session_start();
if (isset($_SESSION['nrp'])) {
    $nrp = $_SESSION['nrp'];

    $query = "SELECT * FROM users WHERE nrp='$nrp'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $nama = $row['nama'];
    }
} else {
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h3><?php echo "Selamat Datang, " . $_SESSION['$nama']."<br>" ?></h3>
</body>
</html>
<?php
}
?>