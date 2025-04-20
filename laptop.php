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
    <h1>Laptops</h1>
    <p>Discover the latest laptops with powerful performance, sleek designs, and amazing features from leading brands</p>
  </section>

  <section class="smartphone-list">
    <div class="products">
        <div class="product-card">
            <a href="sanpham.php?id=13" class="category-link">
                <img src="ảnh/lap1.webp" width="200px" height="200px">
                <p>Laptop Gaming Acer Nitro V ANV15-51-58AN</p>
                <p>16.790.000 ₫</p>
                <button>Add to Cart</button>
            </a>
        </div>
        <div class="product-card">
            <a href="sanpham.php?id=14" class="category-link">
                <img src="ảnh/lap2.webp" width="200px" height="200px">
                <p>Apple MacBook Air M2 2024 8CPU 8GPU 16GB 256GB I Chính hãng Apple Việt Nam</p>
                <p>21.690.000 ₫</p>
                <button>Add to Cart</button>
            </a>
        </div>
        <div class="product-card">
            <a href="sanpham.php?id=15" class="category-link">
                <img src="ảnh/lap3.webp" width="200px" height="200px">
                <p>MacBook Air M4 13 inch 2025 10CPU 8GPU 16GB 256GB</p>
                <p>26.690.000 ₫</p>
                <button>Add to Cart</button>
            </a>
        </div>
        <div class="product-card">
            <a href="sanpham.php?id=16" class="category-link">
                <img src="ảnh/lap4.webp" width="200px" height="200px">
                <p>Laptop ASUS TUF Gaming A15 FA506NCR-HN047W</p>
                <p>19.990.000 ₫</p>
                <button>Add to Cart</button>
            </a>
        </div>
    </div>
</section>
<section class="smartphone-list">
    <div class="products">
        <div class="product-card">
            <a href="sanpham.php?id=17" class="category-link">
                <img src="ảnh/lap5.webp" width="200px" height="200px">
                <p>Mac mini M4 2024 10CPU 10GPU 16GB 256GB</p>
                <p>14.490.000 ₫</p>
                <button>Add to Cart</button>
            </a>
        </div>
        <div class="product-card">
            <a href="sanpham.php?id=18" class="category-link">
                <img src="ảnh/lap6.webp" width="200px" height="200px">
                <p>Laptop ASUS Vivobook 14 OLED A1405VA-KM257W</p>
                <p>16.990.000 ₫</p>
                <button>Add to Cart</button>
            </a>
        </div>
        <div class="product-card">
            <a href="sanpham.php?id=19" class="category-link">
                <img src="ảnh/lap7.webp" width="200px" height="200px">
                <p>Laptop ASUS TUF Gaming F15 FX507ZC4-HN095W</p>
                <p>20.490.000 ₫</p>
                <button>Add to Cart</button>
            </a>
        </div>
        <div class="product-card">
            <a href="sanpham.php?id=20" class="category-link">
                <img src="ảnh/lap8.webp" width="200px" height="200px">
                <p>MacBook Pro 16 M3 Max 48GB - 1TB</p>
                <p>83.990.000 ₫</p>
                <button>Add to Cart</button>
            </a>
        </div>
    </div>
</section>
  
</body>
</html>
