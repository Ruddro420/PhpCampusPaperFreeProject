<?php


// Add connection
require_once 'dbconnection.php';

// method['char_name'];
// method[int];

if(isset($_POST['submit'])) {

// Define Input Field

$id = $_POST['id'];

$reg_id = $_POST['reg_id'];

$dept = $_POST['dept'];

$programs = $_POST['programs'];

$session = $_POST['session'];

$email = $_POST['email'];

$phn_num = $_POST['phn_num'];

$hall_name = $_POST['hall_name'];

$password = $_POST['password'];

 
// UserName And Email Checking Start

$user_check = mysqli_query($link, "SELECT * FROM `user` WHERE `std_id` = '$id';");
$email_check = mysqli_query($link, "SELECT * FROM `user` WHERE `email_address` = '$email';");
$reg_check = mysqli_query($link, "SELECT * FROM `user` WHERE `std_reg` = '$reg_id';");

if(mysqli_num_rows($user_check) == 0)
{

// Start Inner Loop For Email Checking
  
if(mysqli_num_rows($email_check) == 0)
{

  if(mysqli_num_rows($reg_check) == 0)
{

  //PassWord Length

  if(strlen(trim($password)) >= 6)
  {
  //Data Insertion Start
  // SELECT = SEARCH 
  // WHERE = CONDTION

$sql = "INSERT INTO `user`(`std_id`, `std_reg`, `dept`, `progm`, `session`, `email_address`, `phn_num`, `hall_name`, `password`) VALUES ('$id', '$reg_id','$dept','$programs','$session','$email','$phn_num','$hall_name','$password')";


  $result = mysqli_query($link, $sql);

  if($result)
  {
    session_start();

    $_SESSION['user_page'] = $id;

    header("Location:create_ac.php");
  }

  else 
  {
    header("Location:register.php");
  }
}

else

{

  $pass_error = "Password must be 6 characters";
}


}

else
{
  $reg_error = "This Registration ID Has Already Exits. Please Check Carefully";
}

}

else 
{
    
    $email_error = "This Email Has Already Exits. Please Use another one";
}

//End Inner Loop For Email Checking 


}

else 
{

$user_error = "This Student Id Has Already Exits. Please Check Carefully";

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
        border: none;
      }

@media(max-width:768px){
.lg_mt{
  margin: 0px !important;
}

.m-5 {
  margin: 1rem !important;
}

.mb_res{
  width:100% !important;
}
.m-3{
  margin-top: 1rem !important;
  margin-left: 0rem !important;
  margin-bottom: 1rem !important;
  margin-right: 0rem !important;
}

.card{
 padding:1px !important;


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
  <div style="background:#1A2127;width: 60%;margin: auto; margin-top:60px;margin-bottom:60px;" class="row shadow mb_res">
    <div class="col">
      <div style="background:#1A2127;" class="card m-3">
        <div style="background:#1A2127;" class="card-body">
          
<div class="">
    <div class="row">
        <div class="col">
        <h1 style="color:#19D5BA; text-align:center;">Sign Up Here</h1>
        <h6 style="color:#BFBEBE; text-align:center;">Fill up the form with your information carefully.</h6> <br>
        <h6 style="color:#19D5BA; text-align:center;">Student ID* (7 Digit for Honors ex. 1805010 and 9 Digit for Masters ex. 021609021)</h6> <br>
     
<form  method="post">
<div class="form-group">
<label style="color:#E5E4E4;" for="StudentID">Student ID</label>
    <input placeholder="ex: 1705036" min="0" type="number" class="form-control btn-lg" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" value ="<?php if(isset($first_name)) echo $first_name ?>" required> <label style="color: #F01B1B; text-align:center; letter-spacing:.2rem; font-size:18px;" for="exampleInputEmail1"><?php if(isset($user_error)){ echo $user_error;} ?></label>
    <br>
  </div>

  <div class="form-group">
<label style="color:#E5E4E4;" for="StudentID">Student Registration ID</label>
    <input placeholder="ex: 000010003" min="0" type="number" class="form-control btn-lg" id="exampleInputEmail1" aria-describedby="emailHelp" name="reg_id" value ="<?php if(isset($first_name)) echo $first_name ?>" required> <label style="color: #F01B1B; text-align:center; letter-spacing:.2rem; font-size:18px;" for="exampleInputEmail1"><?php if(isset($reg_error)){ echo $reg_error;} ?></label>
    <br>
  </div>

  <div class="form-group">
<label style="color:#E5E4E4;" for="StudentID">Name Of The Department</label>
<select  name="dept" name="programs" style="color:#979797;" class="form-select" aria-label="Default select example" required>
  <option selected>Select Your Department</option>
  <option value="Computer Science & Engineering">Computer Science & Engineering</option>
</select>
    <br>
  </div>

  
  <div class="form-group">
<label style="color:#E5E4E4;" for="StudentID">Name's Of The Programs</label>
<select  name="programs" style="color:#979797;" class="form-select" aria-label="Default select example" required>
  <option selected>Select Your Programs</option>
  <option value="BSc (Engineering)">BSc (Engineering)</option>
  <option value="BSc (Hons.)2">BSc (Hons.)</option>
  <option value="B.A.(Hons.)">B.A.(Hons.)</option>
  <option value="B.B.A. (Hons.)">B.B.A. (Hons.)</option>
  <option value="B.S.S. (Hons.)">B.S.S. (Hons.)</option>
  <option value="MSc (Engineering)">MSc (Engineering)</option>
  <option value="MSc">MSc</option>
  <option value="M.A.">M.A.</option>
  <option value="M.B.A.9">M.B.A.</option>
  <option value="M.S.S.">M.S.S.</option>
  <option value="MPhil (MPhil leading to PhD)">MPhil (MPhil leading to PhD)</option>
  <option value="PhD">PhD</option>
</select>
    <br>
  </div>


  <div class="form-group">
<label style="color:#E5E4E4;" for="StudentID">Sessions</label>
<select name="session" style="color:#979797;" class="form-select" aria-label="Default select example" required>
  <option selected>Select Your Sessions</option>
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
  <label style="color:#E5E4E4;" for="Name">Student's Email</label>
    <input placeholder="ex: cse1705036brur@gmail.com" type="email" class="form-control btn-lg" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php if(isset($email)) echo $email ?>" required>
    <label style="color: #F01B1B; text-align:center; letter-spacing:.2rem; font-size:18px;" for="exampleInputEmail1"><?php if(isset($email_error)){ echo $email_error ;} ?></label>
    <br>
  </div>

  <div class="form-group">
  <label style="color:#E5E4E4;" for="Name">Student's Phone Number</label>
    <input min="0" placeholder="ex: +8801755232541" type="number" class="form-control btn-lg" id="exampleInputEmail1" aria-describedby="emailHelp" name="phn_num" value="<?php if(isset($user_name)) echo $user_name ?>" required>
    <br>
  </div>

  <div class="form-group">
  <label style="color:#E5E4E4;" for="Name">Student's Hall Name</label>
  <select  name="hall_name" style="color:#979797;" class="form-select" aria-label="Default select example" required>
  <option selected>Select Your Hall</option>
  <option value="Shaheed Moktar Elahi Hall">Shaheed Moktar Elahi Hall</option>
  <option value="Bangabandhu Sheikh Mujibur Rahman Hall">Bangabandhu Sheikh Mujibur Rahman Hall</option>
  <option value="Sheikh Fazilatunnesa Mujib Hall">Sheikh Fazilatunnesa Mujib Hall</option>

</select>
    <br>
  </div>
  
  <div class="form-group">
  <label style="color:#E5E4E4;" for="Name">Password</label>
    <input placeholder="ex: 123456" type="password" class="form-control btn-lg" id="exampleInputPassword1" name="password" required> 
    <label style="color: #F01B1B; text-align:center; letter-spacing:.2rem; font-size:18px;" for="exampleInputEmail1"><?php if(isset($pass_error)){ echo $pass_error;} ?></label>
  </div> <br>

  <div class="text-center">
  <input style="color:#19D5BA; border:1px solid #19D5BA; text-align:center;padding-left:40px; padding-right:40px;" class="btn" type="submit" name="submit" value="Sign Up"> <br> <br>
  </div>
  
  <div class="text-center">
  <b style="color:#19D5BA;">If you have already an account Please , <a class="text-white" href="login.php">Sign In Here</a> </b>
  </div>
  
 
</form>

        </div>
    </div>
</div>
        </div>
      </div>
    </div>
  </div>
</div>







<!--JS FILE-->


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://kit.fontawesome.com/ee680e596f.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>
</html>
