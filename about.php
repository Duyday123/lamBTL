<?php
session_start(); // PHẢI đặt ở đầu file, trước mọi HTML
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Shop</title>
    <link rel="stylesheet" href="about.css" />
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
        <main class="about-section">
            <h1>About Us</h1>
            <div class="about-content">
                <div class="text">
                    <p>
                        Welcome to our tech store! We are passionate about bringing the latest and greatest in technology right to your fingertips. 
                        Our mission is to provide high-quality products that meet the ever-evolving needs of our customers, whether you're a professional, a student, or a tech enthusiast. 
                        We believe that technology should be both functional and inspiring.
                        </p>
                        <p>
                        With a strong focus on innovation, customer care, and reliable service, we strive to be your trusted companion in the digital age. 
                        From powerful smartphones to essential accessories, we offer a wide range of products designed to make your everyday life smarter, easier, and more connected.
                        </p>
                </div>
                <div class="image">
                    <img src="ảnh/thiet-ke-shop-17.jpg" alt="Store Interior">
                </div>
            </div>
            <p style="margin-top: 40px; font-style: italic; color: #555; margin-left: 35px;">
                Technology isn’t just about devices — it’s about empowering people.  
                At our store, every product we offer tells a story of innovation, simplicity, and trust.  
                We don’t just sell tech. We help shape the way you live, work, and connect with the world.
                </p>
        </main>
    </header>