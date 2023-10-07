<?php
require_once('config/db.php');
error_reporting(0);

$rollno = $_POST['rollno'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$depart = $_POST['depart'];
$year = $_POST['year'];
$town = $_POST['town'];
$city = $_POST['city'];
$state = $_POST['state'];
if (isset($_POST['sub-btn']) && isset($_POST)) {


    $sql = "INSERT INTO `student` (`roll_no`, `st_name`, `st_f_name`, `st_m_name`, `st_year`, `st_contact`, `st_email`, `st_dept`, `st_dob`, `st_town`, `st_city`, `st_state`) VALUES ('$rollno', '$name', '$fname', '$mname', '$year', '$contact', '$email', '$depart', '$dob', '$town', '$city', '$state');";
    $result = mysqli_query($conn, $sql);
    if ($result) { ?>
        <div class="alert alert-success" role="alert">Submitted Successfully.</div>
        <?php
    } else { ?>
        <div class="alert alert-danger" role="alert">Fill the Form !</div>
        <?php
    }
} else { ?>
    <div class="alert alert-danger" role="alert">Fill the Form !</div>
    <?php
} ?>

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
    <title>Student Registration</title>
</head>

<body class="bg-dark-subtle">
    <!-- registration form  -->
    <div class="container">
        <h3 class="pb-4 fst-italic border-bottom border-dark text-primary my-3 d-flex justify-content-center ">
            Registration of Student</h3>
        <!-- form  -->
        <form class="row g-3 needs-validation" validate action="#" method="post">

            <div class="col-md-4 position-relative">
                <label for="input1" class="form-label">Roll No.</label>
                <input type="mobile" class="form-control" id="input1" name="rollno" required>
            </div>

            <div class="col-md-6 position-relative">
                <label for="input2" class="form-label">Name</label>
                <input type="text" class="form-control" id="input2" name="name" required>
            </div>

            <div class="col-md-2 position-relative">
                <label for="input5" class="form-label">DOB</label>
                <input type="date" class="form-control" id="input5" name="dob" required>
            </div>

            <div class="col-md-6 position-relative">
                <label for="input3" class="form-label">Father's Name</label>
                <input type="text" class="form-control" id="input3" name="fname" required>

            </div>
            <div class="col-md-6 position-relative">
                <label for="input4" class="form-label">Mother's Name</label>
                <input type="text" class="form-control" id="input4" name="mname" required>

            </div>
            <div class="col-md-3 position-relative">
                <label for="input6" class="form-label">Contact</label>
                <input type="mobile" class="form-control" id="input6" name="contact" required>
            </div>

            <div class="col-md-4 position-relative">
                <label for="input12" class="form-label">Email</label>
                <input type="email" class="form-control" id="input12" name="email" required>
            </div>

            <div class="col-md-5 position-relative">
                <label for="input10" class="form-label">Department</label>
                <input type="text" class="form-control" id="input10" name="depart" required>
            </div>

            <div class="col-md-2 position-relative">
                <label for="input11" class="form-label">Year</label>
                <select class="form-select" id="input11" name="year" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="1">1<sup>st</sup> Year</option>
                    <option value="2">2<sup>nd</sup> Year</option>
                    <option value="3">3<sup>rd</sup> Year</option>
                </select>
            </div>

            <div class="col-md-3 position-relative">
                <label for="input8" class="form-label">Town</label>
                <input type="text" class="form-control" id="input8" name="town" required>
            </div>

            <div class="col-md-3 position-relative">
                <label for="input7" class="form-label">City</label>
                <input type="text" class="form-control" id="input7" name="city" required>
            </div>

            <div class="col-md-4 position-relative">
                <label for="input9" class="form-label">State</label>
                <select class="form-select" id="input9" name="state" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Rajshthan">Rajshthan</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Karnataka">Karnataka</option>
                </select>
            </div>

            <div class="col-12 d-flex justify-content-center mb-4">
                <button class="btn btn-primary" type="submit" name="sub-btn">Sign Up</button>
            </div>
        </form>
    </div>
</body>