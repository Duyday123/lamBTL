<?php
session_start(); // PHẢI đặt ở đầu file, trước mọi HTML
?>
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

  <section class="hero">
    <div class="hero-text">
      <h1>Latest Smartphone</h1>
      <p class="subtitle">New Arrival</p>
      <button class="shop-btn">Shop Now</button>
    </div>
    <div class="hero-img">
      <img src="ảnh/iphone-16-pro-max.jpg" alt="Smartphone" />
    </div>
  </section>

  <section class="categories">
    <a href="smartphone.php" class="category-link">
      <div class="category-box">📱<p>Smartphones</p></div>
    </a>    
    <a href="laptop.php" class="category-link">
    <div class="category-box">💻<p>Laptops</p></div>
    </a>
    <a href="headphone.php" class="category-link">
    <div class="category-box">🎧<p>Headphones</p></div>
    </a>
    <a href="accessories.php" class="category-link">
    <div class="category-box">📦<p>Accessories</p></div>
    </a>
  </section>

  <section class="featured">
    <h2>Featured Products</h2>
    <div class="products">
      <div class="product-card">
        <a href="sanpham.php?id=1" class="category-link"><img src="ảnh/58662_dien_thoai_samsung_galaxy_a26_5g_den.jpg" width="200px" height="200px">
        <p>Điện thoại Samsung Galaxy A26 5G </p>
        <p>	7.490.000 ₫</p></a>
        <form method="POST" action="add_to_cart.php">
          <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
          <button type="submit">Add to Cart</button>
        </form>
      </div>
      <div class="product-card">
        <a href="sanpham.php?id=2" class="category-link"><img src="ảnh/55470_laptop_acer_aspire_lite_al16_7.jpg" width="200px" height="200px">
        <p>Laptop Acer Aspire Lite AL16-51P-596H NX.KWZSV.002 </p>
        <p>13.490.000 ₫</p>
        <button>Add to Cart</button>
      </div>
      <div class="product-card">
        <a href="sanpham.php?id=3" class="category-link"><img src="ảnh/7142N+qFUAL._AC_SL1500_.jpg" width="200px" height="200px">
        <p>iClever HS19 Kids Headphones </p>
        <p >800.730 ₫</p>
        <button>Add to Cart</button>
      </div>
      <div class="product-card">
      <a href="sanpham.php?id=4" class="category-link"><img src="ảnh/2024_5_14_638512824311411058_huawei-watch-fit-3-den (4).webp"  width="200px" height="200px">
        <p>Huawei Watch Fit 3</p>
        <p>2.390.000 ₫</p>
        <button>Add to Cart</button>
      </div>
    </div>
  </section>

  <section class="newsletter">
    <h3>Sign Up for Updates</h3>
    <p>Subscribe to our newsletter</p>
    <div class="newsletter-input">
      <input type="email" placeholder="Enter your email address" />
      <button>Sign Up</button>
    </div>
  </section>

  <footer>
    <div class="footer-left">
      <strong>Sign Up for Updates</strong>
      <p>Subscribe to our newsletter</p>
    </div>
    <div class="footer-right">
      <a href="contact.php">Email</a>
      <a href="account.php">Account</a>
      <a href="privacy.php">Data</a>
    </div>
  </footer>
</body>
</html>
