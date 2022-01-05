<?php
    include '../php/ketnoi.php';
    $id = $_GET['id'];
	$sql = "DELETE FROM book WHERE id='$id'";
	$stmt = $dbConnection->prepare($sql);
    $stmt->execute();
	header('location:../page/giohang.php');
?>