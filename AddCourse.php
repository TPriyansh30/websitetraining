<?php
session_start();
if (!isset($_SESSION["mail"])) {
  header("location:login.php");
} else {
  $email = $_SESSION["mail"];
  if ($email != 'admin@123.com') {
    header("location:login.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>Log in - Indus University</title>
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
            <a class="nav-link" href="Courses.php">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacts.php">Contacts</a>
          </li>
          <?php
          if (isset($_SESSION["mail"])) {
            if ($email == 'admin@123.com') {
              echo "<li class='nav-item'>";
              echo "<a class='nav-link' href='viewmembers.php'>Members</a>";
              echo "</li>";
            }
          }
          ?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
        <?php
        if (!isset($_SESSION["mail"])) {
          echo "<a class='btn btn-primary shadow' role='button' href='Signup.php'>Signup</a>";
        } else {
          echo "<a class='btn btn-primary shadow' role='button' href='logout.php'>Logout</a>";
          $email = $_SESSION["mail"];
        }
        ?>
      </div>
    </div>
  </nav>
  <section class="py-5 mt-5">
    <div class="container py-5">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-7">
          <div class="p-5">
            <div class="text-center">
              <h4 class="text-dark mb-4">Add New Course</h4>
            </div>
            <form class="user" method="POST" action="phpaddcourse.php">
              <div class="row mb-3">
                <div class="col-sm-6 col-lg-12 mb-3 mb-sm-0">
                  <input class="form-control form-control-user" type="text" id="exampleFirstName-1" placeholder="Course Name" name="cname" required />
                </div>
              </div>
              <textarea class="form-control" placeholder="Course Description" rows="3" name="cdesc" required></textarea>
              <div class="mb-3"></div>
              <div class="row mb-3">
                <div class="col-sm-6 col-lg-12 mb-3 mb-sm-0">
                  <input class="form-control form-control-user" type="url" id="examplePasswordInput-1" placeholder="Playlist link" name="clink" required />
                </div>
              </div>
              <input class="btn btn-success d-block btn-user w-100" type="submit" value="Submit">
              <hr />
            </form>
          </div>
        </div>
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