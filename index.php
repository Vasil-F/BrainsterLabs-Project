<!DOCTYPE html>
<html>
    <head>
        <title>BrainsterLabs</title>
        <meta charset="utf-8" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />

        <!-- Latest compiled and minified Bootstrap 4.6 CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <!-- CSS script -->
        <link rel="stylesheet" href="style.css">
        <!-- Latest Font-Awesome CDN -->
        <script src="https://kit.fontawesome.com/64087b922b.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-sm bg-warning navbar-light">
      <div class="logo-wrap p-2 mx-3">
        <a class="logo" href="index.html"
          ><img class="img-logo" src="images/brainster-logo.png" alt="logo"
        /></a>
      </div>
      <button
        id="btn"
        class="navbar-toggler border-0"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span id="navBtn" class=" "
          ><i class="fa-solid fa-bars fs-xl"></i
        ></span>
      </button>
      <div
        class="nav-inner collapse navbar-collapse justify-content-end"
        id="navbarNav"
      >
        <ul class="navbar-nav align-items-md-center text-center" id="navList">
          <li class="nav-item">
            <a
              class="nav-link font-weight-bold p-md-3 py-3"
              href="https://brainster.co/marketing/
                    "
              >Академија за маркетинг</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link font-weight-bold p-md-3 py-3"
              href="https://brainster.co/full-stack/
                  "
              >Академија за програмирање</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link font-weight-bold p-md-3 py-3"
              href="https://brainster.co/data-science/"
              >Академија за data science</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link font-weight-bold p-md-3 py-3"
              href="https://brainster.co/graphic-design/"
              >Академија за дизајн</a
            >
          </li>
          <li class="nav-item mx-lg-5 mx-md-2">
            <a class="btn btn-danger" href="form.php">Вработи наш студент</a>
          </li>
        </ul>
      </div>
      <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
          >&times;</a
        >
        <div class="overlay-content">
          <a href="https://brainster.co/marketing/">Академија за маркетинг</a>
          <a href="https://brainster.co/full-stack/"
            >Академија за програмирање</a
          >
          <a href="https://brainster.co/data-science/"
            >Академија за data science</a
          >
          <a href="https://brainster.co/graphic-design/">Академија за дизајн</a>
          <a id="vrabotiBtnOverlay" class="btn btn-danger" href="form.php"
            >Вработи наш студент</a
          >
        </div>
      </div>
      <span id="overlayBtn" class="" onclick="openNav()">&#9776; </span>
    </nav>
    <!-- NAVBAR END -->


        
        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        
        <!-- Latest Compiled Bootstrap 4.6 JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <!-- OVERLAY SCRIPT -->
   
   <script>
      function openNav() {
        document.getElementById("myNav").style.height = "100%";
      }

      function closeNav() {
        document.getElementById("myNav").style.height = "0%";
      }
    </script>
   
    </body>
</html>