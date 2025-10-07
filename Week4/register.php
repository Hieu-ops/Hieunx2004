<?php
include("db_connect.php");

// Biến lưu thông báo
$message = "";

if (isset($_POST['register'])) {
    // Lấy dữ liệu từ form
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    $confirm_password = isset($_POST['confirm_password']) ? trim($_POST['confirm_password']) : '';

    // Kiểm tra ô trống
    if (empty($username) || empty($password) || empty($confirm_password)) {
        $message = "<p style='color:red;'>Please fill in all fields.</p>";
    } 
    // Kiểm tra trùng mật khẩu
    else if ($password !== $confirm_password) {
        $message = "<p style='color:red;'>Passwords do not match. Please re-enter.</p>";
    } 
    else {
        $hashed_password = md5($password); // Mã hóa bằng MD5

        // Kiểm tra username đã tồn tại chưa
        $check_query = "SELECT * FROM users WHERE username = '$username'";
        $check_result = mysqli_query($link, $check_query);

        if (mysqli_num_rows($check_result) > 0) {
            $message = "<p style='color:red;'>Username already exists. Please choose another.</p>";
        } else {
            // Thêm người dùng mới
            $insert_query = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
            if (mysqli_query($link, $insert_query)) {
                $message = "<p style='color:green;'>Registration successful! You can now <a href='login.php'>Login</a>.</p>";
            } else {
                $message = "<p style='color:red;'>Error: " . mysqli_error($link) . "</p>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>

    <!-- Hiển thị thông báo -->
    <?php if (!empty($message)) echo $message; ?>

    <form action="" method="post">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <label>Confirm Password:</label><br>
        <input type="password" name="confirm_password" required><br><br>

        <input type="submit" name="register" value="Register">
    </form>

    <p>Already have an account? <a href="login.php">Login here</a>.</p>
</body>
</html>
