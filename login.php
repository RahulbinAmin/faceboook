<?php
$servername = "localhost";
$username = "root"; // Sesuaikan dengan username MySQL Anda
$password = ""; // Sesuaikan dengan password MySQL Anda
$dbname = "user_db";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengambil data dari form
$email = $_POST['email'];
$password = $_POST['password']; // Password dalam bentuk plain text

// Debugging: Cetak email dan password
echo "Email: " . htmlspecialchars($email) . "<br>";
echo "Password: " . htmlspecialchars($password) . "<br>";

// Menyimpan data ke database (Hanya untuk tujuan pengembangan)
$sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
