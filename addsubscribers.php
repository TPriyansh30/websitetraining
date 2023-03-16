<?php
session_start();
if ($_POST) {
    $smail = $_POST["smail"];
    
    include 'connection.php';
    $sql3=mysqli_query($con,"INSERT INTO `subscribers` (`id`, `smail`) VALUES (NULL, '$smail')");

    echo "<script>
    var x;
        var r =confirm('Subscribed Successfully!'); 
        if (r == true) {
            window.location.href ='index.php';
        }else{
            window.location.href ='index.php';
        }
    </script>";
}
