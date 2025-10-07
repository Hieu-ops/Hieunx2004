<?php 
    $link=mysqli_connect("localhost","root","12345") or die(mysqli_error());
    mysqli_select_db($link,"login_demo") or die(mysqli_error($link));
?>