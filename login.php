<?php
// connection to database ;

$servername = "localhost";
$username = "root";
$password = "";
$database = "ams";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
  die("connection Error");
}

$f_id = $_POST['uname'];
$fpswd = $_POST['pswd'];
$sql = "SELECT * FROM `fac` where `f_id`='$f_id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
  $row = mysqli_fetch_assoc($result);
  if ($fpswd == $row['f_pswd']) {
    $uname = $row['f_name'];
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['uname'] = $uname;
    // $_SESSION['timeout'] = time();
    setcookie('uname', $uname, time() + (30 * 60));
    header("location: dashboard.php");
  } else {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
      <title>failed</title>
    </head>

    <body class="bg-dark-subtle">
      <div class="modal modal-content" id="" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content ">
            <div class="modal-header">
              <h1 class="modal-title fs-8 text-danger fst-italic" id="staticBackdropLabel">Oops..!</h1>
            </div>
            <!-- input modal -->
            <div class="modal-body">
              <div class="container my-4 border border-info rounded">
                <form action="login.php" method="post">
                  <div class="mb-3 row my-4 ms-auto">
                    <p class="col-sm-8 col-form-label fst-italic">INVALID USERNAME OR PASSWORD !</p>
                  </div>
                  <div class="d-grid gap-2">
                    <a href="index.php" class="btn btn-primary mb-3" role="button">Try Again</a>
                    <p class="fs-12 mx-auto">If Don't Have Any Account Contact Admin.</p>
                    <a href="forget.html" class="btn btn-success mb-3" role="button">Forget Password</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>

    </html>
    <?php


  }
} else {
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>
    <title>failed</title>
  </head>

  <body>
    <div class="modal modal-content" id="" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content ">
          <div class="modal-header">
            <h1 class="modal-title fs-8 text-danger fst-italic" id="staticBackdropLabel">Oops..!</h1>
          </div>
          <!-- input modal -->
          <div class="modal-body">
            <div class="container my-4 border border-info rounded">
              <form action="login.php" method="post">
                <div class="mb-3 row my-4 ms-auto">
                  <p class="col-sm-8 col-form-label fst-italic">INVALID USERNAME OR PASSWORD !</p>
                </div>
                <div class="d-grid gap-2">
                  <a href="index.html" class="btn btn-primary mb-3" role="button">Try Again</a>
                  <p class="fs-12 mx-auto">If Don't Have Any Account Contact Your HOD.</p>
                  <a href="forget.html" class="btn btn-success mb-3" role="button">Forget Password</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

  </html>
  <?php
} ?>