<?php
// Mengimpor koneksi dari dbh.inc.php
require "dbh.inc.php";
$query = "SELECT name, date, time, description FROM form";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Error dalam eksekusi query: " . mysqli_error($koneksi));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Peminjaman Ruang Rapat Pangripta</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .navigation {
            display: flex;
            justify-content: flex-end;
            width: 100%;
        }
        .user-links,
        .admin-links {
            margin-right: 20px;
        }
        .schedule-links {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="navigation">
            <div class="user-links">
                <a href="user.php">Pinjam Ruang</a>
            </div>
            <div class="admin-links">
                <a href="admin_login.php">Admin</a>
            </div>
        </div>
        <h1>Selamat Datang di Sistem Peminjaman Ruang Rapat Pangripta</h1>
        <div class="container schedule">
        <h1>Jadwal Peminjaman Ruang Rapat</h1>
        <table class="schedule-table">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Loop melalui hasil query dan tampilkan data dalam tabel
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['time'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "</tr>";
        }
        // Bebaskan hasil query
        mysqli_free_result($result);
        ?>
    </tbody>
</table>
        </div>
    </div>
</body>
<?php 
require 'footer.php'; 
?>
</html>
