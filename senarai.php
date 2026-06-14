<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="ms">

<head>
    <meta charset="UTF-8">
    <title>Senarai Pelajar</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <img src="img/logo.png" class="logo" alt="Logo Sistem">
        <h1>Senarai Pelajar</h1>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="tentang.php">Tentang Sistem</a>
        <a href="daftar.php">Daftar Pelajar</a>
        <a href="senarai.php">Senarai Pelajar</a>
        <a href="hubungi.php">Hubungi Kami</a>
    </nav>

    <div class="container">
        <h2>Data Pelajar Berdaftar</h2>

        <div class="grid">
            <?php
        $result = mysqli_query($conn, "SELECT * FROM pelajar ORDER BY id DESC");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <div class='card'>
                    <h3>{$row['nama']}</h3>
                    <p><strong>Email:</strong> {$row['email']}</p>
                    <p><strong>Program:</strong> {$row['program']}</p>
                    <p><strong>Tarikh Daftar:</strong> {$row['tarikh_daftar']}</p>
                </div>";
            }
        } else {
            echo "<p>Tiada pelajar didaftarkan lagi.</p>";
        }
        ?>
        </div>
    </div>

    <footer>
        <p>&copy; 2026 Sistem Direktori Pelajar Online</p>
    </footer>

</body>

</html>