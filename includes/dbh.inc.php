<?php

$servername="localhost";
$dbusername="root";
$password="";
$dBName="booking";

$conn=mysqli_connect($servername,$dbusername,$password,$dBName);

if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}


// Form Peminjaman
$nama_peminjam = $_POST['nama_peminjam'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$keterangan = $_POST['keterangan'];

// SQL untuk memasukkan data ke tabel
$sql = "INSERT INTO form (nama_peminjam, tanggal, waktu, keterangan)
        VALUES ('$nama_peminjam', '$tanggal', '$waktu', '$keterangan')";

if ($conn->query($sql) === TRUE) {
    echo "Peminjaman ruangan berhasil disimpan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>




