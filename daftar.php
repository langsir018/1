<!DOCTYPE html>
<html lang="ms">

<head>
    <meta charset="UTF-8">
    <title>Daftar Pelajar</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <img src="img/logo.png" class="logo" alt="Logo Sistem">
        <h1>Daftar Pelajar</h1>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="tentang.php">Tentang Sistem</a>
        <a href="daftar.php">Daftar Pelajar</a>
        <a href="senarai.php">Senarai Pelajar</a>
        <a href="hubungi.php">Hubungi Kami</a>
    </nav>

    <div class="container">
        <h2>Borang Pendaftaran Pelajar</h2>

        <form action="proses_daftar.php" method="POST">
            <label>Nama Pelajar</label>
            <input type="text" name="nama" placeholder="Masukkan nama pelajar" required>

            <label>Email</label>
            <input type="email" name="email" placeholder="Masukkan email pelajar" required>

            <label>Program</label>
            <select name="program" required>
                <option value="">-- Pilih Program --</option>
                <option value="Diploma Teknologi Pembangunan Aplikasi Web & Mobile">
                    Diploma Teknologi Pembangunan Aplikasi Web & Mobile
                </option>
                <option value="Diploma Teknologi Komputer">
                    Diploma Teknologi Komputer
                </option>
                <option value="Diploma Teknologi Maklumat">
                    Diploma Teknologi Maklumat
                </option>
            </select>

            <button type="submit">Daftar Pelajar</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2026 Sistem Direktori Pelajar Online</p>
    </footer>

</body>

</html>