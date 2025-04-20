<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Online Shop</title>
  <link rel="stylesheet" href="styles.css" />
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
        <a href="cart.php"><span>🛒</span></a>
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
  <br>
<?php
session_start();
$cart = $_SESSION['cart'] ?? [];
$total = 0;
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Giỏ hàng</title>
  <link rel="stylesheet" href="giohang.css"> <!-- nếu có -->
</head>
<body>
  <h1>🛒 Giỏ hàng của bạn</h1>
<br>
  <?php if (empty($cart)): ?>
    <p>Giỏ hàng trống.</p>
  <?php else: ?>
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>tên</th>
        <th>ảnh</th>
        <th>Mô tả</th>
        <th>Người mua</th>
        <th>Giá</th>
      </tr>
      <?php foreach ($cart as $item): ?>
        <tr>
          <td><img src="<?= htmlspecialchars($item['image_url']) ?>" alt="" width="80"></td>
          <td><?= htmlspecialchars($item['name']) ?></td>
          <td><?= htmlspecialchars($item['description']) ?></td>
          <td><?= htmlspecialchars($item['buyer']) ?></td>
          <td><?= number_format($item['price'], 0, ',', '.') ?>₫</td>
        </tr>
        <?php $total += $item['price']; ?>
      <?php endforeach; ?>
      <tr>
        <td colspan="4" align="right"><strong>Tổng tiền:</strong></td>
        <td><strong><?= number_format($total, 0, ',', '.') ?>₫</strong></td>
      </tr>
    </table>
    <br>
    <button onclick="alert('Chuyển đến trang thanh toán')">💳 Thanh toán</button>
  <?php endif; ?>
</body>
</html>
