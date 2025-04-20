<?php
$host = 'localhost';        // Hoặc 127.0.0.1
$dbname = 'shop';      // Thay bằng tên database của bạn
$user = 'root';             // Username (thường là root trên localhost)
$pass = '';                 // Mật khẩu, thường là rỗng nếu dùng XAMPP

// Tạo kết nối
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
?>
