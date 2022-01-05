<?php
	include '../php/ketnoi.php';
    $strname ="" ;
    $strdes = "" ;
    $strnum = "" ;
    $strpic = "" ;
    $strtype ="";
    $strcre ="";
    $strup ="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
     <?php
        $coin = true ;
        if(isset($_POST['them']) && $coin){
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
                $strtype = "Không được bỏ trống " ;
                $coin = false ;
            }
          
            if($coin){
                $sql = "INSERT INTO book (picture,name, quantily, price) VALUE('$picture','$name','quantily','$price')";
                $stmt = $dbConnection->prepare($sql);
                $stmt->execute();
                header('location:../page/giohang.php');
            }
        } 
     ?>   
    <form  method="POST">
        <h1>Thêm sách</h1>
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
            <span class="err"><?= $strnum?></span>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label"style="color:black"> price:</label>
            <div class="col-sm-10">
            <input name="price" type="text" class="form-control" >
            <span class="err"><?= $strnum?></span>
            </div>
        </div>
      
        
        <button name = "sua" type="submit" style="margin-right:50%" class="btn btn-primary">OK</button>
    </form>
</body>
</html>