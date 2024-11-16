function openLogin() {
    document.getElementById('login-form').style.display = 'block';
    document.getElementById('overlay').style.display = 'block';
}

// Đóng giao diện đăng nhập
function closeLogin() {
    document.getElementById('login-form').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
}