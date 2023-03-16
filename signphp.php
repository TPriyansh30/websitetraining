<?php
session_start();
if ($_POST) {
    $fname = $_POST["ufName"];
    $lname = $_POST["ulName"];
    $email = $_POST["uEmail"];
    $pass = $_POST["uPass"];
    
    include 'connection.php';
    $sql1 = mysqli_query($con, "INSERT INTO `registers` (`id`, `firstname`, `lastname`, `memberemail`, `memberpass`) VALUES (NULL, '$fname', '$lname', '$email', '$pass')");
    echo "<script>
    var x;
        var r =confirm('Sign up successful!'); 
        if (r == true) {
            window.location.href ='login.php';
        }else{
            window.location.href ='index.php';
        }
    </script>";
}
