<?php
include("db_connect.php") ;
if (isset($_POST['login'])) {
    $username = $_POST['username'] ;
    $password = md5($_POST['password']) ;
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'" ;
    $result = mysqli_query($link , $query) ;
    if (mysqli_num_rows($result) == 1) {
        echo ("Login Successful !") ;
    }
    else {
        echo ("Wrong infor") ;
    }
} 
?>

<!DOCTYPE html>
<html lang = "en"> 
<head> 
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width = device - width, initial_scale = 1.0"> 
</head>
<body>
    <h2>Login</h2>
    <form action= "" method = "post">
        <label for = ""> User name</label>
        <input type = "text" name = "username" required> </br>
        <label for = "">Password</label>
        <input type = "password" name = "password" id="" required> </br>
        <input type = "submit" name = "login" value = "Login">
    </form>
</body>
</html>