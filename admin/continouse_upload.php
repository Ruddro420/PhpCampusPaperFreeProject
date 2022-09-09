
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400&display=swap" rel="stylesheet">
<!--Google Font--> 
    <title>Final Result Upload</title>


    <style>

                  /* Focus Remove Start #########*/
.btn:focus {
  outline: none;
  box-shadow: none;
  color:#fff;
}

.nav-link:focus:hover {
  outline: none;
  box-shadow: none;
  color:#fff !important;
}

.form-control:focus {
  outline: none;
  box-shadow: none;
}
.form-select:focus {
  outline: none;
  box-shadow: none;
}
/* Focus Remove End #########*/
/* Focus Remove Start #########*/
.btn:focus {
  outline: none;
  box-shadow: none;
}

.form-control:focus {
  outline: none;
  box-shadow: none;
}
/* Focus Remove End #########*/

.form-control[type=file]:not(:disabled):not([readonly]) {
    cursor: pointer;
    background: #DDE0E3 !important;
    color: black !important;
}
  
  /*Select Field Style Start*/

  .form-select {
    display: block;
    width: 100%;
    padding: 0.375rem 2.25rem 0.375rem 0.75rem;
    -moz-padding-start: calc(0.75rem - 3px);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #fff;
    background-color: #1A2127;
    background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e);
    background-repeat: no-repeat;
    background-position: right 0.75rem center;
    background-size: 16px 12px;
    border-top: none !important;
    border-left: none !important;
    border-right: none !important;
    border-bottom: 3px solid #19D5BA;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}


  /*Select Field Style End*/

  /* Input Field Design Start #########*/
.form-control {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #ffff !important;
    background-color: #1A2127 !important;
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

      .card{
        border: none;
      }

@media(max-width:768px){
.lg_mt{
  margin: 0px !important;
}

.m-5 {
  margin: 1rem !important;
}

}

      body
      {
        font-family: 'Roboto Condensed', sans-serif;
        background:#232E34;
        color:white !important;
        
      }
    </style>
</head>
<body>
<!--Main Body-->

<div class="container">
  <div style="background:#1A2127;width: 60%;margin: auto; margin-top:70px; margin-bottom:110px;" class="row shadow">
    <div class="col">
      <div class="card m-3">
        <div style="background:#1A2127;" class="card-body">
        <div class="">
    <div style="margin:0px;" class="row lg_mt">
        <div class="col">
        <h1 style="color:#19D5BA; text-align:center;">Continuous Result Upload</h1>
        <h6 style="color:#BFBEBE; text-align:center;">Give your admin information carefully.</h6> <br>


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
<label style="color:#E5E4E4;" for="StudentID">Sessions</label>
<select required name="session" style="color:#979797;" class="form-select" aria-label="Default select example">
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



  <div class="form-group">
    <label style="color:#E5E4E4;" for="StudentID">Continuous Upload</label>
    <input id="pdf" type="file" class="form-control" name="pdf" accept="application/pdf"  required>
  </div>
 <br>

 
<?php


// Add connection

$link = mysqli_connect("localhost","root","","home_inventory");

if(isset($_POST['submit'])) { 

  
  $semester = $_POST['semester'];
  
  $session = $_POST['session'];

  $course = $_POST['course'];

  $pdf = $_FILES['pdf']['name'];

  $pdf_type = $_FILES['pdf']['type'];

  $pdf_size = $_FILES['pdf']['size'];

  $pdf_tmp_loc = $_FILES['pdf']['tmp_name'];

  $pdf_store = "pdf/".$pdf;

  move_uploaded_file($pdf_tmp_loc,$pdf_store);


// Insert Data

$sql = "INSERT INTO `course_upload`(`semester`, `session`, `course`, `pdf`) VALUES ('$semester','$session','$course','$pdf')";

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

 <div class="text-center mt-4">
 <input style="color:#19D5BA; border:1px solid #19D5BA; text-align:center;padding-left:40px; padding-right:40px;"  class="btn" type="submit" name="submit" value="Continuous Upload"> <br> <br>
 </div>
</form>

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

        </div>
    </div>
</div>
        </div>
      </div>
    </div>
    
  </div>
</div>



<!--JS FILE-->
<script src="https://kit.fontawesome.com/ee680e596f.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>
</html>