<?php
$link = mysqli_connect("localhost", "root", "", "LoginReg");

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($link, "utf8");
?>
