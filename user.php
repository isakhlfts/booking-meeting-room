<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tampilkan notifikasi "Formulir terkirim!"
    echo '<script>alert("Formulir terkirim!");</script>';
    // Alihkan kembali ke menu halaman utama
    echo '<script>window.location.href = "index.php";</script>';
    exit; // Pastikan untuk keluar dari skrip setelah pengalihan
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Room Booking Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container user">
    <h1>Room Booking Form</h1>
    <form action="dbh.inc.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="date">Select Date:</label>
            <input type="date" class="form-control" name="date" min="<?php echo date('Y-m-d'); ?>"><br>

        <label for="time">Select Time:</label>
            <select class="form-control" name="time">
                <option value="Pagi (08.00 - 11.00 WIB)">08.00 - 11.00 WIB</option>
                <option value="Siang (13.00 - 16.00 WIB)">13.00 - 16.00 WIB</option>
            </select><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
    <div id="submit-message" style="display: none;">
            <p>Formulir telah berhasil disubmit!</p>
        </div>
</div>
        <script type="text/javascript">
    </script>
</div>
</body>
<?php 
 require 'footer.php'; 
 ?>
</html>
