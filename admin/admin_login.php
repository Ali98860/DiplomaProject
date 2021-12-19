<?php 
session_start();


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo.jpg">

    <title>Designer's Space</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="css/admin_login.css" rel="stylesheet">

    <!-- <script type="text/javascript" src="js/admin_login.js"></script> -->
  </head>

  <body class="text-center">
    <form class="form-signin" id="admin_login" method="post" action="admin_login.php" name="admin_login">
      <img class="mb-4" src="" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Логин</h1>

      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>

      <label for="inputPassword" class="sr-only">Пароль</label>
      <input type="password" id="pass" name="pass" class="form-control" placeholder="Пароль" required>

      <input class="btn btn-lg btn-primary btn-block" name="submit" id="submit" type="submit" placeholder="Логин">
      <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>
  </body>
</html>


<?php 
include('connection/db.php');

if (isset($_POST['submit'])) {
$email=$_POST['email'];
$pass=$_POST['pass'];


$query=mysqli_query($conn, "select * from admin_login where admin_email='$email' and admin_pass='$pass' ");
if($query){
if (mysqli_num_rows($query)>0) {

  $_SESSION['email']=$email;
  header('location: admin_dashboard.php');
 }// else {
//   echo "<script>alert('Email or password incorrect')</script>";
// }
}}

?>