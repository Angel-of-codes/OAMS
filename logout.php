<?php
require_once('config/db.php');

session_start();

setcookie('uname', $_SESSION['uname'], time());
unset($_COOKIE['uname']);
session_destroy();
header('location:index.php');

?>