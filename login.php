<?php
session_start();
include('connect.php');

// Bật hiển thị lỗi
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Xử lý login
if (isset($_POST['username']) && isset($_POST['password'])) {
    $tenDangNhap = $_POST['username'];
    $matKhau = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE username = '$tenDangNhap' AND password = '$matKhau'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION["username"] = $tenDangNhap;
        header('Location: trangchu.php'); // Chuyển hướng
        exit();
    } else {
        $error = "Sai tên đăng nhập hoặc mật khẩu!";
    }
}
?>