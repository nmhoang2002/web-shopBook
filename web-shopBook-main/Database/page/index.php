<?php
    session_start() ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user Page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    
    <div class="container">       
        <?php 
            if(isset($_SESSION['auth']) && $_SESSION['auth']){
                echo "<div>Username: {$_SESSION['user']['username']}</div>";
                echo "<div><a class='btn btn-primary' href='logout.php'>Đăng xuất</a></div>";
            }else{
                echo "<div>Guest</div>";
                echo "<div><a class='btn btn-primary' href='login.php'>Đăng nhập</a></div>";
            }
        ?>
    </div>
