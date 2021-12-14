<?php
    session_start() ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>

    <div class="container">
        <h1 class = "mt-1">Đăng nhập</h1>   
        <div class="red-800"> 
            <?php 
                if(isset($_SESSION['error_message'])){
                    echo $_SESSION['error_message'];
                    unset($_SESSION['error_message']);
                }
            ?>
        </div>
        <form name="frmLogin" action="doLogin.php" method = "POST">

            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" class="form-control" id="username" name="username" placeholder="User Name">
                <span id="usernameavailable"></span>
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" name="login" class="btn btn-outline-secondary">Login</button>  
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>




