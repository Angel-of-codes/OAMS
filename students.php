<?php
require_once('config/db.php');
session_start();
if (isset($_POST['student1'])) {
    $sql = "SELECT * FROM `student` where `st_dept` = 'bca' && `st_year`='1' ";
    $syear = "1";
    $sup = "st";
} elseif (isset($_POST['student2'])) {
    $sql = "SELECT * FROM `student` where `st_dept` = 'bca' && `st_year`='2' ";
    $syear = "2";
    $sup = "nd";
} elseif (isset($_POST['student3'])) {
    $sql = "SELECT * FROM `student` where `st_dept` = 'bca' && `st_year`='3' ";
    $syear = "3";
    $sup = "rd";
} else {
    header('location: dashboard.php');
}
$result = mysqli_query($conn, $sql);
$sno = 1; ?>

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
    <title>Students</title>
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
                        <a class="nav-link " href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Students</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Students  -->
    <div class="container-fluid text-center">
        <table class="table table-striped my-2 rounded">
            <h5 class="card-title my-3 fs-10">Students of BCA
                <?php echo $syear ?><sup>
                    <?php echo $sup ?>
                </sup> Year
            </h5>
            <thead>
                <tr class="table-dark text-light">
                    <th scope="col">S no.</th>
                    <th scope="col">Roll no.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Father's Name</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Town</th>
                    <th scope="col">Distric</th>
                    <th scope="col">State</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <th scope="row">
                            <?php echo $sno ?>
                        </th>
                        <td>
                            <?php echo $row['roll_no'] ?>
                        </td>
                        <td>
                            <?php echo $row['st_name'] ?>
                        </td>
                        <td>
                            <?php echo $row['st_f_name'] ?>
                        </td>
                        <td>
                            <?php echo $row['st_dob'] ?>
                        </td>
                        <td>
                            <?php echo $row['st_contact'] ?>
                        </td>
                        <td>
                            <?php echo $row['st_town'] ?>
                        </td>
                        <td>
                            <?php echo $row['st_city'] ?>
                        </td>
                        <td>
                            <?php echo $row['st_state'] ?>
                        </td>
                        <td><button type="button" class="btn btn-primary btn-sm pres" id="">Edit</button></td>
                    </tr>

                    <?php $sno++;
                    } ?>
            </tbody>
        </table>
        <button type="button" class="btn btn-outline-danger me-3" id="">Remove Student</button>
        <a href="s-regist.php" class="btn btn-outline-success">Add Student</a>
    </div>

</body>