<?php
// Mendapatkan data dari formulir HTML
$nama = $_POST['nama'];
$ulasan = $_POST['ulasan'];

// Koneksi ke database
$servername = "localhost";
$username = "hmsiutyc_ulasanuser";  // Ganti dengan username database Anda
$password = "aW,rx3w+Et,y";  // Ganti dengan password database Anda
$dbname = "hmsiutyc_ulasan";

$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Menyiapkan pernyataan SQL untuk menyimpan ulasan ke dalam tabel
$sql = "INSERT INTO ulasan (nama, ulasan) VALUES ('$nama', '$ulasan')";

// Menjalankan pernyataan SQL
if ($conn->query($sql) === TRUE) {
    echo "Ulasan berhasil ditambahkan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi ke database
$conn->close();
?>
