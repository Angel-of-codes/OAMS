<?php
require_once('config/db.php');
session_start();
if (!isset($_COOKIE['uname'])) {
    header('location:index.php');
} else {
    $user = $_COOKIE['uname'];
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
    <title>Dashboard</title>
</head>

<body class="bg-dark-subtle">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Online Attendance</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success me-3" type="submit">Search</button>
                    <a href="logout.php" id="logout" class="btn btn-outline-danger me-2 ">logout</a>
                </form>
                <!-- logout -->
                <li class="nav-item ">
                </li>
            </div>
        </div>
    </nav>
    <!-- profile  -->
    <div class="p-4 p-md-5 mb-4 my-4 myrounded text-body-emphasis bg-body-secondary">
        <div class="col-lg-6 px-0">
            <h1 class="display-4 fst-italic fw-bold cptlise">welcome professor
                <?php echo $user ?>
            </h1>
            <p class="lead my-3">We are Ready Now.</p>
        </div>
    </div>
    <!-- action -->
    <!-- operations -->
    <form action="students.php" method="post" class="row container mx-auto my-4">
        <h3 class="pb-4 mb-4 fst-italic border-bottom border-dark text-primary">
            Students
        </h3>
        <div class="col-sm-4 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Students of BCA 1<sup>st</sup> Year</h5>
                    <p class="card-text">You can ADD, REMOVE and VIEW Students here.</p>
                    <button type="submit" name="student1" class="btn btn-primary">View Students</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Students of BCA 2<sup>nd</sup> Year</h5>
                    <p class="card-text">You can ADD, REMOVE and VIEW Students here.</p>
                    <button type="submit" name="student2" class="btn btn-primary">View Students</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Students of BCA 3<sup>rd</sup> Year</h5>
                    <p class="card-text">You can ADD, REMOVE and VIEW Students here.</p>
                    <button type="submit" name="student3" class="btn btn-primary">View Students</button>
                </div>
            </div>
        </div>
    </form action="students1.php" method="post">
    <!-- Attendance -->
    <form action="Attendance.php" method="post" class="row container mx-auto my-4">
        <h3 class="pb-4 mb-4 fst-italic border-bottom border-dark text-success">
            Attendance
        </h3>
        <div class="col-sm-4 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Attendance of BCA 1<sup>st</sup> Year</h5>
                    <p class="card-text">Perform Today’s Attendance of Students here.</p>
                    <button type="submit" name="Attendance1" class="btn btn-success">View Students</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Attendance of BCA 2<sup>nd</sup> Year</h5>
                    <p class="card-text">Perform Today’s Attendance of Students here.</p>
                    <button type="submit" name="Attendance2" class="btn btn-success">View Students</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Attendance of BCA 3<sup>rd</sup> Year</h5>
                    <p class="card-text">Perform Today’s Attendance of Students here.</p>
                    <button type="submit" name="Attendance3" class="btn btn-success">View Students</button>
                </div>
            </div>
        </div>
    </form>
</body>