
<?php

if(isset($_POST['submit'])) { 

  
  $id = $_POST['id'];
  
  
  $password = $_POST['password'];

 
// Add connection

require_once 'dbconnection.php';


// UserName And Email Checking Start

$user_check = mysqli_query($link, "SELECT * FROM user WHERE `std_id` = '$id';");


if(mysqli_num_rows($user_check) > 0 )
{

  $row = mysqli_fetch_assoc($user_check);

  if($row['password'] == $password)
  
  {
      
      
    // Status Checking Start

    $user_check = mysqli_query($link, "SELECT * FROM user WHERE `std_id` = '$id';");
    
    $row = mysqli_fetch_assoc($user_check);
    
     if($row['status'] == 1){
        
    session_start();

    $_SESSION['user_page'] = $id;

    header("Location:user.php");
        
    }
    
     // Status Checking End
     
     else
     {

    echo "<script type='text/javascript'>alert('Your Account Is Deactive . Please Wait for Further Update !!');location='login.php';</script>";
  

  }
  }
  // End New Code

  else
  
  {
      $error_message = "Username or password not matching";
  }
  
}
  
  else 
  {
  
    $error_message = "Username or password not matching";
  
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
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
    <title>Sign In</title>
    <style>

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
  <div style="background:#1A2127;width: 60%;margin: auto; margin-top:110px;" class="row shadow mb_res">
    <div class="col">
      <div class="card m-3">
        <div style="background:#1A2127;" class="card-body">
        <div class="">
    <div style="margin:0px;" class="row lg_mt">
        <div class="col">
        <h1 style="color:#19D5BA; text-align:center;">Login Here</h1>
        <h6 style="color:#BFBEBE; text-align:center;">Give your user information carefully.</h6> <br>
        <h6 style="color: #F01B1B; text-align:center; letter-spacing:.2rem; font-size:18px;" ><?php if(isset($error_message)) echo $error_message; ?></h6>

<form method="post">
  <div class="form-group">
    <label style="color:#E5E4E4;" for="StudentID">Student ID</label>
    <input placeholder="ex: 1705036" min="0" max="" step="1" type="number" class="form-control btn-lg" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" required>
  </div> <br>
  <div class="form-group">
  <label style="color:#E5E4E4;" for="password">Password</label>
    <input placeholder="ex: 123456" type="password" class="form-control btn-lg" id="exampleInputPassword1"  name="password" required>
  </div>
 <br>
 <div class="text-center mt-4">
 <input style="color:#19D5BA; border:1px solid #19D5BA; text-align:center;padding-left:40px; padding-right:40px;"  class="btn" type="submit" name="submit" value="Sign In"> <br> <br>
 </div>
 <div class="text-center">
 <b style="color:#19D5BA;">If you have not signed up please, <a  class="text-white" href="register.php">Sign Up Here</a> </b>
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
<script src="https://kit.fontawesome.com/ee680e596f.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>
</html>