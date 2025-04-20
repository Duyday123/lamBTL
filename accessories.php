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
    <h1>Accessories</h1>
    <p>Find essential accessories to complement your devices, from phone cases to chargers and more</p>
  </section>

  <section class="smartphone-list">
    <div class="products">
        <div class="product-card">
            <a href="sanpham.php?id=29" class="category-link">
                <img src="ảnh/chuot-khong-day-logitech-mx-master-2s_3_.webp" width="200px" height="200px">
                <p>Chuột không dây Logitech MX Master 2S</p>
                <p>1.390.000 đ</p>
                <button>Add to Cart</button>
            </a>
        </div>
        <div class="product-card">
            <a href="sanpham.php?id=30" class="category-link">
                <img src="ảnh/as2.webp" width="200px" height="200px">
                <p>Tay cầm chống rung DJI OM 7 (DJI Osmo Mobile 7)</p>
                <p>1.980.000 đ</p>
                <button>Add to Cart</button>
            </a>
        </div>
        <div class="product-card">
            <a href="sanpham.php?id=31" class="category-link">
                <img src="ảnh/as3.webp" width="200px" height="200px">
                <p>Bàn phím Apple Magic Keyboard 2 Kèm Phím Số Trắng</p>
                <p>2.990.000 đ</p>
                <button>Add to Cart</button>
            </a>
        </div>
        <div class="product-card">
            <a href="sanpham.php?id=32" class="category-link">
                <img src="ảnh/as4.webp" width="200px" height="200px">
                <p>Cáp Momax USB-C to USB-C MAG Link 100W USB 2.0 có nam châm dài 2M DC36</p>
                <p>450.000 đ</p>
                <button>Add to Cart</button>
            </a>
        </div>
    </div>
</section>
<section class="smartphone-list">
    <div class="products">
        <div class="product-card">
            <a href="sanpham.php?id=33" class="category-link">
                <img src="ảnh/as5.webp" width="200px" height="200px">
                <p>Ốp lưng iPhone 16 Pro Max Apple With Magsafe Clea</p>
                <p>1.250.000 đ</p>
                <button>Add to Cart</button>
            </a>
        </div>
        <div class="product-card">
            <a href="sanpham.php?id=34" class="category-link">
                <img src="ảnh/as6.webp" width="200px" height="200px">
                <p>Ốp lưng Samsung Galaxy A55 Zagg ESNTL</p>
                <p>174.000 đ</p>
                <button>Add to Cart</button>
            </a>
        </div>
        <div class="product-card">
            <a href="sanpham.php?id=35" class="category-link">
                <img src="ảnh/as7.webp" width="200px" height="200px">
                <p>Sạc nhanh 20W Apple MHJE3ZA | Chính hãng Apple Việt Nam</p>
                <p>490.000 đ</p>
                <button>Add to Cart</button>
            </a>
        </div>
        <div class="product-card">
            <a href="sanpham.php?id=36" class="category-link">
                <img src="ảnh/as8.png" width="200px" height="200px">
                <p>Đế sạc không dây Aukey LC-MC311 3 Trong 1</p>
                <p>1.970.000 đ</p>
                <button>Add to Cart</button>
            </a>
        </div>
    </div>
</section>

  
</body>
</html>
