<?php
session_start(); // PHẢI đặt ở đầu file, trước mọi HTML
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Shop</title>
    <link rel="stylesheet" href="contact.css" />
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
    <div class="container">
        <h1>Contact Us</h1>
        <div class="contact-wrapper">
          <!-- Left -->
          <div class="contact-info">
            <h2>Get in Touch</h2>
            <p><strong>Email:</strong> cen27726@Gmail.com</p>
            <p><strong>Phone:</strong> +84 335 704 305</p>
            <p><strong>Address:</strong> 18 P. Viên, Đông Ngạc, Bắc Từ Liêm, Hà Nội</p>
            <img src="ảnh/Screenshot 2025-04-15 213720.png" alt="Map of Hanoi" />
            
          </div>
    
          <!-- Right -->
          <div class="contact-form">
            <h2>Send us a Message</h2>
            <form>
              <input type="text" placeholder="Your Name" required />
              <input type="email" placeholder="Your Email" required />
              <textarea placeholder="Your Message" required></textarea>
              <button type="submit">Send</button>
            </form>
          </div>
        </div>
      </div>
</body>