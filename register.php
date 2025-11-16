<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <img src="logo.png" alt="Logo">
    <h1>Taekwondo PENS</h1>
    <form action="proses_register.php" method="POST">
        <h3>Daftar Akun</h3>
        <input type="text" name="nama" placeholder="Nama Lengkap" required>
        <input type="number" name="nrp" placeholder="NRP" required>
        <input type="text" name="kelas" placeholder="Kelas" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Konfirmasi Password" required>
        <button type="submit" name="register">Daftar</button>
        <button>Sudah punya akun?  <a href="login.php">Login di sini</a></button>
    </form>
</body>
</html>