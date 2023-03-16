<?php
$con = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
$db = mysqli_select_db($con, "phptraining") or die(mysqli_error($con));
?>