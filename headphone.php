<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Smartphones - Online Shop</title>
  <link rel="stylesheet" href="smartphone.css" />
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

  <section class="smartphone-header">
    <h1>Headphones</h1>
    <p>Explore our wide range of high-quality headphones for an immersive audio experience, from noise-canceling to wireless options.</p>
  </section>

  <section class="smartphone-list">
    <div class="products">
        <div class="product-card">
            <a href="sanpham.php?id=21" class="category-link">
                <img src="ảnh/head1.webp" width="200px" height="200px">
                <p>Tai nghe Bluetooth True Wireless Samsung Galaxy Buds2 Pro</p>
                <p>2.590.000 ₫</p>
                <button>Add to Cart</button>
            </a>
        </div>
        <div class="product-card">
            <a href="sanpham.php?id=22" class="category-link">
                <img src="ảnh/head2.webp" width="200px" height="200px">
                <p>Tai nghe Bluetooth Apple AirPods Pro 2 2023 USB-C</p>
                <p>5.590.000 đ</p>
                <button>Add to Cart</button>
            </a>
        </div>
        <div class="product-card">
            <a href="sanpham.php?id=23" class="category-link">
                <img src="ảnh/head3.webp" width="200px" height="200px">
                <p>Tai nghe Bluetooth True Wireless Anker Soundcore R50I NC</p>
                <p>490.000 đ</p>
                <button>Add to Cart</button>
            </a>
        </div>
        <div class="product-card">
            <a href="sanpham.php?id=24" class="category-link">
                <img src="ảnh/head4.webp" width="200px" height="200px">
                <p>Tai nghe Bluetooth True Wireless Huawei FreeBuds 5i</p>
                <p>840.000 đ</p>
                <button>Add to Cart</button>
            </a>
        </div>
    </div>
</section>
<section class="smartphone-list">
    <div class="products">
        <div class="product-card">
            <a href="sanpham.php?id=25" class="category-link">
                <img src="ảnh/head5.webp" width="200px" height="200px">
                <p>Tai nghe chụp tai Gaming Hyperx Cloud Stinger 2 Core</p>
                <p>890.000 đ</p>
                <button>Add to Cart</button>
            </a>
        </div>
        <div class="product-card">
            <a href="sanpham.php?id=26" class="category-link">
                <img src="ảnh/head6.webp" width="200px" height="200px">
                <p>Tai nghe chụp tai Dareu EH416</p>
                <p>320.000 đ</p>
                <button>Add to Cart</button>
            </a>
        </div>
        <div class="product-card">
            <a href="sanpham.php?id=27" class="category-link">
                <img src="ảnh/head7.webp" width="200px" height="200px">
                <p>Tai nghe không dây chụp tai Gaming Logitech G435</p>
                <p>1.420.000 đ</p>
                <button>Add to Cart</button>
            </a>
        </div>
        <div class="product-card">
            <a href="sanpham.php?id=28" class="category-link">
                <img src="ảnh/head8.webp" width="200px" height="200px">
                <p>Tai nghe gaming có dây Gaming Havit H2042D</p>
                <p>320.000 đ</p>
                <button>Add to Cart</button>
            </a>
        </div>
    </div>
</section>
</body>
</html>
