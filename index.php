<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "Lur797088";
        $dbname = "testdb";
        $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        
        $result = mysqli_query($con,"SELECT * FROM users WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['user_name'];
        header("Location:home.php");
        } else {
         $message = "Invalid Username or Password!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
        <h2>Login</h2>
        <div class="error">
            <?php if($message!="") { 
                echo $message; 
                } else{
                    echo "Type your user name and password.";
                }
            ?>
        </div>
        <label for="">UserName</label>
        <input type="text" name="user_name" placeholder="User Name"> <br>
        <label for="">Password</label>
        <input type="text" name="password" placeholder="Password"> <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>