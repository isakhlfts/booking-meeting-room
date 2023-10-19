<?php
// Sample data for demonstration purposes
$peminjamData = array(
    array('Nama Peminjam 1', '2023-10-15', '10:00', 'Meeting bulanan'),
    array('Nama Peminjam 2', '2023-10-20', '14:30', 'Pertemuan proyek'),
    // Add more data as needed
);

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
                <a href="admin.php">Admin</a>
            </div>
        </div>
        <h1>Selamat Datang di Sistem Peminjaman Ruang Rapat Pangripta</h1>
        <div class="container schedule">
        <h1>Jadwal Peminjaman Ruang Rapat</h1>
        <table class="schedule-table">
            <thead>
                <tr>
                    <th>Nama Peminjam</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($peminjamData as $peminjam) {
                    echo "<tr>";
                    echo "<td>" . $peminjam[0] . "</td>";
                    echo "<td>" . $peminjam[1] . "</td>";
                    echo "<td>" . $peminjam[2] . "</td>";
                    echo "<td>" . $peminjam[3] . "</td>";
                    echo "</tr>";
                }
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
