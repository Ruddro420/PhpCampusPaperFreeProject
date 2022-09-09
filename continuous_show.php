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
    <title>Continuous Status</title>
    <style>
@media(max-width:768px) {
    .embd{
      width:340px !important;
      height:500px !important;
      text-align:center !important;
    }
  }

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

<div class="container mt-5">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12 mt-3">
      <div class="card">
        <div class="card-body">
        <h3 style="color:#fff; text-align:center;">Continuous Status</h3>
        <h6 style="color:#fff; text-align:center;">Insert Your Information Carefully</h6> <br>
        <!--Start Form Function-->
        <form  method="post">
        <div class="form-group">
<label style="color:#E5E4E4;" for="StudentID">Semester</label>
<select name="semester" style="color:#979797;" class="form-select" aria-label="Default select example" required>
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
<label style="color:#E5E4E4;" for="StudentID">Sessions</label>
<select name="session" style="color:#979797;" class="form-select" aria-label="Default select example" required>
  <option selected disabled value="">Select Your Sessions</option>
  <option value="2010-2011">2010-2011</option>
  <option value="2011-2012">2011-2012</option>
  <option value="2012-2013">2012-2013</option>
  <option value="2013-2014">2013-2014</option>
  <option value="2014-2015">2014-2015</option>
  <option value="2015-2016">2015-2016</option>
  <option value="2016-2017">2016-2017</option>
  <option value="2017-2018">2017-2018</option>
  <option value="2018-2019">2018-2019</option>
  <option value="2019-2020">2019-2020</option>
  <option value="2020-2021">2020-2021</option>
  <option value="2021-2022">2021-2022</option>
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



 <br>
 <div class="text-center">
  <input style="color:#19D5BA; border:1px solid #19D5BA; text-align:center;padding-left:40px; padding-right:40px;" class="btn" type="submit" name="submit" value="Search Here"> <br> <br>
  </div>
</form>

        </div>
      </div>
    </div>

    
<?php


//Main Condition

if(isset($_POST['submit'])){

  $semester = $_POST['semester'];

  $session = $_POST['session'];

  $course = $_POST['course'];

  $result = mysqli_query($link , "SELECT * FROM `course_upload` WHERE `semester` = '$semester' AND `session` = '$session' AND `course` = '$course' ;");

  if(mysqli_num_rows($result) > 0){

    $row = mysqli_fetch_assoc($result);

    ?>
    
  <!--Search Style Start-->
<div class="container mt-5 mb-5">
  <div class="row">
    <div class="col">
      <div class="">
        <div class="">
        <form  method="post">
        <table class=" text-center">
       


<?php

$inv_data = mysqli_query($link , "SELECT * FROM `course_upload` WHERE `semester` = '$semester' AND `session` = '$session' AND `course` = '$course' ;");

while($row = mysqli_fetch_array($inv_data))

{?>

        <!--Start Form Function-->
        <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne<?php echo $row['id'] ?>">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?php echo $row['id'] ?>" aria-expanded="false" aria-controls="flush-collapseOne">
      <b></b> <span style="margin-right:20px;" ><?php echo $row['session'] ?></span> 
      <b></b> <span style="margin-right:20px;" ><?php echo $row['semester'] ?></span> 
      </button>
    </h2>
    <div id="flush-collapseOne<?php echo $row['id'] ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"> 
      <a style="color:black; font-weight:600;" href="admin/pdf/<?php echo $row['pdf'] ?>" >Download Here</a>
      
      </div>
    </div>
  </div>
</div>
 <!--END Form Function-->


 

  <?php

}

?>
</tbody>
</table>
</form>
        </div>
      </div>
    </div>

    <div class="col-4">

    </div>
  </div>
</div>
<!--Search Style End-->

    <?php
  }

  else
  {
    $data_error = "Data Not Found. Please Input Carefully !!";
  }


}
//Main Condition End

?>




    <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
      <a href="user.php">
      <div class="card status">
        <div class="card-body">
        <h6 style="color:#fff; text-align:center;">Courses Status</h6>
        </div>
      </div>
      </a>
      <br>
      <a href="syllabus_show.php">
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




<!--Data Error Solve Start-->
<div class="container">
  <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4 bg-danger">
    <?php if(isset($data_error)) echo $data_error ?>
    </div>
  </div>
</div>
<!--Data Error Solve End-->


<script src="https://kit.fontawesome.com/b9bc67d814.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



</body>
</html>