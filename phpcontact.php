<?php
session_start();
if ($_POST) {
    $name = $_POST["uName"];
    $email = $_POST["uEmail"];
    $mess = $_POST["uMessage"];
    
    include 'connection.php';
    $sql2=mysqli_query($con,"INSERT INTO `contacts` (`id`, `queryname`, `queryemail`, `querymess`) VALUES (NULL, '$name', '$email', '$mess')");

    echo "<script>
    var x;
        var r =confirm('Messeges sent successfully!'); 
        if (r == true) {
            window.location.href ='index.php';
        }else{
            window.location.href ='index.php';
        }
    </script>";
}
