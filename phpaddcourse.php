<?php
session_start();
if ($_POST) {
    $cname = $_POST["cname"];
    $cmess = $_POST["cdesc"];
    $clink = $_POST["clink"];
    
    include 'connection.php';
    $sql2=mysqli_query($con,"INSERT INTO `course` (`id`, `coursename`, `coursedes`, `courselink`) VALUES (NULL, '$cname', '$cmess', '$clink')");

    echo "<script>
    var x;
        var r =confirm('Course added successfully!'); 
        if (r == true) {
            window.location.href ='Courses.php';
        }else{
            window.location.href ='AddCourse.php';
        }
    </script>";
}
