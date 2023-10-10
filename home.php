<!DOCTYPE html>
<html>
<head>
    <title>Peminjaman Ruang Rapat Pangripta</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Sistem Peminjaman Ruang Rapat Pangripta</h1>
        <div class="user-links">
            <a href="user.php">Pengajuan Peminjaman Ruang</a>
        </div>
        <div class="admin-links">
            <a href="admin.php">Panel Admin</a>
        </div>
        <div class="schedule-links">
            <a href="jadwal_peminjaman.php">Jadwal Peminjaman Ruang Rapat</a>
        </div>
        <form action='includes/logout.inc.php' method='post'>
		<button type='submit' class='button button3' name='logout-submit'>Log Out</button>
    </form>
    </div>
</body>
</html>
