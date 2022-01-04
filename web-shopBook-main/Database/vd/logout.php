<?php
session_start();
unset($_SESSION['userInfo']);
header('location:../vd/login.php');