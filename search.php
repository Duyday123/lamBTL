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
include('connect.php');

if (!isset($_GET['query']) || empty(trim($_GET['query']))) {
    echo "Vui lòng nhập từ khóa tìm kiếm!";
    exit;
}

$search = trim($_GET['query']);
$sql = "SELECT * FROM products WHERE name LIKE '%$search%'";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Kết quả tìm kiếm</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  

  <div class="featured">
    <br>
    <h2>Kết quả tìm kiếm cho: "<?php echo htmlspecialchars($search); ?>"</h2>
    <div class="products">
      <?php if (mysqli_num_rows($result) > 0): ?>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
          <div class="product-card">
            <a href="sanpham.php?id=<?php echo $row['id']; ?>" class="category-link">
              <img src="<?php echo $row['image_url']; ?>" width="200" height="200">
              <p><?php echo $row['name']; ?></p>
              <p><?php echo number_format($row['price'], 0, ',', '.'); ?> ₫</p>
            </a>
            <button>Thêm vào giỏ</button>
          </div>
        <?php endwhile; ?>
      <?php else: ?>
        <p>Không tìm thấy sản phẩm phù hợp.</p>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>
