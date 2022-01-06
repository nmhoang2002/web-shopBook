<?php
session_start();
unset($_SESSION['userInfo']);
header('location:../php/index.php');