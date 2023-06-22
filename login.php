<?php
session_start(); // Mulai sesi

// Koneksi ke database (sesuaikan dengan konfigurasi Anda)
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'todolist';

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Mengambil data dari formulir login
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Validasi data login
if (empty($email) || empty($password)) {
    echo "Email dan password harus diisi.";
} else {
    // Periksa kecocokan email dan password di database
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        // Login berhasil
        echo "Login berhasil. Anda akan dialihkan ke halaman selamat datang.";
        echo "<script>window.location.href = 'home.html';</script>";
        exit; // Menghentikan eksekusi skrip agar pengalihan halaman berfungsi
    } else {
        // Login gagal, tampilkan popup
        echo "<script>alert('Username atau password salah.');</script>";
        echo "<script>window.location.href = 'login.html';</script>";
    }
}

mysqli_close($conn);
?>
