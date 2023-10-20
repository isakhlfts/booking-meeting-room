<?php

$servername="localhost";
$username="root";
$password="";
$database="booking";

$koneksi = new mysqli($servername,$username,$password,$database);

if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

// Untuk user.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari formulir
    $name = $_POST["name"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $description = $_POST["description"];

    // Menyiapkan perintah SQL INSERT
    $sql = "INSERT INTO form (name, date, time, description) VALUES (?,?,?,?)";

    // Mempersiapkan statement SQL dengan menggunakan prepared statement
    $stmt = $koneksi->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ssss", $name, $date, $time, $description);
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

?>




