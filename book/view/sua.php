<?php
	include '../php/data.php';
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
    <title>Sua</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
     <?php
        // Lấy thông tin cần sửa
        $id = $_GET['id'];
        $query = "select * from book where id={$id} LIMIT 1";
        $stmt = $dbConnection->prepare($query) ;
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_BOTH);

        $coin = true ;
        if(isset($_POST['sua']) && $coin){
            $id = null ;
            $name = $_POST['name'] ;
            $description = $_POST['description'] ;
            $numpage = $_POST['numpage'] ;
            $picture = $_POST['picture'] ;
            $type = $_POST['type'] ;
            $created_at = $_POST['created_at'] ;
            $updated_at = $_POST['updated_at'] ;
            if($name==""){
                $strname = "Không được bỏ trống tên sách" ;
                $coin = false ;
            }
            if($description==""){
                $strdes = "Không được bỏ trống mô tả sách" ;
                $coin = false ;
            }
            if($numpage==""){
                $strnum = "Không được bỏ trống số trang sách" ;
                $coin = false ;
            }
            if($picture==""){
                $strpic = "Không được bỏ trống ảnh bìa" ;
                $coin = false ;
            }
            if($type==""){
                $strtype = "Không được bỏ trống thể loại" ;
                $coin = false ;
            }
            if($created_at==""){
                $strcre = "Không được bỏ trống " ;
                $coin = false ;
            }
            if($updated_at==""){
                $strup = "Không được bỏ trống" ;
                $coin = false ;
            }
            if($coin){
                $sql = "UPDATE book SET name='$name', description='$description', numpage='$numpage', picture='$picture', type='$type', created_at='$created_at',updated_at='$updated_at' WHERE id='$id'";
                $stmt = $dbConnection->prepare($sql);
                $stmt->execute();
                header('location:../php/index.php');
            }
        } 
     ?>   
    <form  method="POST">
        <h1>Sửa </h1>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" style="color:black"> Name:</label>
            <div class="col-sm-10">
            <input name="name" type="name" value="<?=$user['name']?>" class="form-control">
            <span class="err"><?=$strname?></span>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label"style="color:black">Description :</label>
            <div class="col-sm-10">
            <input name="description" type="text" value="<?=$user['description']?>" class="form-control" >
            <span class="err"><?=$strdes?></span>
            </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label"style="color:black"> Numpage:</label>
            <div class="col-sm-10">
            <input name="numpage" type="text" value="<?=$user['numpage']?>" class="form-control">
            <span class="err"><?=$strnum?></span>
            </div>
        </div>
        <div class="mb-3">
        <label class="col-sm-2 col-form-label"> Picture:</label>
            <input name="picture" class="form-control" type="file" id="formFile">
            <img src="<?=$user['picture']?>" />
            <span class="err"><?=$strpic?></span>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label"style="color:black"> Type:</label>
            <div class="col-sm-10">
            <input name="type" type="text" value="<?=$user['type']?>" class="form-control"  >
            <span class="err"><?=$strtype?></span>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label"style="color:black"> Created at:</label>
            <div class="col-sm-10">
            <input name="created_at" type="text" value="<?=$user['created_at']?>" class="form-control" >
            <span class="err"><?=$strcre?></span>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label"style="color:black"> Updated at:</label>
            <div class="col-sm-10">
            <input name="updated_at" type="date" value="<?=$user['updated_at']?>" class="form-control" >
            <span class="err"><?=$strup?></span>
            </div>
        </div>
        <button name = "sua" type="submit" class="button" style="height: 40px; width: 40%">OK</button>
    </form>
</body>
</html>