<nav class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3" id="mainNav">
    <div class="container">
    <img width="155"height="59" src="./assets/img/induslogo.png"> 
      <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
            <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
                <li class="nav-item">
                    <a class="nav-link" href="Courses.php">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacts.php">Contacts</a>
                </li>
                <li class="nav-item">
          <?php 
            if(!isset($_SESSION["mail"]))
            {
              echo "<a class='nav-link' href='login.php'>Login</a>";
            }    
            ?>
          </li>
            </ul>
            <a class="btn btn-primary shadow" role="button" href="Signup.php">Signup</a>
        </div>
    </div>
</nav>