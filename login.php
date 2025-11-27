<?php
session_start();
include 'koneksi.php';

// Kalau udah login, lempar ke dashboard dong
if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $password_md5 = md5($password);

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password_md5'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['login'] = true;
        $_SESSION['username'] = $row['username']; 

        $_SESSION['nama'] = $row['nama_lengkap'];
        
        header("Location: index.php");
        exit;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Area - Wizzy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="glass-card">
        <h2>LOGIN SYSTEM</h2>
        
        <?php if(isset($error)) : ?>
            <p style="color: #ff6b6b; text-align: center; margin-bottom: 15px;">
                Password / Username salah Bang!
            </p>
        <?php endif; ?>

        <form action="" method="post">
            <div class="input-group">
                <input type="text" name="username" placeholder="Username" required autocomplete="off">
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="login" class="btn-login">MASUK SEKARANG</button>
        </form>
    </div>

</body>
</html>