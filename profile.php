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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet"> 
 <!--Google Font-->
 <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400&display=swap" rel="stylesheet">
<!--Google Font--> 
<link rel="stylesheet" href="css/style.css">
    <title>Profile</title>
   
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



<div class="container">
    <div class="row mb-5">
        <div class="col p-5">
        <table class="table border-radius table table-dark table-striped">

<tbody class="border bg-light p-5">
    <h4>My Profile</h4> <hr>
    
  <tr>
    <td>Id No</td>
    <td><?= $user_row['1']?></td>
  </tr>
  <tr>
    <td>Registration No</td>
    <td><?= $user_row['2']?></td>
  </tr>

  <tr>
    <td>Department</td>
    <td><?= $user_row['3']?></td>
  </tr>
  <tr>
    <td>Programm</td>
    <td><?= $user_row['4']?></td>
  </tr>
  <tr>
    <td>Session</td>
    <td><?= $user_row['5']?></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><?= $user_row['6']?></td>
  </tr>
  <tr>
    <td>Phone Number</td>
    <td><?= $user_row['7']?></td>
  </tr>
  <tr>
    <td>Hall Name</td>
    <td><?= $user_row['8']?></td>
  </tr>
</tbody>

</table>

<!-- Button trigger modal -->
<a style="color:#19D5BA; border:1px solid #19D5BA; text-align:center;padding-left:40px; padding-right:40px;" class="btn" href="updateuser.php?<?= base64_encode($user_row['0'])?>">Edit Profile</a>
      


        </div>
    <div class="col-4 mt-5">
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


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>