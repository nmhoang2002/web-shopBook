<?php
	include '../php/ketnoi.php';
  $cart = (isset($_SESSION['cart']))? $_SESSION['cart'] : [];
?>
<DOCTYPE html>
<html>
    <header>
        <title> giỏ hàng</title>
        <link rel="stylesheet" href="../js/scrip.js">
        <link rel="stylesheet" href="../css/cart.css"> <!-- link tới file CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </header>
    <body>
        
    <div id = "main"><!--bao toàn bộ khung website-->
            <div id ="head"><!--phần Banner-->
                <h1>Giỏ hàng</h1>
                <div class="logo">
                  <img src="../img/logo.png" alt="logo"width="180px"; height="60px">
                </div>
                <!-- đơn hàng -->
                <?php 
            $query = "select * from book";
            $stmt = $dbConnection->prepare($query) ;
            $stmt->execute();
        ?>     
        <table class="table">
            <tr style="background-color: cornflowerblue;">
            <th scope="col">id</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Chọn</th>                    
                    <th scope="col" ></th>
            </tr>
            <?php while($rows = $stmt->fetch(PDO::FETCH_BOTH)){ ?>
                <tr>
                    <td><?php echo $rows['id']; ?></td> 
                    <td><img src=" <?php echo $rows['picture']; ?>" width="50px" height="50px"></td>
                    <td><?php echo $rows['name']; ?></td>
                    <td><input type="number" name="quantity" min="1" max="50"></td>
                    <td><?php echo $rows['price']; ?></td> 
                    <td><button type="checkbox" class="form-check-input"></button></td>
                   
                    
                </tr>
            <?php
                } 
            ?>
        </table>
        <div id = "order">
                <button><a href="order.php">Đặt hàng</button>
        </div>
                <!-- end đơn hàng -->
        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>      
        <footer class="page-footer font-small special-color-dark pt-4">
            <div id = "footer"><!--phần cuối trang-->
                CopyRight: Trang bán Sách<br>
                Biên tập thiết kế, xây dựng và quản trị: Phạm Văn Tiến<br>
                Chịu trách nhiệm chính: Đỗ Thị Đài Trang, Nguyễn Minh Hoàng
            
              <div class="container">
            <!-- icon mạng XH -->
              <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                  <a class="btn-floating btn-fb mx-1">
                    <i class="fab fa-facebook-f"> </i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-floating btn-tw mx-1">
                    <i class="fab fa-twitter"> </i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-floating btn-gplus mx-1">
                    <i class="fab fa-google"> </i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-floating btn-dribbble mx-1">
                    <i class="fab fa-instagram"> </i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-floating btn-li mx-1">
                    <i class="fab fa-github"> </i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-floating btn-dribbble mx-1">
                    <i class="fab fa-youtube"> </i>
                  </a>
                </li>
              </ul>
              <!-- end icon mạng XH -->
          </div>
        </footer><!-- end Footer -->            
    </body>
</html>