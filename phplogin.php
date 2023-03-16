<?php
    session_start();
    if ($_POST) {
        $mail = $_POST["mail"];
        $pass = $_POST["pass"];

        $con = mysqli_connect("localhost", "root", "") or die(mysqli_error($con));
        $db = mysqli_select_db($con, "phptraining") or die(mysqli_error($con));

        $q = mysqli_query($con, "SELECT * FROM `registers` WHERE `memberemail`='{$mail}' AND `memberpass`='{$pass}'") or die(mysqli_error($con));
        $data = mysqli_fetch_row($q);

        if ($data > 0) {
            $_SESSION["mail"]=$mail;
            echo "<script>
                var x;
                var r =confirm('Log in Successful!'); 
                if (r == true) {
                    window.location.href ='index.php';
                }else{
                    window.location.href ='index.php';
                }
               </script>";
        } else {
            echo "<script>
                var x;
                var r =confirm('Log in failed!'); 
                if (r == true) {
                    window.location.href ='login.php';
                }else{
                    window.location.href ='login.php';
                }
               </script>";
        }
    }
?>