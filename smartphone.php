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
    <h1>Smartphones</h1>
    <p>Browse through the latest smartphones from top brands</p>
  </section>

  <section class="smartphone-list">
    <div class="products">
        <div class="product-card">
        <a href="sanpham.php?id=5" class="category-link"><img src="ảnh/phone1.webp" width="200px" height="200px">
          <p>Samsung Galaxy S25 Ultra 12GB 256GB </p>
          <p>	28.990.000 ₫</p>
          <button>Add to Cart</button>
        </div>
        <div class="product-card">
        <a href="sanpham.php?id=6" class="category-link"><img src="ảnh/phone2.png" width="200px" height="200px">
            <p>OPPO FIND N5</p>
            <p>	44.990.000 ₫</p>
            <button>Add to Cart</button>
          </div>
          <div class="product-card">
          <a href="sanpham.php?id=7" class="category-link"><img src="ảnh/phone3.webp" width="200px" height="200px">
            <p>OPPO Reno10 Pro+ 5G 12GB 256GB            </p>
            <p>	10.990.000 ₫</p>
            <button>Add to Cart</button>
          </div>
          <div class="product-card">
          <a href="sanpham.php?id=8" class="category-link"><img src="ảnh/phone4.webp" width="200px" height="200px">
            <p>Samsung Galaxy S24 FE 5G 8GB 128GB </p>
            <p>	12.990.000 ₫</p>
            <button>Add to Cart</button>
          </div>
  </section>
  <section class="smartphone-list">
    <div class="products">
        <div class="product-card">
        <a href="sanpham.php?id=9" class="category-link"><img src="ảnh/phone5.webp" width="200px" height="200px">
          <p>iPhone 15 Pro Max 256GB | Chính hãng VN/A </p>
          <p>	27.990.000 ₫</p>
          <button>Add to Cart</button>
        </div>
        <div class="product-card">
        <a href="sanpham.php?id=10" class="category-link"><img src="ảnh/phone6.webp" width="200px" height="200px">
            <p>iPhone 16e 128GB | Chính hãng VN/A </p>
            <p>	16.190.000 ₫</p>
            <button>Add to Cart</button>
          </div>
          <div class="product-card">
          <a href="sanpham.php?id=11" class="category-link"><img src="ảnh/phone7.webp" width="200px" height="200px">
            <p>iPhone 13 128GB | Chính hãng VN/A</p>
            <p>	11.690.000 ₫</p>
            <button>Add to Cart</button>
          </div>
          <div class="product-card">
          <a href="sanpham.php?id=12" class="category-link"><img src="ảnh/phone8.webp" width="200px" height="200px">
            <p>Nubia Neo 3 4G 8GB 128GB</p>
            <p>	3.990.000 ₫</p>
            <button>Add to Cart</button>
          </div>
  </section>
  
  
</body>
</html>
