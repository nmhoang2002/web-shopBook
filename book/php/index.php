<?php
	include './data.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <title>ListBook</title>
    </head>
    <body>
        <h1 style="text-align: center;">List Book</h1>
        <button  type="button" class="btn btn-success" style=" margin-left: 87.5%"><a href="../view/them.php" style=" color : white ; text-decoration: none; ">Thêm sách</a></button>
        <?php 
            $query = "select * from book";
            $stmt = $dbConnection->prepare($query) ;
            $stmt->execute();
        ?>
        <table class="table">
            <tr style="background-color: cornflowerblue;">
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Numpage</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Type</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Updated at</th>
                    <th scope="col" colspan="2">Action</th>
            </tr>
            <?php while($rows = $stmt->fetch(PDO::FETCH_BOTH)){ ?>
                <tr>
                    <td><?php echo $rows['id']; ?></td>
                    <td><?php echo $rows['name']; ?></td>
                    <td><?php echo $rows['description']; ?></td>
                    <td><?php echo $rows['numpage']; ?></td>
                    <td><img src="../img/<?php echo $rows['picture']; ?>" width="50px" height="50px"></td>
                    <td><?php echo $rows['type']; ?></td>
                    <td><?php echo $rows['created_at']; ?></td>
                    <td><?php echo $rows['updated_at']; ?></td>
                    <td><button type="button" class="btn btn-primary"><a href="../view/sua.php?id=<?php echo $rows['id'] ?>" style ="color :white ; text-decoration: none ">Sửa</a></button></td>
                    <td><button type="button" class="btn btn-danger"><a href="../view/xoa.php?hometown=abc&id=<?php echo $rows['id'] ?>"style ="color :white ; text-decoration: none ">Xóa</a></button></td>
                </tr>
            <?php
                } 
            ?>
        </table>
    </body>
</html>