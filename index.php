<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

date_default_timezone_set('Asia/Jakarta'); 
$jam = date('H');
$sapaan = "";

if ($jam >= 5 && $jam < 11) {
    $sapaan = "Selamat Pagi";
} elseif ($jam >= 11 && $jam < 15) {
    $sapaan = "Selamat Siang";
} elseif ($jam >= 15 && $jam < 18) {
    $sapaan = "Selamat Sore";
} else {
    $sapaan = "Selamat Malam";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar">
        <div class="brand">WIZZY APP</div>
        <div style="display: flex; align-items: center; gap: 15px;">
            <span style="font-size: 0.9em; opacity: 0.8;">
                User: <b><?php echo $_SESSION['username']; ?></b>
            </span>
            <a href="logout.php" class="btn-logout">Logout</a>
        </div>
    </nav>

    <div class="glass-card" style="text-align: center; max-width: 500px;">
        
        <h2 style="font-weight: 300; font-size: 1.5rem; margin-bottom: 5px;">
            <?php echo $sapaan; ?>,
        </h2>
        
        <h1 style="font-size: 2.5rem; background: linear-gradient(to right, #00c6ff, #0072ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; margin-bottom: 20px;">
            <?php echo $_SESSION['nama']; ?>!
        </h1>

        <p style="margin-bottom: 30px; line-height: 1.6; opacity: 0.8;">
            Senang melihat Anda kembali Tuan. Sistem keamanan MD5 Anda aktif dan data aman terkendali.
        </p>

        <div style="display: flex; gap: 10px; justify-content: center;">
            <a href="conv.php" class="btn-login" style="text-decoration: none; width: auto; background: transparent; border: 1px solid #00c6ff;">Tools MD5</a>
        </div>
    </div>

</body>
</html>