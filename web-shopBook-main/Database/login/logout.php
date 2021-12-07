<?php 
    session_start() ;
    if(isset($_SESSION['auth'])) unset($_SESSION['auth']);
    if(isset($_SESSION['user'])) unset($_SESSION['user']);
    if(isset($_SESSION['error_message'])) unset($_SESSION['error_message']);
    header("Location: ../php/index.php");
?>