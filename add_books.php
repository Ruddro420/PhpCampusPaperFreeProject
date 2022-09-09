<?php

session_start();

if(!isset($_SESSION['user_page'])){

    header("Location:login.php");

}

// Add connection

require_once 'dbconnection.php';

// Session Link
$session_user = $_SESSION['user_page'];

// Data Collect from Database

$user_data = mysqli_query($link, "SELECT * FROM `user` WHERE `std_id` = '$session_user';");

//Fetch Data from Database
$user_row = mysqli_fetch_row($user_data);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400&display=swap" rel="stylesheet">
<!--Google Font--> 
<link rel="stylesheet" href="css/style.css">
    <title>Add Books</title>
    <style>

/* Input Field Design Start #########*/
.form-control {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: black !important;
    background-color: #DDE0E3 !important;
    background-clip: padding-box;
    border-bottom: 3px solid #19D5BA;
    border-top:none !important;
    border-right:none !important;
    border-left:none !important;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
  /* Input Field Design END ##########*/
    </style>
</head>


<body>

<!--New Nav Bar Start-->
<nav style="background:#1A2127; color:#fff;" class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="#">Computer Science & Engineering</a>
    <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="user.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Assingment Generator</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="notice_show.php">Cse Notice</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="routine_show.php">Routine</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="prv_qs_show.php">Previous Question</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="add_books.php">Add Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="view_books.php">View Books</a>
        </li>
             <!--Drop Down Option Start-->
             <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Others
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
          <a class="nav-link" style="display:block;"  href="view_books.php">View Books & Documents</a>
          <a class="nav-link" style="display:block;"  href="add_books.php">Add Books & Documents</a>
          <a class="nav-link" style="display:block;"  href="https://sites.google.com/d/18EQZAf9N5BdVK7_s4omx5k9mbv6I0_ep/p/1dWKaUWL87MQT2V52XH49y2MAvVMKajmn/edit"> Apps</a>
          </ul>
        </li>
      </ul>
    </div>
      <!--Drop Down Option End-->

        <!--Drop Down Option Start-->
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profile
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
          <a class="nav-link" style="display:block;"  href="profile.php">View Profile</a>
          <a class="nav-link" style="display:block;"  href="logout.php"> Logout</a>
          </ul>
        </li>
      </ul>
    </div>
      <!--Drop Down Option End-->
      </ul>
     
    </div>
  </div>
</nav>
<!--New Nav Bar End-->

<div class="container mt-5 mb-5">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
        <h3 style="color:#fff; text-align:center;">Books Add</h3>
        <h6 style="color:#fff; text-align:center;">Insert Your Information Carefully</h6> <br>
        <!--Start Form Function-->
        <form method="post" enctype="multipart/form-data">

<div class="form-group">
<label style="color:#E5E4E4;" for="StudentID">Semester</label>
<select required name="semester" style="color:#979797;" class="form-select" aria-label="Default select example">
  <option selected disabled value="">Select Your Semester</option>
  <option value="1st Year 1st Semester">1st Year 1st Semester</option>
  <option value="1st Year 2nd Semester">1st Year 2nd Semester</option>
  <option value="2nd Year 1st Semester">2nd Year 1st Semester</option>
  <option value="2nd Year 2nd Semester">2nd Year 2nd Semester</option>
  <option value="3rd Year 1st Semester">3rd Year 1st Semester</option>
  <option value="3rd Year 2nd Semester">3rd Year 2nd Semester</option>
  <option value="4th Year 1st Semester">4th Year 1st Semester</option>
  <option value="4th Year 2nd Semester">4th Year 2nd Semester</option>
</select>
    <br>
  </div>
  <div class="form-group">
<label style="color:#E5E4E4;" for="StudentID">Course Tittle</label>
<select name="course" style="color:#979797;" class="form-select" aria-label="Default select example" required>
  <option selected disabled value="">Select Course Name</option>
  <option value="Introduction to Computer System">Introduction to Computer System</option>
  <option value="Sturctured Programming Language">Sturctured Programming Language</option>
  <option value="Discrete Mathematics">Discrete Mathematics</option>
  <option value="Basic Electrical Engineering">Basic Electrical Engineering</option>
  <option value="Economics">Economics</option>
  <option value="Basic Electronics">Basic Electronics</option>
  <option value="Differential and Integral Calculus">Differential and Integral Calculus</option>
  <option value="Digital Logic Design">Digital Logic Design</option>
  <option value="Data Structure">Data Structure</option>
  <option value="Chemistry">Chemistry</option>
  <option value="Bangladesh Studies and Sociology">Bangladesh Studies and Sociology</option>
  <option value="Statistics">Statistics</option>
  <option value="Matrices and Differential Equations">Matrices and Differential Equations</option>
  <option value="Object Oriented Programming">Object Oriented Programming</option>
  <option value="Operating System and System Programming">Operating System and System Programming</option>
  <option value="Numerical Methods">Numerical Methods</option>
  <option value="Complex Variable , Laplace Transformation and Fourier Series">Complex Variable , Laplace Transformation and Fourier Series</option>
  <option value="Databse Managment System">Databse Managment System</option>
  <option value="Design and Analysis of Algorithm">Design and Analysis of Algorithm</option>
  <option value="Computer Architecture">Computer Architecture</option>
  <option value="Data Communication">Data Communication</option>
  <option value="Theory of Computation">Theory of Computation</option>
  <option value="Microprocessor and Assembly Language">Microprocessor and Assembly Language</option>
  <option value="Software Enginnering">Software Enginnering</option>
  <option value="Computer Graphics">Computer Graphics</option>
  <option value="Computer Networks">Computer Networks</option>
  <option value="Compiler Design">Compiler Design</option>
  <option value="Digital Signal Processing">Digital Signal Processing</option>
  <option value="Artificial Intelligence">Artificial Intelligence</option>
  <option value="Compiler Design">Compiler Design</option>
  <option value="Digital Image Processing">Digital Image Processing</option>
  <option value="Web Engineering">Web Engineering</option>
  <option value="Compiler Design">Compiler Design</option>
  <option value="Wireless Communication">Wireless Communication</option>
  <option value="Machine Learning">Machine Learning</option>
</select>
    <br>
  </div>

  <div class="form-group">
    <label style="color:#E5E4E4;" for="StudentID">Upload Date</label>
    <input id="pdf" type="date" class="form-control" name="date" accept="application/pdf"  required>
  </div> <br>


  <div class="form-group">
    <label style="color:#E5E4E4;" for="StudentID">Books Upload</label>
    <input id="pdf" type="file" class="form-control" name="pdf" accept="application/pdf"  required>
  </div>

 
<?php


// Add connection

/* $link = mysqli_connect("localhost","root","","home_inventory"); */

if(isset($_POST['submit'])) { 

  
  $semester = $_POST['semester'];

  $course = $_POST['course'];
   
  $date_time = $_POST['date'];

  $pdf = $_FILES['pdf']['name'];

  $pdf_type = $_FILES['pdf']['type'];

  $pdf_size = $_FILES['pdf']['size'];

  $pdf_tmp_loc = $_FILES['pdf']['tmp_name'];

  $pdf_store = "books_pdf/".$pdf;

  move_uploaded_file($pdf_tmp_loc,$pdf_store);


// Insert Data

$sql = "INSERT INTO `book_upload`(`semester`,`course_name` ,`date_time`, `pdf`) VALUES ('$semester','$course','$date_time','$pdf')";

// Execute Insert In DataBase

$result = mysqli_query($link, $sql);

if($result)
{
    $data_success = "File Upload Successfully !!";
}
else 
{
    $data_error = "File Upload faild try again !!";
}

}


?>

<!--Data Error Solve Start-->
<div class="container">
  <div class="row">
  <div class="col mt-3 bg-danger">
    <?php if(isset($data_success)) echo $data_success ?>
    <?php if(isset($data_error)) echo $data_error ?>
    </div>
  </div>
</div>
<!--Data Error Solve End-->

 <div class="text-center mt-4">
 <input style="color:#19D5BA; border:1px solid #19D5BA; text-align:center;padding-left:40px; padding-right:40px;"  class="btn" type="submit" name="submit" value="Add Books & Documents"> <br> <br>
 </div>
</form>

        </div>
      </div>
    </div>
    <div class="col mt-3">
      <a href="user.php">
      <div class="card status">
        <div class="card-body">
        <h6 style="color:#fff; text-align:center;">Courses Status</h6>
        </div>
      </div>
      </a>
      <br>
      <a href="#">
      <div class="card status">
        <div class="card-body">
        <h6 style="color:#fff; text-align:center;">Syllabus Status</h6>
        </div>
      </div>
      </a>
      <br>
      <a href="continuous_show.php">
      <div class="card status">
        <div class="card-body">
        <h6 style="color:#fff; text-align:center;">Continuous Status</h6>
        </div>
      </div>
      </a>
      <br>
      <a href="final_show.php">
      <div class="card status">
        <div class="card-body">
        <h6 style="color:#fff; text-align:center;">Final Status</h6>
        </div>
      </div>
      </a>
      <br>
    </div>
  </div>
</div>




<script src="https://kit.fontawesome.com/b9bc67d814.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



</body>
</html>