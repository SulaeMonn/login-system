<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
</head>
<body>

<?php
if(isset($_SESSION["name"])) {
?>
<h1>Welcome <?php echo $_SESSION["name"]; ?>.</h1> Click here to <a href="logout.php" tite="Logout">Logout.</a>
<?php
}else echo "<h1>Please login first .</h1>";
?>
</body>
</html>