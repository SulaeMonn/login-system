<?php
session_start();
$_SESSION['id'] = "";
$_SESSION['name'] = "";
if(empty($_SESSION['id'])) header("location: index.php");
?>