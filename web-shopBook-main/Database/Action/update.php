<?php
	include '../php/database.php';
    $strname ="" ;
    $strpass = "" ;
    $strhom = "" ;
    $strava = "" ;
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
        
            $name = $_POST['name'] ;
            $password = $_POST['password'] ;
            $description = $_POST['description'] ;
            $numpage = $_POST['numpage'] ;
            $picture = $_POST['picture'] ;
            if($name==""){
                $strname = "Email không được bỏ trống" ;
                $coin = false ;
            }
            if($password==""){
                $strpass = "Password không được bỏ trống" ;
                $coin = false ;
            }
            if($description==""){
                $strhom = "Hometown không được bỏ trống" ;
                $coin = false ;
            }
            if($picture==""){
                $strava = "Avatar không được bỏ trống" ;
                $coin = false ;
            }
            if($coin){
                $sql = "UPDATE book SET name='$name', password='$password', description='$description', numpage='$numpage', picture='$picture' WHERE id='$id'";
                $stmt = $dbConnection->prepare($sql);
                $stmt->execute();
                header('location:../php/index.php');
            }
        } 
     ?>   
    <form action="#" method="POST">
        <h1>Sửa Book</h1>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label"><i class="fa fa-user icon"></i> Name:</label>
            <div class="col-sm-10">
            <input name="name" type="email" value="<?= $user['name'] ?>" class="form-control">
            <span class="err"><?= $strname?></span>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label"><i class="fa fa-lock icon"></i> Password:</label>
            <div class="col-sm-10">
            <input name="password" type="password" class="form-control" >
            <span class="err"><?= $strpass?></span>
            </div>
        </div class="row mb-3">
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label"><i class="fa fa-address-card-o"></i>Description</label>
            <div class="col-sm-10">
            <input name="description" type="text" value="<?=$user['description']?>" class="form-control" id="inputEmail3">
            <span class="err"><?= $strhom?></span>
            </div>
        </div>
        <div class="mb-3">
            <label class="col-sm-2 col-form-label"><i class="fa fa-image icon"></i> Picture:</label>
            <input name="picture" class="form-control" type="file" id="formFile">
            <img src="<?=$user['picture']?>" />
            <span class="err"><?= $strava?></span>
        </div>
        <button name = "sua" type="submit" class="btn btn-primary">UPDATE</button>
    </form>
</body>
</html>