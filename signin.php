<?php      
 include('connect.php'); 
    if (!empty($_POST['username']) &&
        !empty($_POST['password'])){

       

        $username =  $_POST['username'];
        $password =  $_POST['password'];

        $sql="INSERT INTO `users`(`username`, `password`) VALUES ('$username','$password')";
        mysqli_query($conn, $sql);
        // thực thi câu lệnh sql rồi thêm vào csdl 
        header('location:trangchu.php');
        }

        else{
            echo "Vui lòng nhập đầy đủ thông tin";
        }

?>