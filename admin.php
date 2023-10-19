<?php

if (!isset($_SESSION["admin_logged_in"]) || $_SESSION["admin_logged_in"] !== true) {
    // Admin belum login, alihkan ke halaman login admin
    header("Location: admin_login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container admin">
<h1>Welcome, Admin!</h1>
        <div class="pending-requests">
            <h2>Pending Room Booking Requests</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nama Peminjam</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample data for demonstration purposes -->
                    <?php
                    $requests = [
                        ['John Doe', '2023-10-15', '10:00', 'Meeting bulanan'],
                        ['Jane Smith', '2023-10-20', '14:30', 'Pertemuan proyek']
                    ];

                    foreach ($requests as $request) {
                        echo '<tr>';
                        echo '<td>' . $request[0] . '</td>';
                        echo '<td>' . $request[1] . '</td>';
                        echo '<td>' . $request[2] . '</td>';
                        echo '<td>' . $request[3] . '</td>';
                        echo '<td>';
                        echo '<button class="approve-btn">Approve</button>';
                        echo '<button class="reject-btn">Reject</button>';
                        echo '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
            <div class="back-to-index">
            <a href="home.php" class="btn-back-to-index">Back to Home</a>
        </div>
        </div>
    </div>
</body>
<?php 
require 'footer.php'; 
?>
</html>