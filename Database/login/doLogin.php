<?php 
    session_start() ;
    // Kiểm tra có phải submit từ form login hay không (trong biến $_POST có key username hay không) ? 
    if(isset($_POST['username'])){
        //Lấy giá trị của input username và password rồi gán cho 2 biến tương ứng
        $username = $_POST['username'];
        $password = $_POST['password'] ;     
        // Kiểm tra đăng nhập có khớp không
        if( $username == 'admin' && $password == '123123' ){
            // tạo session đăng nhập $_SESSION['auth'] = true (từ khóa auth có thể đặt tùy ý, ví dụ: login, authentication)
            // biến $_SESSION['auth'] dùng để kiểm tra người dùng đăng nhập hay chưa ?
            $_SESSION['auth'] = true;
            // Lưu thông tin người dùng vào $_SESSION['user']
            $_SESSION['user'] = [
                    'username' => $username,
                    'password' =>  $password 
                ];   
            // Chuyển hướng đến trang index.php        
            header("Location: index.php");        
        }
        else // Ngược lại (đăng nhập không thành công)
        {
            // lưu session đăng nhập là false
            $_SESSION['auth'] = false;
            // Lưu session message để thông báo ra màn hình
            $_SESSION['error_message'] = "Đăng nhập thất bại.<br> Vui lòng kiểm tra lại email và mật khẩu";
            // Chuyển hướng về lại form đăng nhập và hiển thị message lỗi
            header("Location: login.php");        
        }
    }
?>