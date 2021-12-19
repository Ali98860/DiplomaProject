<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo.jpg">

    <title>Designer's Space</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="sign_up.php" method="post">
      <img class="mb-4" src="images/logo.jpg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Регистрация</h1>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Пароль</label>
      <input type="Password" id="inputPassword" name="Password" class="form-control" placeholder="Password" required>

      <label for="inputEmail" class="sr-only">Имя</label>
      <input type="first_name" id="first_name" name="first_name" class="form-control" placeholder="Имя" required autofocus>

      <label for="inputEmail" class="sr-only">Фамилия</label>
      <input type="last_name" id="last_name" name="last_name" class="form-control" placeholder="Фамилия" required autofocus>

      <label for="inputEmail" class="sr-only">Номер телефона</label>
      <input type="number" id="mobile_number" name="mobile_number" class="form-control" placeholder="Номер телефона" required autofocus>

      <label for="inputEmail" class="sr-only">День рождения</label>
      <input type="date" id="dob" name="dob" class="form-control" placeholder="День рождения" required autofocus>





      <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" value="sign Up">

      <a href="job-post.php">Уже есть аккаунт</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>
  </body>
</html>

<?php
include('connection/db.php');
if(isset($_POST['submit'])){
  $email=$_POST['email'];
  $Password=$_POST['Password'];
  $first_name=$_POST['first_name'];
  $last_name=$POST['last_name'];
  $dob=$_POST['dob'];
  $mobile_number=$_POST['mobile_number'];




  $query=mysqli_query($conn, "insert into jobskeer(email, password, first_name, last_name, dob, mobile_number) values('$email', '$Password', '$first_name', '$last_name', '$dob', '$mobile_number')");

  if($query){
    echo "<script> alert('Now you can login')</script>";
    header('location: job-post.php');

  } else{
    echo "<script>alert('some error')</script>";
}}

?>