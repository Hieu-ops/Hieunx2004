<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="col-lg-4">
        <h2>User data form</h2>
        <form action="" method="post">
            <div class="form-group">
                <label>First name:</label>
                <input type="text" class="form-control" name="firstname" required>
            </div>
            <div class="form-group">
                <label>Last name:</label>
                <input type="text" class="form-control" name="lastname" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label>Contact:</label>
                <input type="text" class="form-control" name="contact" required>
            </div>
            <div class="form-group">
                <label>DoB:</label>
                <input type="date" class="form-control" name="dob" required>
            </div>
            <button type="submit" name="insert" class="btn btn-success">Insert</button>
        </form>
    </div>

    <div class="col-lg-12">
        <h3>User List</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>DOB</th>
                    <th>Contact</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $res = mysqli_query($link, "SELECT * FROM table3");
                while ($row = mysqli_fetch_array($res)) {
                    echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['firstname']}</td>";
                    echo "<td>{$row['lastname']}</td>";
                    echo "<td>{$row['email']}</td>";
                    echo "<td>{$row['dob']}</td>";
                    echo "<td>{$row['contact']}</td>";
                    echo "<td><a href='edit.php?id={$row['id']}' class='btn btn-info btn-sm'>Edit</a></td>";
                    echo "<td><a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php
if (isset($_POST["insert"])) {
    mysqli_query($link, "INSERT INTO table3 VALUES (NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[dob]','$_POST[contact]')");
    echo "<script>window.location.href = window.location.href;</script>";
}
?>
</body>
</html>
