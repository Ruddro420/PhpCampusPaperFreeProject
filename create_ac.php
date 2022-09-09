<?php

// Add connection
require_once 'dbconnection.php';

session_start();

if(!isset($_SESSION['user_page'])){

    header("Location:register.php");

}

// Session Link
$session_user = $_SESSION['user_page'];

// Data Collect from Database

$user_data = mysqli_query($link, "SELECT * FROM `user` WHERE `std_id` = '$session_user';");

//Fetch Data from Database
$user_row = mysqli_fetch_row($user_data);

$std_id = $user_row['1'];

if(isset($_POST['submit'])) {

// Define Input Field

$first_name = $_POST['first_name'];

$last_name = $_POST['last_name'];

$father_name = $_POST['father_name'];

$mother_name = $_POST['mother_name'];

$guardian_name = $_POST['guardian_name'];

$permanent_addr = $_POST['permanent_addr'];

$present_addr = $_POST['present_addr'];

$date_of_birth = $_POST['date_of_birth'];

$nationality = $_POST['nationality'];

$religion = $_POST['religion'];

$gender = $_POST['gender'];

$ssc_name = $_POST['ssc_name'];

$ssc_Board = $_POST['ssc_Board'];

$ssc_school = $_POST['ssc_school'];

$ssc_roll = $_POST['ssc_roll'];

$ssc_year = $_POST['ssc_year'];

$ssc_gpa = $_POST['ssc_gpa'];

$hsc_name = $_POST['hsc_name'];

$hsc_board = $_POST['hsc_board'];

$hsc_college = $_POST['hsc_college'];

$hsc_roll = $_POST['hsc_roll'];

$hsc_year = $_POST['hsc_year'];

$hsc_gpa = $_POST['hsc_gpa'];

 


// UserName And Email Checking Start

$ssc_check = mysqli_query($link, "SELECT * FROM `user_profile` WHERE `ssc_roll` = '$ssc_roll';");
$hsc_check = mysqli_query($link, "SELECT * FROM `user_profile` WHERE `hsc_roll` = '$hsc_roll';");

if(mysqli_num_rows($ssc_check) == 0)
{

// Start Inner Loop For Email Checking
  
if(mysqli_num_rows($hsc_check) == 0)
{

  // SELECT = SEARCH 
  // WHERE = CONDTION

  $sql = "INSERT INTO `user_profile`(`std_id`,`first_name`, `last_name`, `father_name`, `mother_name`, `guardian_name`, `permanent_addr`, `present_addr`, `date_of_birth`, `nationality`, `religion`, `gender`, `ssc_name`, `ssc_board`, `ssc_school`, `ssc_roll`, `ssc_year`, `ssc_gpa`, `hsc_name`, `hsc_board`, `hsc_college`, `hsc_roll`, `hsc_year`, `hsc_gpa`) VALUES ('$std_id','$first_name','$last_name','$father_name','$mother_name','$guardian_name','$permanent_addr','$present_addr','$date_of_birth','$nationality','$religion','$gender','$ssc_name','$ssc_Board','$ssc_school','$ssc_roll','$ssc_year','$ssc_gpa','$hsc_name','$hsc_board','$hsc_college','$hsc_roll','$hsc_year','$hsc_gpa')";


  $result = mysqli_query($link, $sql);

  if($result)
  {
    header("Location:thankyou.php");
  }
  else 
  {
    echo "Something Wrong";
  }
}

else 
{
    
    $email_error = "This Roll Number Has Already Exits. Please Check Carefully";
}

//End Inner Loop For Email Checking 

}

else 
{

$user_error = "This Roll Number Has Already Exits. Please Check Carefully";

}

//Usename and Email Checking End


}


?>



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
    <title>Sign Up</title>
    
    <style>

      /* Focus Remove Start #########*/
