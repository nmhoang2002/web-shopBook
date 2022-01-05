<?php
    include '../php/data.php';
    $id = $_GET['id'];
	$sql = "DELETE FROM book WHERE id='$id'";
	$stmt = $dbConnection->prepare($sql);
    $stmt->execute();
	header('location:../php/index.php');
?>