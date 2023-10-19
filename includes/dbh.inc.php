<?php

$servername="localhost";
$username="root";
$password="";
$database="booking";

$koneksi = new mysqli($servername,$username,$password,$database);

if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari formulir
    $name = $_POST["name"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $description = $_POST["description"];

    // Menyiapkan perintah SQL INSERT
    $sql = "INSERT INTO form (nama, tanggal, waktu, deskripsi) VALUES ($name, $date, $time, $description)";

    // Mempersiapkan pernyataan SQL dengan menggunakan prepared statement
    $stmt = $koneksi->prepare($sql);

    if ($stmt) {
        // Mengikat parameter ke pernyataan
        $stmt->bind_param("ssss", $name, $date, $time, $description);

        // Menjalankan pernyataan SQL
        if ($stmt->execute()) {
            echo '<script>alert("Formulir terkirim!");</script>';
            echo '<script>window.location.href = "home.php";</script>';
            exit;
        } else {
            echo "Kesalahan saat menyimpan data: " . $stmt->error;
        }

        // Menutup pernyataan
        $stmt->close();
    } else {
        echo "Kesalahan dalam pernyataan SQL: " . $koneksi->error;
    }
}

?>