.btn:focus {
  outline: none;
  box-shadow: none;
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



      .card{
        border:none;
      }

@media(max-width:768px){
  .p-3 {
  padding: 1rem !important;
}
.m-5 {
  margin: 1rem !important;
}
}

      body
      {
        font-family: 'Roboto Condensed', sans-serif;
        background:#232E34;
      }
    </style>


</head>
<body>
<!--Main Body-->





<div class="container">
  <div style="background:#1A2127;width: 60%;margin: auto; margin-top:60px;margin-bottom:60px;" class="row shadow">
    <div class="col">
      <div style="background:#1A2127;" class="card m-3">
        <div style="background:#1A2127;" class="card-body">
          
<div class="">
    <div class="row">
        <div class="col">
        <h1 style="color:#19D5BA; text-align:center;">Create Profile</h1>
        <h6 style="color:#BFBEBE; text-align:center;">Fill up the form with your information carefully.</h6> <br>
        <br>
     
<form  method="post">
<div class="form-group">
<label style="color:#E5E4E4;" for="StudentID">First Name</label>
    <input placeholder="ex: ali fiad" min="0" type="text" class="form-control btn-lg" id="exampleInputEmail1" aria-describedby="emailHelp" name="first_name" value ="<?php if(isset($first_name)) echo $first_name ?>" required>
    <br>
  </div>
  <div class="form-group">
  <label style="color:#E5E4E4;" for="Name">Last Name</label>
    <input placeholder="ex: ruddro" type="text" class="form-control btn-lg" id="exampleInputEmail1" aria-describedby="emailHelp" name="last_name" value="<?php if(isset($last_name)) echo $last_name ?>">
    <br>
  </div>

  <div class="form-group">
  <label style="color:#E5E4E4;" for="Name">Father's Name</label>
    <input placeholder="ex: abul kalam" type="text" class="form-control btn-lg" id="exampleInputEmail1" aria-describedby="emailHelp" name="father_name" value="<?php if(isset($email)) echo $email ?>" required>
    
    <br>
  </div>

  <div class="form-group">
  <label style="color:#E5E4E4;" for="Name">Mother's Name</label>
    <input placeholder="ex: amena begum" type="text" class="form-control btn-lg" id="exampleInputEmail1" aria-describedby="emailHelp" name="mother_name" value="<?php if(isset($user_name)) echo $user_name ?>" required>
    <label style="color: #F01B1B; text-align:center; letter-spacing:.2rem; font-size:18px;" for="exampleInputEmail1"><?php if(isset($user_error)){ echo $user_error;} ?></label>
    <br>
  </div>

  <div class="form-group">
  <label style="color:#E5E4E4;" for="Name">Guardian Name</label>
    <input placeholder="ex: bokul tola , dhaka" type="text" class="form-control btn-lg" id="exampleInputPassword1" name="guardian_name" required> 
    <label style="color: #F01B1B; text-align:center; letter-spacing:.2rem; font-size:18px;" for="exampleInputEmail1"><?php if(isset($pass_error)){ echo $pass_error;} ?></label>
  </div> <br>
  
  <div class="form-group">
  <label style="color:#E5E4E4;" for="Name">Permanent Address</label>
    <input placeholder="ex: chartolamor,rangpur" type="text" class="form-control btn-lg" id="exampleInputPassword1" name="permanent_addr" required> 
    <label style="color: #F01B1B; text-align:center; letter-spacing:.2rem; font-size:18px;" for="exampleInputEmail1"><?php if(isset($pass_error)){ echo $pass_error;} ?></label>
  </div> <br>


  <div class="form-group">
  <label style="color:#E5E4E4;" for="Name">Present Address</label>
    <input placeholder="ex: bokul tola , dhaka" type="text" class="form-control btn-lg" id="exampleInputPassword1" name="present_addr" required> 
    <label style="color: #F01B1B; text-align:center; letter-spacing:.2rem; font-size:18px;" for="exampleInputEmail1"><?php if(isset($pass_error)){ echo $pass_error;} ?></label>
  </div> <br>

  <div class="form-group">
  <label style="color:#E5E4E4;" for="Name">Date of Birth</label>
    <input style="color:#979797 !important;" placeholder="ex: bokul tola , dhaka" type="date" class="form-control btn-lg" id="exampleInputPassword1" name="date_of_birth" required> 
    <label style="color: #F01B1B; text-align:center; letter-spacing:.2rem; font-size:18px;" for="exampleInputEmail1"><?php if(isset($pass_error)){ echo $pass_error;} ?></label>
  </div> <br>

  <div class="form-group">
  <label style="color:#E5E4E4;" for="Name">Nationality</label>
    <input placeholder="ex: bangladeshi" type="text" class="form-control btn-lg" id="exampleInputPassword1" name="nationality" required> 
    <label style="color: #F01B1B; text-align:center; letter-spacing:.2rem; font-size:18px;" for="exampleInputEmail1"><?php if(isset($pass_error)){ echo $pass_error;} ?></label>
  </div> <br>

  <div class="form-group">
  <label style="color:#E5E4E4;" for="Name">Religion</label>
  <select name="religion" style="color:#979797;" class="form-select" aria-label="Default select example">
  <option  selected>Select Your Religion</option>
  <option value="Islam">Islam</option>
  <option value="Hindus">Hindus</option>
  <option value="Buddhists">Buddhists</option>
  <option value="Christians">Christians</option>
  <option value="Others">Others</option>
</select>
    <label style="color: #F01B1B; text-align:center; letter-spacing:.2rem; font-size:18px;" for="exampleInputEmail1"><?php if(isset($pass_error)){ echo $pass_error;} ?></label>
  </div> <br>

  <div class="form-group">
  <label style="color:#E5E4E4;" for="Name">Gender</label>
  <select  name="gender" style="color:#979797;" class="form-select" aria-label="Default select example">
  <option selected>Select Your Gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Others">Others</option>
</select>
    <label style="color: #F01B1B; text-align:center; letter-spacing:.2rem; font-size:18px;" for="exampleInputEmail1"><?php if(isset($pass_error)){ echo $pass_error;} ?></label>
  </div> <br>

  <h1 style="color:#19D5BA; text-align:center;">Academic Information</h1>
        <h6 style="color:#BFBEBE; text-align:center;">Fill up the form with your information carefully.</h6> <br>
        <br>
  <!-- Accademic Function One-->

  <div class="form-group">
<label style="color:#E5E4E4;" for="StudentID">Name Of Exam</label>
<select name="ssc_name" style="color:#979797;" class="form-select" aria-label="Default select example">
  <option selected>Select Your Name of the Exam</option>
  <option value="SSC / Equivalence">SSC / Equivalence</option>
</select>
    <br>
  </div>
  <div class="form-group">
  <label style="color:#E5E4E4;" for="Name">Education Board</label>
  <select name="ssc_Board" style="color:#979797;" class="form-select" aria-label="Default select example">
  <option selected>Select Your Board</option>
  <option value="Barisal">Barisal</option>
  <option value="Dhaka">Dhaka</option>
  <option value="Chittagong">Chittagong</option>
  <option value="Comilla">Comilla</option>
  <option value="Dinajpur">Dinajpur</option>
  <option value="Jessore">Jessore</option>
  <option value="Rajshahi">Rajshahi</option>
  <option value="Sylhet">Sylhet</option>
  <option value="Madrasah9">Madrasah</option>
</select>
    <br>
  </div>

  <div class="form-group">
  <label style="color:#E5E4E4;" for="Name">School / College</label>
    <input name="ssc_school" placeholder="ex: rangpur zilla school" type="text" class="form-control btn-lg" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php if(isset($user_name)) echo $user_name ?>" required>
    <br>
  </div>
  <div class="form-group">
  <label style="color:#E5E4E4;" for="Name">Roll No</label>
    <input name="ssc_roll" placeholder="ex: bokul tola , dhaka" type="number" class="form-control btn-lg" id="exampleInputPassword1" required> 
    <label style="color: #F01B1B; text-align:center; letter-spacing:.2rem; font-size:18px;" for="exampleInputEmail1"><?php if(isset($user_error)){ echo $user_error ;} ?></label>
  </div>
  
  <div class="form-group">
  <label style="color:#E5E4E4;" for="Name">Passing Year</label>
  <select name="ssc_year" style="color:#979797;" class="form-select" aria-label="Default select example">
  <option selected>Select Your Year</option>
  <option value="2010">2010</option>
  <option value="2011">2011</option>
  <option value="2012">2012</option>
  <option value="2013">2013</option>
  <option value="2014">2014</option>
  <option value="2015">2015</option>
  <option value="2016">2016</option>
  <option value="2017">2017</option>
  <option value="2018">2018</option>
  <option value="2019">2019</option>
  <option value="2020">2020</option>
  <option value="2021">2021</option>
  <option value="2022">2022</option>
  <option value="2023">2023</option>
</select>
  </div> <br>

  <div class="form-group">
  <label style="color:#E5E4E4;" for="Name">GPA</label>
    <input name="ssc_gpa" placeholder="ex: 5.00" type="number" class="form-control btn-lg" id="exampleInputPassword1" required> 
  </div>
<!-- Accademic Function One END #######################-->

<br>
<!--Academic Function Two Start ######################-->

<div class="form-group">
<label style="color:#E5E4E4;" for="StudentID">Name Of Exam</label>
<select name="hsc_name" style="color:#979797;" class="form-select" aria-label="Default select example">
  <option selected>Select Your Name of the Exam</option>
  <option value="2">HSC / Equivalence</option>
</select>
    <br>
  </div>
  <div class="form-group">
  <label style="color:#E5E4E4;" for="Name">Education Board</label>
  <select name="hsc_board" style="color:#979797;" class="form-select" aria-label="Default select example">
  <option selected>Select Your Board</option>
  <option value="Barisal">Barisal</option>
  <option value="Dhaka">Dhaka</option>
  <option value="Chittagong">Chittagong</option>
  <option value="Comilla">Comilla</option>
  <option value="Dinajpur">Dinajpur</option>
  <option value="Jessore">Jessore</option>
  <option value="Rajshahi">Rajshahi</option>
  <option value="Sylhet">Sylhet</option>
  <option value="Madrasah">Madrasah</option>
</select>
    <br>
  </div>

  <div class="form-group">
  <label style="color:#E5E4E4;" for="Name">School / College</label>
    <input placeholder="ex: rangpur zilla school" type="text" class="form-control btn-lg" id="exampleInputEmail1" aria-describedby="emailHelp" name="hsc_college" value="<?php if(isset($user_name)) echo $user_name ?>" required>
    <label style="color: #F01B1B; text-align:center; letter-spacing:.2rem; font-size:18px;" for="exampleInputEmail1"><?php if(isset($user_error)){ echo $user_error;} ?></label>
    <br>
  </div>
  <div class="form-group">
  <label style="color:#E5E4E4;" for="Name">Roll No</label>
    <input placeholder="ex: bokul tola , dhaka" type="number" class="form-control btn-lg" id="exampleInputPassword1" name="hsc_roll" required> 
    <label style="color: #F01B1B; text-align:center; letter-spacing:.2rem; font-size:18px;" for="exampleInputEmail1"><?php if(isset($email_error)){ echo $email_error ;} ?></label>
  </div>
  
  <div class="form-group">
  <label style="color:#E5E4E4;" for="Name">Passing Year</label>
  <select name="hsc_year" style="color:#979797;" class="form-select" aria-label="Default select example">
  <option selected>Select Your Year</option>
  <option value="2010">2010</option>
  <option value="2011">2011</option>
  <option value="2012">2012</option>
  <option value="2013">2013</option>
  <option value="2014">2014</option>
  <option value="2015">2015</option>
  <option value="2016">2016</option>
  <option value="2017">2017</option>
  <option value="2018">2018</option>
  <option value="2019">2019</option>
  <option value="2020">2020</option>
  <option value="2021">2021</option>
  <option value="2022">2022</option>
  <option value="2023">2023</option>
</select>
  </div> <br>

  <div class="form-group">
  <label style="color:#E5E4E4;" for="Name">GPA</label>
    <input placeholder="ex: 5.00" type="number" class="form-control btn-lg" id="exampleInputPassword1" name="hsc_gpa" required> 
    <label style="color: #F01B1B; text-align:center; letter-spacing:.2rem; font-size:18px;" for="exampleInputEmail1"><?php if(isset($pass_error)){ echo $pass_error;} ?></label>
  </div> <br>


  <div class="text-center">
  <input style="color:#19D5BA; border:1px solid #19D5BA; text-align:center;padding-left:40px; padding-right:40px;" class="btn" type="submit" name="submit" value="Create Profile"> <br> <br>
  </div>
  
  <div class="text-center">
  <b style="color:#19D5BA;">If you have already an Profile Please , <a class="text-white" href="login.php">Sign In Here</a> </b>
  </div>

  <!--Accademic Function Tow End #####################-->

 
</form>

        </div>
    </div>
</div>
        </div>
      </div>
    </div>
  </div>
</div>


        </div>
    </div>
</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Academic Information End ############-->





<!--JS FILE-->


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://kit.fontawesome.com/ee680e596f.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>
</html>