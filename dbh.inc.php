<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "booking";

$koneksi = new mysqli($servername, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

// Periksa apakah ada data POST yang dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["name"]) && isset($_POST["date"]) && isset($_POST["time"]) && isset($_POST["description"])) {
        $name = $_POST["name"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        $description = $_POST["description"];
        $status = "Pending"; // Status default

        // Menyiapkan perintah SQL INSERT
        $sql = "INSERT INTO form (name, date, time, description, status) VALUES (?,?,?,?,?)";

        // Mempersiapkan statement SQL dengan menggunakan prepared statement
        $stmt = $koneksi->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("sssss", $name, $date, $time, $description, $status);
            if ($stmt->execute()) {
                echo '<script>alert("Formulir terkirim!");</script>';
                echo '<script>window.location.href = "index.php";</script>';
                exit;
            } else {
                echo "Kesalahan saat menyimpan data: " . $stmt->error;
            }

            // Menutup statement
            $stmt->close();
        } else {
            echo "Kesalahan dalam pernyataan SQL: " . $koneksi->error;
        }
    }
}

?>
