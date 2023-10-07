<?php
  // connection to database ;

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database ="ams";
  $conn = mysqli_connect($servername, $username, $password, $database);
  if(!$conn)
  {
    die("connection Error");
  }
  ?>