<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Account Login</title>
  <script src="account.js"></script>
  <style>
    /* ==== HEADER STYLES ==== */
    .navbar {
      display: flex;
      justify-content: space-between;
      padding: 20px;
      background: white;
      border-bottom: 1px solid #ddd;
    }

    .nav-left {
      margin-left: 50px;
      margin-top: 8px;
    }

    .nav-left a {
      margin-right: 60px;
      text-decoration: none;
      color: #333;
      font-weight: bold;
    }

    .nav-right {
      margin-right: 40px;
    
    }

    .nav-right button,
    .nav-right span {
      cursor: pointer;
      margin-left: 20px;
      cursor: pointer;
    }
    

    .search {
      background-color: white;
    padding: 0px 45px;   
    font-size: 20px; 
    border: none;            
    outline: none;
    cursor: pointer;  
    }

    .logo {
      background: #1f355f;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 8px;

    }

    /* ==== LOGIN STYLES ==== */
    .login-body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 90vh;
  background: #f0f2f5;
}

.login-form {
  background: white;
  padding: 30px 40px;
  border-radius: 12px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 400px;
  box-sizing: border-box;
  text-align: center;
}

.login-form h2 {
  margin-bottom: 25px;
  color: #2c3e50;
}

.input-group {
  display: flex;
  align-items: center;
  background-color: #f0f0f0;
  border-radius: 5px;
  margin-bottom: 20px;
  padding: 12px;
}

.input-group span {
  margin-right: 10px;
  font-size: 18px;
}

.input-group input {
  border: none;
  outline: none;
  background: none;
  width: 100%;
  font-size: 16px;
}

.login-form button {
  width: 100%;
  padding: 12px;
  background-color: #2c3e50;
  color: white;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s ease;
}

.login-form button:hover {
  background-color: #1a252f;
}
/* dd */


.register-link {
  margin-top: 15px;
  font-size: 14px;
  cursor: pointer;
}

.register-link a {
  text-decoration: none;
  color: #2c3e50;
  font-weight: bold;
}

  </style>
</head>
<body>
  <!-- HEADER --><header>
  <nav class="navbar">
    <div class="nav-left">
      <a href="trangchu.php">Home</a>
      <a href="about.php">About</a>
      <a href="contact.php">Contact</a>
    </div>
    <div class="nav-right">
      <button class="search">🔍</button>
      <span>🛒</span>
      <a href="account.php"><button class="logo">Sign Up</button></a>
    </div>
  </nav>
</header>
  <!-- LOGIN BODY -->
  <div class="login-body" id="login-form">
    <form action="login.php" method="POST" class="login-form">
      <h2>Login</h2>
      <div class="input-group">
        <span>👤</span>
        <input type="text" name="username" placeholder="Username " required 
          value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>" />
      </div>
      <div class="input-group">
        <span>🔒</span>
        <input type="password" name="password" placeholder="Password" required />
      </div>
      <button type="submit" name="dang_nhap">Login</button>
      <p class="register-link" onclick="signup()">Don't have an account? Register</p>
    </form>
  </div>

  <div class="login-body" id="signup-form" style="display: none;">
    <form action="signin.php" method="POST" class="login-form">
      <h2>Sign Up</h2>
      <div class="input-group">
        <span>👤</span>
        <input type="text" name="username" placeholder="Username" required />
      </div>
      <div class="input-group">
        <span>🔒</span>
        <input type="password" name="password" placeholder="Password" required />
      </div>
      <button type="submit" name="dang_ky">Register</button>
      <p class="register-link" onclick="login()">Already have an account? Login</p>
    </form>
  </div>

</body>
</html>
