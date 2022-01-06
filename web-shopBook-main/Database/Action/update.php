<?php
	include '../php/ketnoi.php';
    $strname ="" ;
    $strpic = "" ;
    $strrice = "" ;
    $strtype= "" ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
     <?php
        // Lấy thông tin user cần edit
        $id = $_GET['id'];
        $query = "select * from book where id={$id} LIMIT 1";
        $stmt = $dbConnection->prepare($query) ;
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_BOTH);

        $coin = true ;
        if(isset($_POST['sua']) && $coin){
        
            $id = null ;
            $picture = $_POST['picture'] ;
            $name= $_POST['name'] ;
            $quantily = $_POST['quantily'] ;
            $price = $_POST['price'] ;
            if($picture==""){
                $strpic = "Không được bỏ trống ảnh bìa" ;
                $coin = false ;
            }
            if($name==""){
                $strname = "Không được bỏ trống tên sách" ;
                $coin = false ;
            }
            if($quantily==""){
                $strtype = "Không được bỏ trống " ;
                $coin = false ;
            }
            if($price==""){
                $strrice = "Không được bỏ trống " ;
                $coin = false ;
            }
            if($coin){
                $sql = "UPDATE book SET picture='$picture',name='$name', quantily='$quantily',price=$price WHERE id='$id'";
                $stmt = $dbConnection->prepare($sql);
                $stmt->execute();
                header('location:../page/giohang.php');
            }
        } 
     ?>   
    <form action="#" method="POST">
        <h1>Sửa Book</h1>
        <div class="mb-3">
            <label class="col-sm-2 col-form-label"style="color:black"> Picture:</label>
            <input name="picture" class="form-control" type="file" id="formFile">
            <span class="err"><?= $strpic?></span>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" style="color:black"> Name:</label>
            <div class="col-sm-10">
            <input name="name" type="name" class="form-control">
            <span class="err"><?= $strname?></span>
            </div>
        </div>
      
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label"style="color:black"> quantily:</label>
            <div class="col-sm-10">
            <input name="quantily" type="text" class="form-control" >
            <span class="err"><?= $strtype?></span>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label"style="color:black"> price:</label>
            <div class="col-sm-10">
            <input name="price" type="text" class="form-control" >
            <span class="err"><?= $strrice?></span>
            </div>
        </div>
        <button name = "sua" type="submit" class="btn btn-primary">UPDATE</button>
    </form>
</body>
</html>