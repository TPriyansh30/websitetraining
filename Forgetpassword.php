<?php
session_start();
if(isset($_SESSION["mail"]))
{
  $email = $_SESSION["mail"];
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
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap" />
</head>

<body>
  <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3" id="mainNav">
    <div class="container">
    <img width="155"height="59" src="./assets/img/induslogo.png"> 
        
    <button data-bs-toggle="collapse" class="navbar-toggler"
        data-bs-target="#navcol-1">
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
              if(isset($_SESSION["mail"])){
                if($email=='admin@123.com'){
                  echo "<li class='nav-item'>";
                  echo "<a class='nav-link' href='viewmembers.php'>Members</a>";
                  echo "</li>";
                }
              }
            ?>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Login</a>
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
      <div class="row d-flex justify-content-center">
        <div class="col-md-6 col-xl-4" style="width: 200px">
          <div class="card"></div>
        </div>
        <div class="col">
          <div class="p-5">
            <div class="text-center">
              <h4 class="fw-bold text-dark mb-2" style="margin-bottom: 0px; padding-bottom: 15px">
                Forgot Your Password?
              </h4>
            </div>
            <form class="user">
              <div class="mb-3">
                <input class="form-control form-control-user" type="email" id="exampleInputEmail-1"
                  aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email" />
              </div>
              <button class="btn btn-info d-block btn-user w-100" type="submit">
                Reset Password
              </button>
            </form>
            <div class="text-center">
              <hr />
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-4" style="width: 200px">
          <div class="card"></div>
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