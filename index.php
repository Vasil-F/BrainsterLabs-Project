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
        <!-- CAROUSEL HERO -->
        <div
      id="carouselSlidesOnly"
      class="carousel slide carousel-fade z-0 carouselHeight"
      data-interval="4000"
      data-ride="carousel"
    >
      <div class="carousel-inner carouselHeight">
        <div class="carousel-item active">
          <img src="images/bg1-2.jpg" class="h-100 w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="images/bg2-2.jpg" class="h-100 w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="images/bg3-2.jpg" class="h-100 w-100" alt="..." />
        </div>
      </div>
    </div>
    <!-- CAROUSEL END -->
        <!-- CARD FILTERS -->
        <div class="container-fluid">
      <div class="row flex-column flex-md-row">
        <div
          id="cardsMarketingWrap"
          class="col form-check form-check-inline bg-black text-white justify-content-center p-3 m-0"
        >
          <label
            class="custom-checkbox form-check-label p-2"
            for="filterMarketing"
            >Проекти на студенти по академија за маркетинг
            <input
              class="form-check-input ml-3"
              type="checkbox"
              name="filterMarketing"
              id="filterMarketing"
            />
            <i class="fa-solid fa-circle-check checked ml-3 mt-2 fs-m text-white"></i>
          </label>
        </div>
        <div
          id="cardsCodingWrap"
          class="col form-check form-check-inline bg-black text-white justify-content-center p-3 m-0"
        >
          <label class="custom-checkbox form-check-label p-2" for="filterCoding"
            >Проекти на студенти по академија за програмирање
            <input
              class="form-check-input ml-3"
              type="checkbox"
              name="filterCoding"
              id="filterCoding"
            />
            <i class="fa-solid fa-circle-check checked ml-3 mt-2 fs-m text-white"></i>
          </label>
        </div>
        <div
          id="cardsDesignWrap"
          class="col form-check form-check-inline bg-black text-white justify-content-center p-3 m-0"
        >
          <label class="custom-checkbox form-check-label p-2" for="filterDesign"
            >Проекти на студенти по академија за дизајн
            <input
              class="form-check-input ml-3"
              type="checkbox"
              name="filterDesign"
              id="filterDesign"
            />
            <i class="fa-solid fa-circle-check checked ml-3 mt-2 fs-m text-white"></i>
          </label>
        </div>
      </div>
    </div>
    <!-- CARD FILTERS END -->
       <!-- CARDS -->
       <div class="container-fluid bg-warning pb-4">
      <div class="container">
        <div class="row justify-content-center pt-4 pb-1">
          <h2 class="font-weight-bold">Проекти</h2>
        </div>
        <div class="row">
          <div class="kard coding col-12 col-md-6 col-lg-4">
            <div class="card coding border-radius-card mt-4 ">
              <img src="images/coding1.jpg" class="card-img-top border-radius-img " alt="coding1">
              <div class="card-body">
                <span class="bg-warning p-1 font-weight-bold">Академија за Програмирање</span>
                <h5 class="card-title mt-2 font-weight-bold">Име на проектот стои овде во две линии</h5>
                <p class="card-text ">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                <p class="font-weight-bold">Април-Декември 2022</p>
                <div class="text-right">
                <a href="#" class="btn btn-danger px-4">Дознај повеќе</a>
                </div>
              </div>
            </div>
          </div>
          <div class="kard marketing col-12 col-md-6 col-lg-4">
            <div class="card marketing border-radius-card mt-4 ">
              <img src="images/marketing1.jpg" class="card-img-top border-radius-img " alt="marketing1">
              <div class="card-body">
                <span class="bg-warning p-1 font-weight-bold">Академија за Маркетинг</span>
                <h5 class="card-title mt-2 font-weight-bold">Име на проектот стои овде во две линии</h5>
                <p class="card-text ">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                <p class="font-weight-bold">Април-Декември 2022</p>
                <div class="text-right">
                <a href="#" class="btn btn-danger px-4">Дознај повеќе</a>
                </div>
              </div>
            </div>
          </div>
          <div class="kard coding col-12 col-md-6 col-lg-4">
            <div class="card coding border-radius-card mt-4 ">
              <img src="images/coding2.jpg" class="card-img-top border-radius-img " alt="coding2">
              <div class="card-body">
                <span class="bg-warning p-1 font-weight-bold">Академија за Програмирање</span>
                <h5 class="card-title mt-2 font-weight-bold">Име на проектот стои овде во две линии</h5>
                <p class="card-text ">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                <p class="font-weight-bold">Април-Декември 2022</p>
                <div class="text-right">
                <a href="#" class="btn btn-danger px-4">Дознај повеќе</a>
                </div>
              </div>
            </div>
          </div>
          <div class="kard design col-12 col-md-6 col-lg-4">
            <div class="card design border-radius-card mt-4 ">
              <img src="images/design1.jpg" class="card-img-top border-radius-img " alt="design1">
              <div class="card-body">
                <span class="bg-warning p-1 font-weight-bold">Академија за Дизајн</span>
                <h5 class="card-title mt-2 font-weight-bold">Име на проектот стои овде во две линии</h5>
                <p class="card-text ">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                <p class="font-weight-bold">Април-Декември 2022</p>
                <div class="text-right">
                <a href="#" class="btn btn-danger px-4">Дознај повеќе</a>
                </div>
              </div>
            </div>
          </div>
          <div class="kard coding col-12 col-md-6 col-lg-4">
            <div class="card coding border-radius-card mt-4 ">
              <img src="images/coding3.jpg" class="card-img-top border-radius-img " alt="coding3">
              <div class="card-body">
                <span class="bg-warning p-1 font-weight-bold">Академија за Програмирање</span>
                <h5 class="card-title mt-2 font-weight-bold">Име на проектот стои овде во две линии</h5>
                <p class="card-text ">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                <p class="font-weight-bold">Април-Декември 2022</p>
                <div class="text-right">
                <a href="#" class="btn btn-danger px-4">Дознај повеќе</a>
                </div>
              </div>
            </div>
          </div>
          <div class="kard marketing col-12 col-md-6 col-lg-4">
            <div class="card marketing border-radius-card mt-4 ">
              <img src="images/marketing2.jpg" class="card-img-top border-radius-img " alt="marketing2">
              <div class="card-body">
                <span class="bg-warning p-1 font-weight-bold">Академија за Маркетинг</span>
                <h5 class="card-title mt-2 font-weight-bold">Име на проектот стои овде во две линии</h5>
                <p class="card-text ">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                <p class="font-weight-bold">Април-Декември 2022</p>
                <div class="text-right">
                <a href="#" class="btn btn-danger px-4">Дознај повеќе</a>
                </div>
              </div>
            </div>
          </div>
          <div class="kard coding col-12 col-md-6 col-lg-4">
            <div class="card coding border-radius-card mt-4 ">
              <img src="images/coding4.jpg" class="card-img-top border-radius-img " alt="coding4">
              <div class="card-body">
                <span class="bg-warning p-1 font-weight-bold">Академија за Програмирање</span>
                <h5 class="card-title mt-2 font-weight-bold">Име на проектот стои овде во две линии</h5>
                <p class="card-text ">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                <p class="font-weight-bold">Април-Декември 2022</p>
                <div class="text-right">
                <a href="#" class="btn btn-danger px-4">Дознај повеќе</a>
                </div>
              </div>
            </div>
          </div>
          <div class="kard design col-12 col-md-6 col-lg-4">
            <div class="card design border-radius-card mt-4 ">
              <img src="images/design2.jpg" class="card-img-top border-radius-img " alt="design2">
              <div class="card-body">
                <span class="bg-warning p-1 font-weight-bold">Академија за Дизајн</span>
                <h5 class="card-title mt-2 font-weight-bold">Име на проектот стои овде во две линии</h5>
                <p class="card-text ">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                <p class="font-weight-bold">Април-Декември 2022</p>
                <div class="text-right">
                <a href="#" class="btn btn-danger px-4">Дознај повеќе</a>
                </div>
              </div>
            </div>
          </div>
          <div class="kard coding col-12 col-md-6 col-lg-4">
            <div class="card coding border-radius-card mt-4 ">
              <img src="images/coding5.jpg" class="card-img-top border-radius-img " alt="coding5">
              <div class="card-body">
                <span class="bg-warning p-1 font-weight-bold">Академија за Програмирање</span>
                <h5 class="card-title mt-2 font-weight-bold">Име на проектот стои овде во две линии</h5>
                <p class="card-text ">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                <p class="font-weight-bold">Април-Декември 2022</p>
                <div class="text-right">
                <a href="#" class="btn btn-danger px-4">Дознај повеќе</a>
                </div>
              </div>
            </div>
          </div>
          <div class="kard marketing col-12 col-md-6 col-lg-4">
            <div class="card marketing border-radius-card mt-4 ">
              <img src="images/marketing3.jpg" class="card-img-top border-radius-img " alt="marketing3">
              <div class="card-body">
                <span class="bg-warning p-1 font-weight-bold">Академија за Маркетинг</span>
                <h5 class="card-title mt-2 font-weight-bold">Име на проектот стои овде во две линии</h5>
                <p class="card-text ">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                <p class="font-weight-bold">Април-Декември 2022</p>
                <div class="text-right">
                <a href="#" class="btn btn-danger px-4">Дознај повеќе</a>
                </div>
              </div>
            </div>
          </div>
          <div class="kard coding col-12 col-md-6 col-lg-4">
            <div class="card coding border-radius-card mt-4 ">
              <img src="images/coding6-2.jpg" class="card-img-top border-radius-img " alt="coding6">
              <div class="card-body">
                <span class="bg-warning p-1 font-weight-bold">Академија за Програмирање</span>
                <h5 class="card-title mt-2 font-weight-bold">Име на проектот стои овде во две линии</h5>
                <p class="card-text ">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                <p class="font-weight-bold">Април-Декември 2022</p>
                <div class="text-right">
                <a href="#" class="btn btn-danger px-4">Дознај повеќе</a>
                </div>
              </div>
            </div>
          </div>
          <div class="kard design col-12 col-md-6 col-lg-4">
            <div class="card design border-radius-card mt-4 ">
              <img src="images/design3.jpg" class="card-img-top border-radius-img " alt="design3">
              <div class="card-body">
                <span class="bg-warning p-1 font-weight-bold">Академија за Дизајн</span>
                <h5 class="card-title mt-2 font-weight-bold">Име на проектот стои овде во две линии</h5>
                <p class="card-text ">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                <p class="font-weight-bold">Април-Декември 2022</p>
                <div class="text-right">
                <a href="#" class="btn btn-danger px-4">Дознај повеќе</a>
                </div>
              </div>
            </div>
          </div>
          <div class="kard coding col-12 col-md-6 col-lg-4">
            <div class="card coding coding border-radius-card mt-4 ">
              <img src="images/coding7.jpg" class="card-img-top border-radius-img " alt="coding7">
              <div class="card-body">
                <span class="bg-warning p-1 font-weight-bold">Академија за Програмирање</span>
                <h5 class="card-title mt-2 font-weight-bold">Име на проектот стои овде во две линии</h5>
                <p class="card-text ">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                <p class="font-weight-bold">Април-Декември 2022</p>
                <div class="text-right">
                <a href="#" class="btn btn-danger px-4">Дознај повеќе</a>
                </div>
              </div>
            </div>
          </div>
          <div class="kard marketing col-12 col-md-6 col-lg-4">
            <div class="card marketing border-radius-card mt-4 ">
              <img src="images/marketing4-2.jpg" class="card-img-top border-radius-img " alt="marketing4">
              <div class="card-body">
                <span class="bg-warning p-1 font-weight-bold">Академија за Маркетинг</span>
                <h5 class="card-title mt-2 font-weight-bold">Име на проектот стои овде во две линии</h5>
                <p class="card-text ">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                <p class="font-weight-bold">Април-Декември 2022</p>
                <div class="text-right">
                <a href="#" class="btn btn-danger px-4">Дознај повеќе</a>
                </div>
              </div>
            </div>
          </div>
          <div class="kard coding col-12 col-md-6 col-lg-4">
            <div class="card coding border-radius-card mt-4 ">
              <img src="images/coding8.jpg" class="card-img-top border-radius-img " alt="coding8">
              <div class="card-body">
                <span class="bg-warning p-1 font-weight-bold">Академија за Програмирање</span>
                <h5 class="card-title mt-2 font-weight-bold">Име на проектот стои овде во две линии</h5>
                <p class="card-text ">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                <p class="font-weight-bold">Април-Декември 2022</p>
                <div class="text-right">
                <a href="#" class="btn btn-danger px-4">Дознај повеќе</a>
                </div>
              </div>
            </div>
          </div>
          <div class="kard design col-12 col-md-6 col-lg-4">
            <div class="card design border-radius-card mt-4 ">
              <img src="images/design4-2.jpg" class="card-img-top border-radius-img " alt="design4">
              <div class="card-body">
                <span class="bg-warning p-1 font-weight-bold">Академија за Дизајн</span>
                <h5 class="card-title mt-2 font-weight-bold">Име на проектот стои овде во две линии</h5>
                <p class="card-text ">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                <p class="font-weight-bold">Април-Декември 2022</p>
                <div class="text-right">
                <a href="#" class="btn btn-danger px-4">Дознај повеќе</a>
                </div>
              </div>
            </div>
          </div>
          <div class="kard coding col-12 col-md-6 col-lg-4">
            <div class="card coding border-radius-card mt-4 ">
              <img src="images/coding9.jpg" class="card-img-top border-radius-img " alt="coding9">
              <div class="card-body">
                <span class="bg-warning p-1 font-weight-bold">Академија за Програмирање</span>
                <h5 class="card-title mt-2 font-weight-bold">Име на проектот стои овде во две линии</h5>
                <p class="card-text ">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                <p class="font-weight-bold">Април-Декември 2022</p>
                <div class="text-right">
                <a href="#" class="btn btn-danger px-4">Дознај повеќе</a>
                </div>
              </div>
            </div>
          </div>
          <div class="kard marketing col-12 col-md-6 col-lg-4">
            <div class="card marketing border-radius-card mt-4 ">
              <img src="images/marketing5.jpg" class="card-img-top border-radius-img " alt="marketing5">
              <div class="card-body">
                <span class="bg-warning p-1 font-weight-bold">Академија за Маркетинг</span>
                <h5 class="card-title mt-2 font-weight-bold">Име на проектот стои овде во две линии</h5>
                <p class="card-text ">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                <p class="font-weight-bold">Април-Декември 2022</p>
                <div class="text-right">
                <a href="#" class="btn btn-danger px-4">Дознај повеќе</a>
                </div>
              </div>
            </div>
          </div>
          <div class="kard coding col-12 col-md-6 col-lg-4">
            <div class="card coding border-radius-card mt-4 ">
              <img src="images/coding10.jpg" class="card-img-top border-radius-img " alt="coding10">
              <div class="card-body">
                <span class="bg-warning p-1 font-weight-bold">Академија за Програмирање</span>
                <h5 class="card-title mt-2 font-weight-bold">Име на проектот стои овде во две линии</h5>
                <p class="card-text ">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                <p class="font-weight-bold">Април-Декември 2022</p>
                <div class="text-right">
                <a href="#" class="btn btn-danger px-4">Дознај повеќе</a>
                </div>
              </div>
            </div>
          </div>
          <div class="kard marketing col-12 col-md-6 col-lg-4">
            <div class="card marketing border-radius-card mt-4 ">
              <img src="images/marketing6.jpg" class="card-img-top border-radius-img " alt="marketing6">
              <div class="card-body">
                <span class="bg-warning p-1 font-weight-bold">Академија за Маркетинг</span>
                <h5 class="card-title mt-2 font-weight-bold">Име на проектот стои овде во две линии</h5>
                <p class="card-text ">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                <p class="font-weight-bold">Април-Декември 2022</p>
                <div class="text-right">
                <a href="#" class="btn btn-danger px-4">Дознај повеќе</a>
                </div>
              </div>
            </div>
          </div>
        </div>
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
   
    </body>
</html>