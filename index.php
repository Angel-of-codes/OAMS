<?php
session_start();

if (isset($_SESSION['username']) || isset($_COOKIE['uname'])) {
  header('location: dashboard.php');
  die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <title>HOME</title>
</head>

<body class="bg-dark-subtle">
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid cptlise">
      <a class="navbar-brand" href="#">online attendance</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link cptlise" href="" data-bs-toggle="modal" data-bs-target="#login-modal">login
            </a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">search</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- login modal -->
  <div class="modal fade" id="login-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content cptlise">
        <div class="modal-header">
          <h1 class="modal-title fs-8" id="staticBackdropLabel">login</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- input modal -->
        <div class="modal-body">
          <div class="container my-4 border border-info rounded">
            <form action="login.php" method="post">
              <div class="mb-3 row my-4 ms-auto">
                <label for="staticUsername" class="col-sm-2 col-form-label">username</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="staticUsername" name="uname" required>
                </div>
              </div>
              <div class="mb-3 row mb-4 ms-auto">
                <label for="inputPassword" class="col-sm-2 col-form-label">password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword" name="pswd" required>
                </div>
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary mb-3">login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- the carousel -->
  <div class="container my-4">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner cptlise">
        <div class="carousel-item active">
          <img src="pics/c3.jpeg" class="d-block w-100 rounded" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Go Green</h5>
            <p>No waste of Papers.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="pics/c2.jpeg" class="d-block w-100 rounded" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>New World</h5>
            <p>Find Yourself in this Digital-World.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="pics/c1.jpeg" class="d-block w-100 rounded" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Explore Yourself</h5>
            <p>Follow your Passion and Enjoy The life.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- cards -->
  <div class="container">
    <div class="card-group">
      <div class="card">
        <img src="pics/card1.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Admission Open</h5>
          <p class="card-text">Addmission is Open for Batch 2023-24.</p>
        </div>
      </div>
      <div class="card">
        <img src="pics/card2.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Notification</h5>
          <p class="card-text">The practical of BCA 6th SEM is scheduled on 30-09-23.</p>
        </div>
      </div>
      <div class="card">
        <img src="pics/card3.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Departments</h5>
          <p class="card-text">This website only have BCA Department till now.</p>
        </div>
      </div>
    </div>
</body>
<!-- imp-link="https:/source.ubsplash.com/1200x600/?nature,code" -->

</html>