<?php

session_start();
if (!isset($_SESSION["admin_logged_in"]) || $_SESSION["admin_logged_in"] !== true) {
    // Admin belum login, alihkan ke halaman login admin
    header("Location: admin_login.php");
    exit;
}

// Mengimpor koneksi dari dbh.inc.php
require "dbh.inc.php";

// Cek apakah form disubmit (approve atau reject)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && isset($_POST['request_id'])) {
    $action = $_POST['action'];
    $request_id = $_POST['request_id'];

    if ($action === 'approve') {
        // Lakukan tindakan persetujuan di sini, misalnya, update status di database
        $query = "UPDATE form SET status = 'approved' WHERE id = $request_id";
        mysqli_query($koneksi, $query);
    } elseif ($action === 'reject') {
        // Lakukan tindakan penolakan di sini, misalnya, update status di database
        $query = "UPDATE form SET status = 'rejected' WHERE id = $request_id";
        mysqli_query($koneksi, $query);
    }
}

// Buat query SQL
$query = "SELECT name, date, time, description FROM form";

// Eksekusi query
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Error dalam eksekusi query: " . mysqli_error($koneksi));
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
                    <?php
                    // Loop melalui hasil query dan tampilkan data dalam tabel
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['date'] . "</td>";
                        echo "<td>" . $row['time'] . "</td>";
                        echo "<td>" . $row['description'] . "</td>";
                        echo '<td>';
                        echo '<form method="post">';
                        echo '<input type="hidden" name="action" value="approve">';
                        if (isset($row['id'])) {
                        echo '<input type="hidden" name="request_id" value="' . $row['id'] . '">';}
                        echo '<button type="submit" class="approve-btn">Approve</button>';
                        echo '</form>';
                        echo '<form method="post">';
                        echo '<input type="hidden" name="action" value="reject">';
                        if (isset($row['id'])) {
                        echo '<input type="hidden" name="request_id" value="' . $row['id'] . '">';}
                        echo '<button type="submit" class="reject-btn">Reject</button>';
                        echo '</form>';    
                        echo '</form>';
                        echo '</td>';
                        echo '</td>';
                        echo '</tr>';
                    }

                    // Bebaskan hasil query
                    mysqli_free_result($result);
                    ?>
                </tbody>
            </table>
            <div class="back-to-index">
            <a href="index.php" class="btn-back-to-index">Back to Home</a>
        </div>
        </div>
    </div>
</body>
<?php 
require 'footer.php'; 
?>
</html>