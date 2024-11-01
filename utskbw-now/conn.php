<?php
$servername = "localhost";  // Nama server (biasanya localhost jika di server lokal)
$username = "root";         // Username untuk login ke MySQL (default adalah root)
$password = "";             // Password untuk login ke MySQL (kosong jika tidak ada password)
$dbname = "utskbw";  // Nama database yang akan digunakan

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek apakah koneksi berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>