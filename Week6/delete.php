<?php
include "connection.php";

$id = $_GET["id"];
mysqli_query($link, "DELETE FROM table3 WHERE id = $id");

header("Location: index.php");
exit;
?>
