
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
    <title>User</title>
    <style>

.nav-link {
    display: block;
    padding: 0.5rem 1rem;
    color: white !important;
    text-decoration: none;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
}


element.style {
}
.navbar-brand {
    padding-top: 0.3125rem;
    padding-bottom: 0.3125rem;
    margin-right: 1rem;
    font-size: 1.25rem;
    text-decoration: none;
    white-space: nowrap;
    color: white;
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: none !important;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: 0.25rem;
}


 /* Pdf Embaed Start #########*/
#toolbar {
    align-items: center;
    background-color: #1A2127 !important;
    color: white;
    display: flex;
    height: var(--viewer-pdf-toolbar-height);
    padding: 0 16px;
}

 /* Pdf Embaed End #########*/


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

  .table>thead {
    vertical-align: bottom;
    color: #fff;
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

      a{
        color: #fff;
        text-decoration:none;
      }

      .nav-link {
        color: #fff;
      }

      a:hover{
        color: #fff !important;
      }

      .nav-link:hover {
        color: #fff;
      }

      .navbar-toggler {
    padding: 0.25rem 0.75rem;
    font-size: 1.25rem;
    line-height: 1;
    background-color: white;
    border: 1px solid transparent;
    border-radius: 0.25rem;
    transition: box-shadow .15s ease-in-out;
}

.card{
        border: none;
        background: #1A2127;
        padding:15px;
      }

      .status{
        padding:10px;
        border:3px solid #19D5BA;

      }

        /* Top Menu Bar */

        .dropbtn {
  background-color: #F8F9FA;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #F8F9FA;}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}

 /* Top Menu Bar End */
  

        body
        
        {
          font-family: 'Roboto Condensed', sans-serif;
          background:#232E34;
          color:white !important;

        }
    </style>
</head>


<body>

<!--New Nav Bar Start-->
<nav style="background:#1A2127; color:#fff;" class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="#">Admin</a>
    <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=course_upload.php">Course Upload</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=final_upload.php">Final Upload</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=continouse_upload.php">Continuous Upload</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?page=pdf_upload.php">Syllabus Upload</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=notice_upload.php">Notice Upload</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?page=routine_upload.php">Routine Upload</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?page=prv_qs_upload.php">Previous Question Upload</a>
        </li>

        <li class="nav-item">
        <a class="nav-link" style="display:block;"  href="logout.php"><i class="fa-solid fa-bell"></i>Logout</a>
       
     
    </div>
  </div>
</nav>
<!--New Nav Bar End-->
<br>
<marquee behavior="" direction=""><h3 style="text-transform:uppercase; color:#F63535;" >Please Insert Your Data in Above Menu Bar !!</h3></marquee>
<div class="container">
    <div class="row">
        <div class="col">
            <!--Page Function Start-->
        <div>
            <?php
            if(isset($_GET['page'])){
              $page = $_GET['page'];
            }
            else $page = "index.php";
          if(file_exists($page)){

            require_once $page;
          }
            ?>
        </div>
 <!--Page Function Start-->
  

        </div>
    </div>
</div>

<script src="https://kit.fontawesome.com/b9bc67d814.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



</body>
</html>