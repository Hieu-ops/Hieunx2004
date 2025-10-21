<?php
include "connection.php";
$id = $_GET["id"];
$res = mysqli_query($link, "SELECT * FROM table3 WHERE id=$id");
$row = mysqli_fetch_array($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container col-lg-4">
    <h2>Edit User</h2>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="form-group">
            <label>First name:</label>
            <input type="text" class="form-control" name="firstname" value="<?php echo $row['firstname']; ?>">
        </div>
        <div class="form-group">
            <label>Last name:</label>
            <input type="text" class="form-control" name="lastname" value="<?php echo $row['lastname']; ?>">
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>">
        </div>
        <div class="form-group">
            <label>Contact:</label>
            <input type="text" class="form-control" name="contact" value="<?php echo $row['contact']; ?>">
        </div>
        <div class="form-group">
            <label>DOB:</label>
            <input type="text" class="form-control" name="dob" value="<?php echo $row['dob']; ?>">
        </div>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </form>
</div>

<?php
if (isset($_POST["update"])) {
    mysqli_query($link, "
        UPDATE table3 
        SET firstname='$_POST[firstname]', lastname='$_POST[lastname]', 
            email='$_POST[email]', dob = '$_POST[dob]',contact='$_POST[contact]'
        WHERE id=$_POST[id]
    ");
    echo "<script>window.location='index.php';</script>";
}
?>
</body>
</html>
