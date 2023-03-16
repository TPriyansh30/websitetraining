<?php
session_start();
if(!isset($_SESSION["mail"]))
{
  header("location:login.php");
}
else{
  $email = $_SESSION["mail"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>Projects - Indus University</title>
  <meta name="description" content="Simple Learning Website" />
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap" />
  
</head>

<body>
  <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3" id="mainNav">
    <div class="container">
    <img width="155"height="59" src="./assets/img/induslogo.png"> 
        
    <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
        <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item"></li>
          <li class="nav-item"></li>
          <li class="nav-item">
            <a class="nav-link active" href="Courses.php">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacts.php">Contacts</a>
          </li>
          <?php
              if(isset($_SESSION["mail"])){
                if($email=='admin@123.com'){
                  echo "<li class='nav-item'>";
                  echo "<a class='nav-link' href='viewmembers.php'>Members</a>";
                  echo "</li>";
                }
              }
            ?>
          <li class="nav-item">
          <?php 
            if(!isset($_SESSION["mail"]))
            {
              echo "<a class='nav-link' href='login.php'>Login</a>";
            }    
            ?>
          </li>
        </ul>
        <?php 
            if(!isset($_SESSION["mail"]))
            {
              echo "<a class='btn btn-primary shadow' role='button' href='Signup.php'>Signup</a>";
            }else{
              echo "<a class='btn btn-primary shadow' role='button' href='logout.php'>Logout</a>";
              $email=$_SESSION["mail"];
            }    
            ?>
      </div>
    </div>
  </nav>
  <section class="py-5 mt-5">
    <div class="container py-5">
      <div class="row mb-5">
        <div class="col-md-8 col-xl-6 text-center mx-auto">
          <h2 class="fw-bold">Courses</h2>
        </div>
      </div>



      <div class="row row-cols-1 row-cols-md-2 mx-auto" id="delete_div" style="max-width: 900px">
    
     <?php
    
      include 'connection.php';
      $qry=mysqli_query($con,"SELECT * FROM `course`");
          
        while($res=mysqli_fetch_array($qry)){
        ?>
       
           <div class="col mb-4">
          <div>
            <div class="py-4">

              <iframe class="w-100 fit-cover" width="560" height="315" src="<?php echo $res['courselink']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

              <h4 class="fw-bold"><?php echo $res['coursename']; ?></h4>
              <p class="text-muted">
                <span style="color: rgb(68, 68, 68)"><?php echo $res['coursedes']; ?>&nbsp;</span><br />
              </p>
              <div class="text-center">
                <?php 
                if(isset($_SESSION["mail"]))
                {
                  $email=$_SESSION["mail"];
                  if($email=='admin@123.com'){
                    echo '<form method="post" action="deletecourse.php">';
                    echo '<input type="hidden" name="id" value="' . $res['id'] . '" />';
                    echo '<input class="btn btn-danger text-center btn-sm" type="submit" id="'.$res['id'].'" name="del" value ="Delete">';
                    echo '</form>';
                  }
                }
                ?>
                </div>
            </div>
          </div>
        </div>
      <?php
      }
      if(isset($_SESSION["mail"])){
      if($email=='admin@123.com') {
        ?>

      
      
      <div class="col mb-4 text-center">
        <div>
          <a class="btn btn-success border rounded border-0" role="button" style="margin-top: 116px" href="AddCourse.php">Add New Course</a>
        </div>
      </div>
    <?php
     }
    }
    ?>

      </div>
    </div>
  </section>

  <?php
  include("footer.php");
  ?>
  
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/bold-and-bright.js"></script>
</body>

</html>