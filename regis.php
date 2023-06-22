<?php
// Koneksi ke database (sesuaikan dengan konfigurasi Anda)
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'todolist';

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Mengambil data dari formulir registrasi
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Validasi data registrasi
if (empty($name) || empty($email) || empty($password)) {
    echo "Nama, email, dan password harus diisi.";
} else {
    // Periksa apakah email sudah terdaftar sebelumnya
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        echo "Email sudah terdaftar. Silakan gunakan email lain.";
    } else {
        // Simpan data pengguna ke dalam database
        $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        if (mysqli_query($conn, $query)) {
            echo "Registrasi berhasil. Silakan login dengan email dan password Anda.";
            echo "<script>window.location.href = 'login.html';</script>";
            exit(); // Penting: pastikan untuk mengakhiri eksekusi skrip setelah pengalihan header
           
           
        } else {
            echo "Terjadi kesalahan dalam melakukan registrasi. Silakan coba lagi.";
        }
    }
}




mysqli_close($conn);
?>
