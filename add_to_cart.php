<?php
session_start();

if (!isset($_POST['product_id'])) {
    header("Location: trangchu.php");
    exit();
}

$id = $_POST['product_id'];

// Tạo giỏ hàng nếu chưa có
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Thêm sản phẩm vào giỏ (tăng số lượng nếu đã có)
if (isset($_SESSION['cart'][$id])) {
    $_SESSION['cart'][$id]++;
} else {
    $_SESSION['cart'][$id] = 1;
}

$_SESSION['added_to_cart'] = true;
header("Location: trangchu.php");
exit();
