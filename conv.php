<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>MD5 Generator - Tools Hacker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar">
        <div class="brand">MD5 TOOLS</div>
        <div>
            <?php if (isset($_SESSION['login'])) : ?>
                <a href="index.php" class="btn-logout" style="background: linear-gradient(to right, #00c6ff, #0072ff); margin-right: 10px;">Dashboard</a>
                <a href="logout.php" class="btn-logout">Logout</a>
            <?php else : ?>
                <a href="login.php" class="btn-logout" style="background: linear-gradient(to right, #00c6ff, #0072ff);">Login Area</a>
            <?php endif; ?>
        </div>
    </nav>

    <div class="glass-card">
        <h2>CONVERT TO MD5</h2>
        <p style="text-align: center; margin-bottom: 20px; font-size: 0.9em; opacity: 0.8;">
            Masukkan teks biasa, saya ubah jadi hash MD5 secepat kilat!
        </p>

        <form action="" method="post">
            <div class="input-group">
                <input type="text" name="plain_text" placeholder="Masukkan Password/Teks..." required autocomplete="off" 
                value="<?php echo isset($_POST['plain_text']) ? htmlspecialchars($_POST['plain_text']) : ''; ?>">
            </div>
            
            <button type="submit" name="generate" class="btn-login">GENERATE HASH</button>
        </form>

        <?php if (isset($_POST['generate'])) : ?>
            <?php 
                $input = $_POST['plain_text'];
                $hasil = md5($input);
            ?>
            
            <div style="margin-top: 30px; border-top: 1px solid rgba(255,255,255,0.2); padding-top: 20px;">
                <p style="margin-bottom: 5px; font-weight: 600; color: #00c6ff;">Hasil MD5:</p>
                <div class="input-group">
                    <input type="text" value="<?php echo $hasil; ?>" readonly style="background: rgba(0,0,0,0.3); color: #00c6ff; text-align: center; font-family: monospace; letter-spacing: 1px;">
                </div>
                <p style="text-align: center; font-size: 12px; color: #aaa;">*Tinggal copy paste ke database Bang!</p>
            </div>
        <?php endif; ?>
    </div>

</body>
</html>