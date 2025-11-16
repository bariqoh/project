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
    <form action="proses_login.php" method="POST">
        <h3>Masuk Akun</h3>
        <input type="number" name="nrp" placeholder="NRP" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
        <button>Belum punya akun?  <a href="register.php">Daftar Sekarang</a></button>
    </form>
</body>
</html>