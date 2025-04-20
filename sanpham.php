<?php
session_start();

// Kết nối database
include('connect.php');

// Lấy ID sản phẩm từ URL
$product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Truy vấn thông tin sản phẩm từ database
$sql = "SELECT * FROM products WHERE id = $product_id";
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($result);

// Nếu không tìm thấy sản phẩm
if (!$product) {
    die("Sản phẩm không tồn tại");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo htmlspecialchars($product['name']); ?> - Product Detail</title>
  <link rel="stylesheet" href="sanpham.css" />
</head>
<body>
    <header>
    <nav class="navbar">
      <div class="nav-left">
        <a href="trangchu.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
      </div>
      <div class="nav-right">
      <form method="GET" action="search.php" style="display:inline;">
        <input type="text" name="query" placeholder="Search products..." style="padding: 5px 10px; border-radius: 5px; border: 1px solid #ccc;" />
        <button type="submit" style="padding: 5px 10px; border: none; background: #1f355f; color: white; border-radius: 5px; cursor:pointer;">🔍</button>
      </form>
        <span>🛒</span>
        <?php if(isset($_SESSION['username'])): ?>
          <!-- Nút username với link logout -->
          <a href="logout.php" class="user-btn" style="text-decoration:none;">
            <button style="background:#1f355f; color:white; border:none; padding:10px 20px; border-radius:8px; cursor:pointer;">
              <?php echo htmlspecialchars($_SESSION['username']); ?>
            </button>
          </a>
        <?php else: ?>
          <a href="account.php"><button class="logo">Sign Up</button></a>
        <?php endif; ?>
        </div>
        </nav>
      </header>
      
  <section class="product-detail">
    <div class="product-image">
      <img src="<?php echo htmlspecialchars($product['image_url']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" />
    </div>
    <div class="product-info">
      <h1><?php echo htmlspecialchars($product['name']); ?></h1>
      <p class="price">Giá: <?php echo number_format($product['price'], 0, ',', '.'); ?> ₫</p>
      <p class="description">
        <?php echo htmlspecialchars($product['description']); ?>
      </p>
      <ul class="specs">
        <?php 
        // Hiển thị thông số kỹ thuật
        $specs = explode("\n", $product['specs']);
        foreach ($specs as $spec) {
            if (!empty(trim($spec))) {
                echo '<li>' . htmlspecialchars(trim($spec)) . '</li>';
            }
        }
        ?>
      </ul>
      <button class="add-to-cart">🛒 Thêm vào giỏ hàng</button>
    </div>
  </section>
</body>
</html>