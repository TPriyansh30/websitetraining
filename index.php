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
  <title>Home - Indus University</title>
  <meta name="description" content="Simple Learning Website" />
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap" />
  <style>
  .placement{
    height: 144px;
    width: 144px;
  }
  </style>
</head>

<body style="
      /*background: url(&quot;design.jpg&quot;);*/
      background-position: 0 -60px;
    ">
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
  <header class="bg-primary-gradient pt-5">
    <div class="container pt-4 pt-xl-5">
      <div class="row pt-5">
        <div class="col-md-8 col-xl-6 text-center text-md-start mx-auto">
          <div class="text-center">
            <p class="fw-bold text-success mb-2">#1 in Gujarat</p>
            <h1 class="fw-bold">
              The best solution for your career&nbsp;
            </h1>
          </div>
        </div>
        <div class="col-12 col-lg-10 mx-auto">
          <div class="position-relative" style="display: flex; flex-wrap: wrap; justify-content: flex-end">
            <div style="
                  position: relative;
                  flex: 0 0 45%;
                  transform: translate3d(-15%, 35%, 0);
                ">
              <img class="img-fluid" src="assets/img/main.jfif" data-bss-parallax="" data-bss-parallax-speed="0.4" />
            </div>
            <div style="
                  position: relative;
                  flex: 0 0 45%;
                  transform: translate3d(-5%, 20%, 0);
                ">
              <img class="img-fluid" src="assets/img/bhanvar.jfif" data-bss-parallax="" data-bss-parallax-speed="0.4" />
            </div>
            <div class="embed-responsive embed-responsive-1by1" style="
                  position: relative;
                  flex: 0 0 60%;
                  transform: translate3d(0, 0%, 0);
                ">
              <iframe allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/2LYm4EepoO0" class="embed-responsive-item" data-bss-parallax-speed="0.25" height="315" width="560"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section class="py-5">
    <div class="container text-center py-5">
    <p class="fw-bold text-success mb-2">PLACEMENT</p>
      <p class="mb-4" style="font-size: 1.6rem">
      Here’s a glimpse of list of companies which consistently recruits eligible and quality human resources from Indus University.<br />
      </p>
      <img class="m-3 placement" src="assets/img/arastu.jpg" /> 
      <img class="m-3 placement" src="assets/img/amazon.jpg" />
      <img class="m-3 placement" src="assets/img/hitech.jpg" />
      <img class="m-3 placement" src="assets/img/electrotherm.jpg" />
      <img class="m-3 placement" src="assets/img/audi.jpg"/>
    </div>
  </section>
  <section>
    <div class="container bg-primary-gradient py-5">
      <div class="row">
        <div class="col-md-8 col-xl-6 text-center mx-auto">
          <p class="fw-bold text-success mb-2">Our Programme</p>
          <h3 class="fw-bold">What we can do for you</h3>
        </div>
      </div>
      <div class="py-5 p-lg-5">
        <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px">
          <div class="col mb-5">
            <div class="card shadow-sm">
              <div class="card-body px-4 py-5 px-md-5">
                <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem; right: 1rem; position: absolute">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-webcam">
                    <path fill-rule="evenodd" d="M0 6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H9.269c.144.162.33.324.531.475a6.785 6.785 0 0 0 .907.57l.014.006.003.002A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.224-.947l.003-.002.014-.007a4.473 4.473 0 0 0 .268-.148 6.75 6.75 0 0 0 .639-.421c.2-.15.387-.313.531-.475H2a2 2 0 0 1-2-2V6Zm2-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H2Z">
                    </path>
                    <path fill-rule="evenodd" d="M8 6.5a1 1 0 1 0 0 2 1 1 0 0 0 0-2Zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0Z">
                    </path>
                    <path d="M13 7.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z"></path>
                  </svg>
                </div>
                <h5 class="fw-bold card-title">Indus Institute of <br> Technology and Engineering</h5>
                <p class="text-muted card-text mb-4">
                IITE was established in 2006 with a vision to train and upgrade the technical skills of engineers as per the Industry's requirements.
                </p>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card shadow-sm">
              <div class="card-body px-4 py-5 px-md-5">
                <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem; right: 1rem; position: absolute">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-people">
                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z">
                    </path>
                  </svg>
                </div>
                <h5 class="fw-bold card-title">Indus Architecture School</h5>
                <p class="text-muted card-text mb-4">
                  <span style="color: rgb(68, 68, 68)">The Institute of Architecture at Indus University has a course curriculum that assures a vital foundation for the students who evolve as future professionals in architecture</span><br />
                </p>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card shadow-sm">
              <div class="card-body px-4 py-5 px-md-5">
                <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem; right: 1rem; position: absolute">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-graph-up-arrow">
                    <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z">
                    </path>
                  </svg>
                </div>
                <h5 class="fw-bold card-title">Indus Design School</h5>
                <p class="text-muted card-text mb-4">
                  <span style="color: rgb(68, 68, 68)">The inception of Indus Design School (IDS) came about to address the growing need for a well-structured and credible formal education in design.</span><br />
                </p>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card shadow-sm">
              <div class="card-body px-4 py-5 px-md-5">
                <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem; right: 1rem; position: absolute">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-easel2">
                    <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .447.276L8.81 1h4.69A1.5 1.5 0 0 1 15 2.5V11h.5a.5.5 0 0 1 0 1h-2.86l.845 3.379a.5.5 0 0 1-.97.242L12.11 14H3.89l-.405 1.621a.5.5 0 0 1-.97-.242L3.36 12H.5a.5.5 0 0 1 0-1H1V2.5A1.5 1.5 0 0 1 2.5 1h4.691l.362-.724A.5.5 0 0 1 8 0ZM2 11h12V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5V11Zm9.61 1H4.39l-.25 1h7.72l-.25-1Z">
                    </path>
                  </svg>
                </div>
                <h5 class="fw-bold card-title">Indus Institute of Management Studies</h5>
                <p class="text-muted card-text mb-4">
                  <span style="color: rgb(68, 68, 68)">The institute continuously expands to grow students for corporate life ahead. We provide suitable courses that build a student into a confident & future-ready for the corporate world.</span><br />
                </p>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card shadow-sm">
              <div class="card-body px-4 py-5 px-md-5">
                <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem; right: 1rem; position: absolute">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-easel2">
                    <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .447.276L8.81 1h4.69A1.5 1.5 0 0 1 15 2.5V11h.5a.5.5 0 0 1 0 1h-2.86l.845 3.379a.5.5 0 0 1-.97.242L12.11 14H3.89l-.405 1.621a.5.5 0 0 1-.97-.242L3.36 12H.5a.5.5 0 0 1 0-1H1V2.5A1.5 1.5 0 0 1 2.5 1h4.691l.362-.724A.5.5 0 0 1 8 0ZM2 11h12V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5V11Zm9.61 1H4.39l-.25 1h7.72l-.25-1Z">
                    </path>
                  </svg>
                </div>
                <h5 class="fw-bold card-title">Indus Institute of Information & Communication Technology</h5>
                <p class="text-muted card-text mb-4">
                  <span style="color: rgb(68, 68, 68)">IICT offers courses in Computer Applications and Information Technology. Emphasizing the widespread knowledge of IT, applying a comprehensive and substantial foundation to the basic understanding and knowledge </span><br />
                </p>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card shadow-sm">
              <div class="card-body px-4 py-5 px-md-5">
                <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem; right: 1rem; position: absolute">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-easel2">
                    <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .447.276L8.81 1h4.69A1.5 1.5 0 0 1 15 2.5V11h.5a.5.5 0 0 1 0 1h-2.86l.845 3.379a.5.5 0 0 1-.97.242L12.11 14H3.89l-.405 1.621a.5.5 0 0 1-.97-.242L3.36 12H.5a.5.5 0 0 1 0-1H1V2.5A1.5 1.5 0 0 1 2.5 1h4.691l.362-.724A.5.5 0 0 1 8 0ZM2 11h12V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5V11Zm9.61 1H4.39l-.25 1h7.72l-.25-1Z">
                    </path>
                  </svg>
                </div>
                <h5 class="fw-bold card-title">Indus Institute of Sciences Humanities & Liberal Studies</h5>
                <p class="text-muted card-text mb-4">
                  <span style="color: rgb(68, 68, 68)">IISHLS is one of the core centres at the Indus University that strives to provide core knowledge of sciences. This institute covers six significant departments: Mathematics, Physics, Chemistry, Computer Science, Life Sciences, and Languages.</span><br />
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section></section>
  <section class="py-5 mt-5">
    <div class="container py-5">
      <div class="row mb-5">
        <div class="col-md-8 col-xl-6 text-center mx-auto">
          <p class="fw-bold text-success mb-2"></p>
          <h2 class="fw-bold"><strong>What People Say About us</strong></h2>
          <p class="text-muted w-lg-50">
            No matter the project, our team can handle it.&nbsp;
          </p>
              </div>
      </div>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 d-sm-flex justify-content-sm-center">
        <div class="col mb-4">
          <div class="d-flex flex-column align-items-center align-items-sm-start">
            <p class="bg-light border rounded border-light p-4">
              It is such a nice institute, where any student can
              learn easily their area of interest subjects and it gives
              knowledge from scratch. If one has doubt
              then Sir and Mam are so supportive and are always available to
              solve the doubts at anytime. Best place to learn.
            </p>
            <div class="d-flex">
              <div>
                <p class="fw-bold text-primary mb-0">Shail Shah</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="d-flex flex-column align-items-center align-items-sm-start">
            <p class="bg-light border rounded border-light p-4">
              Your positive attitude is infectious. The way you teach is the
              best way of teaching. I am from Non IT field but under the
              guidance of yours, the journey was so easy and now I am
              saying that I am not from Non-IT. So, thanks a lot. Thanks for
              always being supportive and for guiding me the right way.
            </p>
            <div class="d-flex">
              <div>
                <p class="fw-bold text-primary mb-0">Rohit kumar</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="d-flex flex-column align-items-center align-items-sm-start">
            <p class="bg-light border rounded border-light p-4">
              I have learn and applied so many thing. Highly
              recommended this place to Learn and Grow in IT Field.<br />
            </p>
            <div class="d-flex">
              <div>
                <p class="fw-bold text-primary mb-0">Parth Prajapati</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-8 col-xl-6 text-center mx-auto">
          <p class="fw-bold text-success mb-2">Contacts</p>
          <h2 class="fw-bold">How you can reach us</h2>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-md-6 col-xl-4">
          <div>
            <form class="p-3 p-xl-4" method="post" action="phpcontact.php">
              <div class="mb-3">
                <input class="form-control" type="text" id="name-1" name="uName" placeholder="Name" />
              </div>
              <div class="mb-3">
                <input class="form-control" type="email" id="email-1" name="uEmail" placeholder="Email" required />
              </div>
              <div class="mb-3">
                <textarea class="form-control" id="message-1" name="uMessage" rows="6" placeholder="Message" required></textarea>
              </div>
              <div>
                <input class="btn btn-primary shadow d-block w-100" type="submit" value="Send">
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-4 col-xl-4 d-flex justify-content-center justify-content-xl-start">
          <div class="d-flex flex-wrap flex-md-column justify-content-md-start align-items-md-start h-100">
            <div class="d-flex align-items-center p-3">
              <div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-telephone">
                  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z">
                  </path>
                </svg>
              </div>
              <div class="px-2">
                <h6 class="fw-bold mb-0">Phone</h6>
                <p class="text-muted mb-0">+912764260278</p>
              </div>
            </div>
            <div class="d-flex align-items-center p-3">
              <div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                  <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z">
                  </path>
                </svg>
              </div>
              <div class="px-2">
                <h6 class="fw-bold mb-0">Email</h6>
                <p class="text-muted mb-0">info@indusuni.ac.in</p>
              </div>
            </div>
            <div class="d-flex align-items-center p-3">
              <div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-pin">
                  <path d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A5.921 5.921 0 0 1 5 6.708V2.277a2.77 2.77 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354zm1.58 1.408-.002-.001.002.001zm-.002-.001.002.001A.5.5 0 0 1 6 2v5a.5.5 0 0 1-.276.447h-.002l-.012.007-.054.03a4.922 4.922 0 0 0-.827.58c-.318.278-.585.596-.725.936h7.792c-.14-.34-.407-.658-.725-.936a4.915 4.915 0 0 0-.881-.61l-.012-.006h-.002A.5.5 0 0 1 10 7V2a.5.5 0 0 1 .295-.458 1.775 1.775 0 0 0 .351-.271c.08-.08.155-.17.214-.271H5.14c.06.1.133.191.214.271a1.78 1.78 0 0 0 .37.282z">
                  </path>
                </svg>
              </div>
              <div class="px-2">
                <h6 class="fw-bold mb-0">Location</h6>
                <p class="text-muted mb-0">
                Rancharda, Via: Shilaj, Ahmedabad - 382115 Gujarat - India
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container">
      <div class="border rounded border-white d-flex flex-column justify-content-between align-items-center flex-lg-row bg-primary-gradient p-4 p-lg-5">
        <div class="text-center text-lg-start py-3 py-lg-1">
          <h2 class="fw-bold mb-2">Subscribe to our Newsletter</h2>
        </div>
        <form class="d-flex justify-content-center flex-wrap flex-lg-nowrap" method="post" action="addsubscribers.php">
          <div class="my-2">
            <input class="border rounded-pill shadow-sm form-control" type="email" name="smail" placeholder="Your Email" required/>
          </div>
          <div class="my-2">
            <input class="btn btn-primary shadow ms-2" type="submit" value="Subscribe">
          </div>
        </form>
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