<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--Css-->
    <link rel="stylesheet" href="logins/index.css">



    <title>Capstone</title>
    <style>
      body{
        height: 100vh;
        background-image: url("bg-img/login.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: 30%;
      }
    </style>
  </head>
  <body>
    <?php require_once('login-assets/navbar.php');?>



    <!--login Box (Admin)-->
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
      <div class="row ">
        <div class="col-12 d-flex justify-content-center align-items-center">
      <div class="card login-card " style="width: 20rem;">
        <div class="card-body">
          <div class="iconContainer d-flex justify-content-center align-items-center">
            <i class="bi bi-person-circle adminIcon color-white"></i>
          </div>
        <div class="welcome  d-flex justify-content-center align-items-center">
          <p class="text-a">Welcome Back Admin</p>
        </div>
          <form >
            <div class="mb-3" >
              <label for="exampleInputEmail1" class="form-label text-light">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label text-light">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" >
            </div>
            <!-- <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
           
          </form>
          <a href="Home/dashboard.php"><button type="submit" class="btn btn-primary w-100">Login</button></a>
          <!-- <a href="#" class="card-link login-card-link">Forgot Email or Password?</a> -->
          </div>
        </div>
      </div>
<?php require_once ("login-assets/moto.php"); ?>
     </div>
  </div>

<?php require_once("login-assets/footer.php") ?>
