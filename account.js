function login() {
    // Hiển thị phần tử có ID login-form với display: flex (giống CSS ban đầu)
    document.getElementById('login-form').style.display = 'flex';
    
    // Ẩn phần tử signup-form
    document.getElementById('signup-form').style.display = 'none';
}

function signup() {
    // Ẩn phần tử login-form
    document.getElementById('login-form').style.display = 'none';
    
    // Hiển thị phần tử signup-form với display: flex
    document.getElementById('signup-form').style.display = 'flex';
}

// Gọi hàm login() khi trang được tải để đảm bảo form login hiển thị đầu tiên
window.onload = function() {
    login();
};