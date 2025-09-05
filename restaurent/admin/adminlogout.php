<?php
include('db.php');
unset($_SESSION['IS_LOGIN']);
echo "<script> alert('Oops you logout')
window.location.href='http://localhost/restaurent/admin/adminlogin.php';</script>";
die();
?>