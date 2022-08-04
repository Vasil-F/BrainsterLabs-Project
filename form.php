<?php
require 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $Name = $_POST['Name'];
  $CompanyName = $_POST['CompanyName'];
  $Email = $_POST['Email'];
  $Phone = $_POST['Phone'];
  $academy_id = $_POST['academy_id'];
  $sql = "INSERT INTO hireform (Name, CompanyName, Email, Phone, academy_id)
      VALUES ('$Name','$CompanyName','$Email','$Phone','$academy_id')";
  if (mysqli_query($conn, $sql)) {
    header("Location: success.php");
  } else {
    echo 'querry error' . mysqli_error($conn);
  }
} else {
  $sql = 'SELECT * FROM academies';
  $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
  <meta charset="utf-8" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />

  <!-- Latest compiled and minified Bootstrap 4.6 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
  <!-- CSS script -->
  <link rel="stylesheet" href="style.css" />
  <!-- Latest Font-Awesome CDN -->
  <script src="https://kit.fontawesome.com/64087b922b.js" crossorigin="anonymous"></script>
</head>

<body class="mb-56 bg-warning overflow-hidden">
  <nav class="navbar navbar-expand-sm bg-nav navbar-light border-nav">
    <div class="logo-wrap p-2 mx-3">
      <a class="logo" href="index.php"><img class="img-logo" src="images/brainster-logo.png" alt="logo" /></a>
    </div>
    <button id="btn" class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span id="navBtn" class=" "><i class="fa-solid fa-bars fs-xl"></i></span>
    </button>
    <div class="nav-inner collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-md-center text-center" id="navList">
        <li class="nav-item">
          <a class="nav-link font-weight-bold p-md-3 py-3" href="https://brainster.co/marketing/">Академија за маркетинг</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold p-md-3 py-3" href="https://brainster.co/full-stack/">Академија за програмирање</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold p-md-3 py-3" href="https://brainster.co/data-science/">Академија за data science</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold p-md-3 py-3" href="https://brainster.co/graphic-design/">Академија за дизајн</a>
        </li>
        <li class="nav-item mx-lg-5 mx-md-2">
          <a class="btn btn-danger" href="index.php">Врати се назад</a>
        </li>
      </ul>
    </div>
    <div id="myNav" class="overlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="overlay-content">
        <a href="https://brainster.co/marketing/">Академија за маркетинг</a>
        <a href="https://brainster.co/full-stack/">Академија за програмирање</a>
        <a href="https://brainster.co/data-science/">Академија за data science</a>
        <a href="https://brainster.co/graphic-design/">Академија за дизајн</a>
        <a id="vrabotiBtnOverlay" class="btn btn-danger" href="form.php">Вработи наш студент</a>
      </div>
    </div>
    <span id="overlayBtn" class="" onclick="openNav()">&#9776; </span>
  </nav>
  <div class="forms container-fluid height-fit bg-warning">
    <div class="container">
      <div class="row justify-content-center text-center pt-3 pt-md-5">
        <h1 class="font-weight-bold my-md-5 my-2 letter-spacing">
          Вработи студенти
        </h1>
      </div>
      <div class="row pt-0 pb-4 py-md-4">
        <div class="col col-lg-10 offset-lg-1">
          <form class="p-4" name="form" action="form.php" method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label class="font-weight-bold" for="#Name">Име и презиме</label>
                <input type="text" class="form-control p-4" id="Name" name="Name" required data-toggle="tooltip" data-placement="bottom" title="Пишувајте на латиница" placeholder="Вашето име и презиме" />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="form-group col-md-6">
                <label class="font-weight-bold" for="#CompanyName">Име на компанија</label>
                <input type="text" class="form-control p-4" id="CompanyName" name="CompanyName" required data-toggle="tooltip" data-placement="bottom" title="Пишувајте на латиница" placeholder="Име на вашата компанија" />
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label class="font-weight-bold" for="#Email">Контакт имејл</label>
                <input type="email" class="form-control p-4" id="Email" name="Email" required data-toggle="tooltip" data-placement="bottom" title="Внесете ја вашата имејл адреса" placeholder="Контакт имејл на вашата компанија" />
              </div>
              <div class="form-group col-md-6">
                <label class="font-weight-bold" for="#PhoneNumber">Контакт телефон</label>
                <input type="number" class="form-control p-4" id="PhoneNumber" name="Phone" required data-toggle="tooltip" data-placement="bottom" title="Внесете го вашиот телефонски број" placeholder="Контакт телефон на вашата компанија" />
              </div>
            </div>
            <div class="form-row flex-column flex-md-row">
              <div class="col">
                <label class="font-weight-bold" for="#academy_id">Тип на студент</label>
                <select required id="academy_id" name="academy_id" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Изберете тип на студент">
                  <?php
                  while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                  }
                  ?>
                  <option value="" disabled selected hidden>
                    Изберете тип на студент
                  </option>
                </select>
              </div>
              <div class="col pt-2">
                <label class="font-weight-bold" for="#Students"></label>
                <button type="submit" name="submit" class="btn btn-danger btn-block" data-toggle="tooltip" data-placement="top" title="Испрати формулар">
                  ИСПРАТИ
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="footer container-fluid fixed-bottom">
    <div class="row bg-black justify-content-center align-items-center py-3 px-2">
      <p class="text-white text-center m-0">
        Изработено со <span class="text-danger">&hearts;</span> од студентите
        на Brainster
      </p>
    </div>
  </div>

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
    <!-- TOOLTIP SCRIPT -->
    <script>
    $(function() {
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>
</body>
</html>
