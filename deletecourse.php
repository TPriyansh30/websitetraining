<?php
session_start();
include 'connection.php';
// $id=$_GET['id'];
if ($_POST) {
    $id = $_POST["id"];
    echo "<script>
    var x;
    var r =confirm('Are you sure want to delete this Course?'); 
    if (r == true) {
        window.location.href ='Courses.php';
        ";
        $sql1 = mysqli_query($con, "DELETE FROM `course` WHERE  `id`='".$id."'");
    echo "}else{
            window.location.href ='index.php';
        }
    </script>";
}
?>
